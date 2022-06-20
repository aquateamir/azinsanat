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
                        <h2>دسته بندی</h2>
                        <ul>
                            <li><a href="/">صفحه اصلی</a></li>
                            <li>دسته بندی</li>
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
                <span>دسته بندی</span>
                @foreach($category as $result)

                                <h2>{{$result->name}}</h2>
                @endforeach
            </div>


            <div class="row">
                @foreach($category as $result)
                    @foreach($result->Projects->reverse() as $b)

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item bg-ffffff">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="{{asset($b->image)}}" alt="{{$b->image_alt}}">
                            </a>
                            <div class="date">
                                <span>{{Verta::instance($b->created_at)->formatDifference()}}</span>
                            </div>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="{{route('project.detail', $b)}}">
                                    {{$b->title}}
                                </a>
                            </h3>
                            <a href="{{route('project.detail', $b)}}" class="blog-btn">بیشتر بخوانید +</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach


</div>
</div>







    </section>
    <!-- End Blog Area -->
@stop
