
@extends('layout.main')
@section('main1')

    <h2>الأخبار </h2>
    <p>
        <a href="nal/create">إدخال أسم موقع جديد</a>
    </p>
    <table id="example" class="table table-striped table-bordered" style="width:50%">
        <thead>
        <tr>
            <th>خبر عاجل</th>
            <th>رقم الخبر </th>
            <th>التعديل</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>

                <td>{{$row->id}}</td>
                <td>{{$row->title_name}}</td>
                <td><a href="{{route('nal.edit',$row->id)}}">تعديل</a></td>
                <td>
                    <form method="post" action="{{ route('nal.destroy',$row->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit">حذف</button>
                    </form>
                </td>

            </tr>
        @endforeach
        <tfoot>
        <tr>
            <th>خبر عاجل</th>
            <th>رقم الخبر </th>
            <th>التعديل</th>
            <th>حذف</th>
        </tfoot>
    </table>
        </tbody>

@endsection


