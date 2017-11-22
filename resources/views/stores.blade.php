<!DOCTYPE html>
<html lang="zh-tw">

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
    var cook=Cookies.get('shop');
        $(document).ready(function(){
            getshop();
            var cook=Cookies.get('shop');
            console.log(cook)
            if (typeof cook != 'undefined' &&cook!='' && cook!='undefined'){    
                var html="<div class=dropdown><a class='btn btn-outline-success text-success' role=button id=member data-toggle=dropdown aria-haspopup='true' aria-expanded=false>"+cook+"</a><div class='dropdown-menu bg-dark' aria-labelledby='dropdownMenuButton'><a class='dropdown-item bg-dark text-success' onclick=logout()>登出</a></div></div>"
                document.getElementById('members').innerHTML=html;
            }

        });
        function logout(){
            Cookies.remove('shop');
            location.href='/';
        }
        function getshop(){

            $.ajax({
                url: '/store/admin/get_all',
                dataType: "json",
                type: 'get',
                data: { locate:'台北'},
                success: function (data) {
                    console.log(data)
                }        
            });
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
                    <nav class="navbar navbar-dark bg-dark">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="請輸入外送地址" aria-label="Search" id="locate" >
                            <a class="btn btn-outline-success my-2 my-sm-0 text-success" role="button" onclick="golink()">搜尋</a>
                        </form>
                    </nav>
                </ul>
                <ul class="navbar-nav" id="members">
                    <button class="btn btn-outline-success ml-sm-2" data-toggle="modal" data-target="#login">登入</button>
                    <button class="btn btn-outline-danger ml-sm-2" data-toggle="modal" data-target="#register">註冊</button>
                </ul>
            </div>
        </nav>
    </header> 
    <div class="container mt-5">
            <div class='row'>
                <div class="mt-5">
                    <h2>台北的餐廳</h2>
                    <div class="row mt-4" id="shop">
                        
                        <div class="col-4">
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" src="/image/img_1511265472.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" src="/image/img_1511265472.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" src="/image/img_1511265472.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
         
</body>

</html>