@extends('layouts.shopadmin')

@section('content')
<h1>貨物管理</h1>
    <div class='row placeholders '>
        <div class='col'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">fuck you</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
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
                        console.log(data)
                    }
                });
        });

    </script>
@endsection