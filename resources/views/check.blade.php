@extends('layouts.admin')

@section('content')

<h1>訂單總覽</h1>
<div class='row placeholders'>
       <div class='col-6 mt-3'>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">訂單</h4>
                    <a href="#" class="card-link"> link</a>
                </div>
            </div>
       </div>
       <div class='col-6 mt-3'>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">訂單</h4>
                    <a href="#" class="card-link">Card link</a>
                </div>
            </div>
       </div>
</div>
<script>
     $(document).ready(function(){
        var member=Cookies.get('member')
        console.log(member)
        
        $.ajax({
            url: '/rest/api/check',
            dataType: "json",
            type: 'get',
            data: { id: member},
            success: function (data) {
                console.log(data)
                
                
            }
        });
    });

</script>
@endsection