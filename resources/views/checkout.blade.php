<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content={{csrf_token()}}>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.js"></script>
    <style>
        button {
            cursor: pointer;
        }
        a{
            cursor:pointer;
        }
        
    </style>
    <script>
        $(document).ready(function(){
            var shopcart=Cookies.getJSON('shopcart')
            
            //console.log(shopcart)
            //console.log(shop)
            set_view(shopcart)
        });
        function set_view(shopcart){
            console.log(shopcart.length)
            console.log(shopcart)
            var shop=Cookies.get('Buy_shop')
            $.ajax({
                url: '/rest/api/buy/get_goods',
                dataType: "json",
                type: 'post',
                data: {Shop:shopcart},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if(data.success==1){
                        var data=data.data
                        var html=""
                        for(var i=0;i<data.length;i++){
                            html+="<div class='form-row mt-2' id=food"+data[i].food_id+"><div class='col-5' style='width:40rem;'><label class='col col-form-label'>"+data[i].food+"<label></div>"
                            html+="<div class='col' style='width:20rem;'><label class='col col-form-label'>"+data[i].money+"<label></div>"
                            html+="<div class='col'><select class='form-control' onchange='change_money(this.value,money"+data[i].food_id+","+data[i].money+")'>"
                            for(var j=0;j<data[i].amount;j++){
                                html+="<option>"+(j+1)+"</option>"
                            }
                            html+="</select></div>"
                            html+="<div class='col'><label class='col col-form-label' id=money"+data[i].food_id+">"+data[i].money+"<label></div>"
                            html+="<div class='col'><label class='text-danger col col-form-label' style='cursor:pointer;' onclick='delete_form('food"+data[i].food_id+"')'>刪除</label></div></div>"
                            
                        }
                        document.getElementById("goods").innerHTML=html;
                    }
                }
            });

        }
        function change_money(number,id,money){
            id.innerHTML=number*money
        }
        function delete_form(){
            
        }
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top mb-5 ">
        <a class="navbar-brand" href="/">EATs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <!--nav class="navbar navbar-dark bg-dark">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="請輸入外送地址" aria-label="Search" id="locate" >
                        <a class="btn btn-outline-success my-2 my-sm-0 text-success" role="button" onclick="golink()">搜尋</a>
                    </form>
                </nav-->
            </ul>
            <ul class="navbar-nav" id="members">
                <a class="btn btn-outline-success ml-sm-2 text-success" onclick="Checkout()">結帳</a>
            </ul>
        </div>
    </nav>
</header> 
    <div class="container mt-5">
        <div class='row'>
            <div class="mt-5">
                <div class="row">
                    <div class="col-12 mt-3">
                        <h2>結帳</h2>
                        <form class='border border-info rounded p-2 mt-4'> 
                            <div class="form-row">
                                <div class="col-5" style="width:40rem;">
                                    <label for="inputEmail3" class="col col-form-label">商品</label>
                                </div>
                                <div class="col" style="width:20rem;">
                                    <label for="inputEmail3" class="col col-form-label">單價</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">數量</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">總計</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">操作</label>
                                </div>
                            </div>
                        </form>
                        <form class='border border-success rounded p-2 mt-4' id="goods"> 
                            <div class="form-row">
                                <div class="col-5" style="width:40rem;">
                                    <label for="inputEmail3" class="col col-form-label">商品</label>
                                </div>
                                <div class="col" style="width:20rem;">
                                    <label for="inputEmail3" class="col col-form-label">單價</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">數量</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">總計</label>
                                </div>
                                <div class="col">
                                    <label for="inputEmail3" class="col col-form-label">操作</label>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
