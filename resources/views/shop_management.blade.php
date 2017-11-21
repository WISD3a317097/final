@extends('layouts.shopadmin')

@section('content')
<h1>貨物管理</h1>
    <div class='row placeholders '>
        <div class='col'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">食物名稱</th>
                        <th scope="col">價錢</th>
                        
                        <th scope="col">數量</th>
                        <th scope="col">圖片</th>
                        <th scope='col'>功能</th>
                    </tr>
                </thead>
                <tbody id='manager'>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td><a class="btn btn-primary" href="#" role="button">add</a></td>
                        <td><a class="btn btn-primary" href="#" role="button">del</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $.ajax({
                    url: '/rest/api/shop/goods',
                    dataType: "json",
                    type: 'get',
                    data:{email:cook},
                    success:function(data){
                        if(data.success==1){
                            var manager=document.getElementById('manager')
                            var len=data.data.length;
                            var html=''
                            for(var i=0;i<len;i++){
                                html+="<tr><th scope=1>"+data.data[i].id+"</th><td>"+data.data[i].food+"</td><td>"+data.data[i].money+"</td><td>"+data.data[i].amount+"</td>";
                                if(data.data[i]!="-1"){
                                    html+="<td>有</td>"
                                }
                                else{
                                    html+="<td>沒有</td>"
                                }
                                //<a class="btn btn-primary" href="#" role="button">Link</a>
                                html+="<td><a class='btn btn-outline-primary text-primary' role='button' onclick='golink()'>編輯</a><a class='btn btn-outline-danger text-danger ml-2' role='button' onclick='delete_food()'>刪除</a></td></tr></tr>";
                                console.log(data.data[i]);
                            }
                            manager.innerHTML=html;
                        }
                        else{

                        }
                        
                       
                    }
                });
        });
        function golink(){

        }
    </script>
@endsection