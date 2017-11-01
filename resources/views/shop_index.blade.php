@extends('layouts.shopadmin')

@section('content')
<h1>上架</h1>
    <div class='row placeholders '>
       <div class='col'>
            
       </div>
       <div class='col-8  mt-5' >
        <form class='border border-info rounded p-4'> 
            <div class="form-group ">
                <label>商品名稱</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="輸入商品名稱">
            </div>
            <div class="form-group">
                <label>價錢(單一價錢)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="輸入商品價錢">
            </div>
            <div class="form-group">
                <label>圖片</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="輸入商品價錢">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
       
       <div class='col'>
       </div>
@endsection