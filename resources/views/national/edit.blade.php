@extends('admin.main')
@section('main1')
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    تعديل  الخبر
                </div>
                <div class="card-block">
    <form  action="{{route('admin.update',$data->id)}}" method="post">
        @csrf
        @method('Put')
        <div style="text-align: center; margin: auto;">
        <input style="color: white; background-color: #b0bec5; font-size: 20px;" type="text" name="title_name" placeholder="ادخل عنوان الخبر" value="{{$data->title_name}}">
            <input style="color: white; background-color: #b0bec5; font-size: 20px;" type="text" name="news_body" placeholder="ادخل نص خبر" value="{{$data->news_body}}">

            <button style="color: white; background-color: red;  font-size: 20px;"  type="submit" class="btn btn-sm btn-danger">تعديل</button></div>
    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


