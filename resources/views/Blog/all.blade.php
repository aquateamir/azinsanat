@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')


    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>وبلاگ</h2>
                        <ul>
                            <li><a href="">صفحه اصلی</a></li>
                            <li>وبلاگ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span>وبلاگ</span>
                <h2>اخبار وبلاگ ما</h2>
            </div>

            <div class="row">
                @foreach($blog as $result)

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item bg-ffffff">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{asset($result->image)}}" alt="{{$result->image_alt}}">
                            </a>
                            <div class="date">
                                <span>{{Verta::instance($result->created_at)->formatDifference()}}</span>
                            </div>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{route('blog.detail', $result)}}">
                                    {{$result->title}}
                                </a>
                            </h3>
                            <a href="{{route('blog.detail', $result)}}" class="blog-btn">بیشتر بخوانید +</a>
                        </div>
                    </div>
                </div>
                @endforeach


</div>
</div>







                <div class="col-lg-12 col-md-12 d-flex justify-content-center align-items-center">
                    <div class="pagination-area">
                      {{$blog->links()}}
                    </div>
                </div>
    </section>
    <!-- End Blog Area -->
@stop
