@extends('layouts.shopadmin')

@section('content')
<h1 id="title"></h1>


<script>
    
    
    $(document).ready(function(){
        var url=window.location.href
        url=url.split('/')
        var id=parseInt(url[url.length-1])
        $.ajax({
            url: '/rest/api/shop/goods_one',
            dataType: "json",
            type: 'get',
            data:{food_id:id},
            success:function(data){
                if(data.success==1){
                   var data=data.data
                   console.log(data)
                   document.getElementById("title").innerHTML="編輯食品："+data[0].food
                }
            }
        });    

    });

</script>
@endsection