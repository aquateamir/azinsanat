@extends('admin.layouts.app')
@section('script')
@stop
@section('route')
    دسته بندی ها
@stop
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">لیست دسته بندی ها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>تاریخ</th>
                    <th>بیشتر</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $result)
                    <tr>
                        <td>{{$result->name}}</td>


                        <td>{{Verta::instance($result->created_at)}}</td>

                        <td>
                            <a href="{{route('panel.destroy_cat', $result->id)}}" class="btn btn-warning">حذف</a>

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
        {{$categories->links()}}
    </div>
@stop

