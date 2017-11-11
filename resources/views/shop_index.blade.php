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
                <input type="email" class="form-control" id="goods" aria-describedby="emailHelp" placeholder="輸入商品名稱">
            </div>
            <div class="form-group">
                <label>價錢(單一價錢)</label>
                <input type="password" class="form-control" id="goods_money" placeholder="輸入商品價錢">
            </div>
            <div class="form-group">
                <label>圖片</label>
                <input type="file" class="form-control-file upl" id="goods_image" >
                <img  class="rounded mx-auto d-block preview" style="max-width: 200px; max-height: 200px;">
                <div class="size"></div>
            </div>
            <button type="submit" class="btn btn-primary">上架</button>
        </form>
       </div>
       
       <div class='col'>
       </div>
       <script>
            $(document).ready(function(){
                function format_float(num, pos){
                        var size = Math.pow(10, pos);
                        return Math.round(num * size) / size;
                }

                function preview(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
            
                        reader.onload = function (e) {
                            $('.preview').attr('src', e.target.result);
                            var KB = format_float(e.total / 1024, 2);
                            $('.size').text("檔案大小：" + KB + " KB");
                        }
 
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("body").on("change", ".upl", function (){
                    preview(this);
                })
            });
    
       </script>
@endsection