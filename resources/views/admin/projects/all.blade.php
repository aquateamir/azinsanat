@extends('admin.layouts.app')
@section('script')
@stop
@section('route')
    پروژه ها
@stop
@section('container')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">لیست پروژه ها</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>تصویر</th>
                    <th>تاریخ</th>
                    <th>بیشتر</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blog as $result)
                <tr>
                    <td>{{$result->title}}</td>
                    <td>
                        @foreach($result->categories as $cat)
                        <span class="bg-info m-2 p-1">{{ $cat->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <img class="img-size-64" src="{{asset($result->image)}}" alt="">
                    </td>
                    <td>{{Verta::instance($result->created_at)}}</td>

                    <td>
                        <a href="{{route('panel.destroy_project', $result->id)}}" class="btn btn-warning">حذف</a>
                        <a href="{{route('panel.edit_project', $result->id)}}" class="btn btn-secondary">بروزرسانی</a>
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
        {{$blog->links()}}
    </div>
@stop

