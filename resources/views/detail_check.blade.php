@extends('layouts.admin')

@section('content')

<h1>{{"訂單編號：".$id}}</h1>
<div class='row'>
    <div class='col-12'>
        <div class="jumbotron jumbotron-fluid bg-muted">
            <div class="container">
                <div class="progress" style="height:30px;">
                    <div id='progress' class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <div class='row mt-5'>
                    <div class='col text-center'>
                        <p class="lead text-success">訂單建立</p>
                    </div>
                    <div class='col text-center'>
                        <p class="lead text-">訂單製作</p>
                    </div>
                    <div class='col text-center'>
                        <p class="lead">訂單運送</p>
                    </div>
                    <div class='col text-center'>
                        <p class="lead">訂單完成</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--div></div-->
       
</div>
<script>
    $(document).ready(function(){
        var progress=document.getElementById('progress')
        progress.style.width='50%';
        progress.innerHTML='50%;'
        var id="{{$id}}"
        console.log(id)
        $.ajax({
            url: '/rest/api/buy/detail',
            dataType: "json",
            type: 'get',
            data: {orderlist:id},
            success: function (data) {

            }
        });
    });

</script>
@endsection