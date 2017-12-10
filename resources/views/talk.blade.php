@extends('layouts.admin')

@section('content')
    <h1>聊天室</h1>
    <div class="row ">
        <div class="col-2 ">123</div>
        <div class="col-10">
            <div class="row">
                <div class="col-md-6" style="background-color:darkgray;height: 750px; ">789</div>
                <div class="col-md-6 "  style="background-color:darkgray; ">123</div>
            </div>
            <div class="input-group" style="background-color:darkgray">
                <input type="text";class="form-control" style="background-color:gainsboro" aria-describedby="basic-addon2"></textarea>
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">傳送</button>
                </span>
            </div>
        </div>
    </div>
@endsection