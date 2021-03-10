@extends('admin.main')
@section('main1')
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    أضافة موقع جديد
                </div>
                <div class="card-block">
    <form  action="{{route('admin.store')}}" method="post">
        @csrf
        <div style="text-align: center; margin: auto;">
        <input style="color: white; background-color: #b0bec5;  font-size: 20px;" type="text"  name="title_name"  placeholder="ادخل عنوان الخبر">
         <input style="color: white; background-color: #b0bec5;  font-size: 20px;" type="text"  name="news_body"  placeholder="أدخل نص الخبر">
        <button style="color: white; background-color: red;  font-size: 20px;"   type="submit" class="btn btn-sm btn-success">إدخال</button></div>

    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

