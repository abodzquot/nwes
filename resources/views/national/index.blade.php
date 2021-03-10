@extends('admin.main')
@section('main1')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"> الأخبار</i>
                    <br>
                    <button type="button" class="btn btn-link" style="text-align: center; background-color: red;"> <a style="color: white; font-size: 20px;" href="admin/create"><i class="fa fa-link"></i>&nbsp;اضافة خبر جديد</a> </button>
                </div>
                <div class="card-block">
    <table  class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>>
            <th>رقم الخبر</th>
            <th>عنوان الخبر</th>
            <th>نص الخبر</th>
            <th>التعديل</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>

                <td>{{$row->id}}</td>
                <td>{{$row->title_name}}</td>
                <td>{{$row->news_body}}</td>

                <td><a href="{{route('admin.edit',$row->id)}}">تعديل</a></td>
                <td>
                    <form method="post" action="{{ route('admin.destroy',$row->id) }}">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg m-t-2"></i>حدف</button>
                    </form>
                </td>

            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>رقم الخبر</th>
            <th>عنوان الخبر</th>
            <th>نص الخبر</th>
            <th>التعديل</th>
            <th>حذف</th>
        </tr>
        </tfoot>
    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


