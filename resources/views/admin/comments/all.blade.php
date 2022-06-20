@extends('admin.layouts.app')
@section('script')
@stop
@section('route')
    کامنت  ها
@stop
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">لیست  کامنت  ها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>کامنت</th>
                    <th>تاریخ</th>
                    <th>بیشتر</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $result)
                    <tr>
                        <td>{{$result->fullname}}</td>
                        <td>{{$result->email}}</td>
                        <td>{{$result->body}}</td>

                        <td>{{Verta::instance($result->created_at)}}</td>

                        <td>
                            <a href="{{route('panel.destroy_comment', $result->id)}}" class="btn btn-warning">حذف</a>
                            <a  href="{{route('panel.replay_comment', $result->id)}}" class="btn btn-secondary"> پاسخ دادن</a>

                        </td>
                    </tr>
                @endforeach


                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="d-flex align-items-center justify-content-center">
        {{$comments->links()}}
    </div>
@stop

