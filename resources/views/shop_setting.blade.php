@extends('layouts.shopadmin')

@section('content')
    <h1>商店設定</h1>
    <div class='row placeholders'>
         <div class='col-6'>
            <div class="card">
                <div class='card-header'>商店名稱</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0" id='shop'>
                        <input type="text" class="form-control" id="shop_name" value=''>
                        <p class='alert alert-danger mt-3'>(商店名稱不可再更改哦)</p>
                    </blockquote>
                    <a role="button" class="btn btn-primary text-light">確定</a>
                </div>
            </div>
         </div>
         <div class='col-6'>
            <div class="card">
                <div class='card-header'>開店時間</div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0" id='shop'>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="1" id="inlineRadio1" value="1"> 早上
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="2" id="inlineRadio2" value="2"> 下午
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="3" id="inlineRadio3" value="3"> 晚上
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="4" id="inlineRadio4" value="4"> 宵夜
                        </label>                        
                    </blockquote>
                    <a role="button" class="btn btn-primary text-light mt-3">確定開店</a>
                </div>
            </div>
         
         </div>
    </div>
    <script>
        $(document).ready(function(){
            
        });
    </script>
    
@endsection