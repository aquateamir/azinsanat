@extends('admin.layouts.app')
@section("script")

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("richtext.min.css")}}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset("jquery.richtext.min.js")}}"></script>
@stop
@section('route')
    پاسخ دادن
@stop
@section('container')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif @if(session()->has('err'))
        <div class="alert alert-danger">
            {{session()->get('err')}}
        </div>
    @endif
    <!-- general form elements -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">  پاسخ دادن </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach($comments as $result)

        <form id="comment" enctype="multipart/form-data" method="post" action="{{route('panel.store_comment', $result->id)}}" role="form" >
            @csrf
            @if($errors->any())
                {!!  implode('', $errors->all('<div class="alert alert-danger">:message</div>'))  !!}
            @endif

                <input type="hidden" name="comments_id" value="{{$result->id}}">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">پاسخ به </label>
                    <div class="input-group">
                        {{$result->body}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">پاسخ</label>
                    <div class="input-group">
                        <input name="body" type="text"  class="form-control">
                    </div>
                </div>




            </div> <!-- /.card-body -->

            <div class="card-footer d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary py-3 w-75">پاسخ دادن</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    @endforeach
@stop




