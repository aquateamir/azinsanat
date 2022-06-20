@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>جزئیات وبلاگ</h2>
                        <ul>
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li>جزئیات وبلاگ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{asset($blog->image)}}" alt="image">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <span>نوشته شده در:</span>
                                        <a href="#">{{Verta::instance($blog->created_at)->formatDifference()}}</a>
                                    </li>
                                    <li>
                                        <span>ارسال شده توسط:</span>
                                        <a href="#">سورین آز</a>
                                    </li>
                                </ul>
                            </div>

                            <h3>
                                {{$blog->title}}
                            </h3>
                            <div>
                                {!! $blog->fulltext !!}
                            </div>
                        </div>


                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">

                                </div>
                                <div class="nav-next">

                                </div>

                            </div>
                            </div>
                        <div class="comments-area">
                            <h3 class="comments-title">نظرات:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    @foreach($blog->comments as $result)

                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <b class="fn">{{$result->fullname}}</b>
                                                <span class="says">می گوید:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="index.html">
                                                    <time>{{Verta::instance($blog->created_at)->formatDifference()}}</time>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>
                                                {!! $result->text !!}
                                            </p>
                                        </div>

                                    </article>
                                    @endforeach
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">نظر خود را وارد کنید: </h3>
                                <form action="{{route('comment.store')}}" method="POST" class="comment-form">
                                    @csrf
                                    <input type="hidden" value="{{$blog->id}}" name="blog_id">
                                    <p class="comment-notes">
                                        <span id="email-notes">آدرس ایمیل شما منتشر نخواهد شد.</span> قسمتهای مورد نیاز علامت گذاری شده اند
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>نظر<span class="required">*</span></label>
                                        <textarea name="text" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>نام <span class="required">*</span></label>
                                        <input type="text" id="author" name="fullname" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>ایمیل <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>


                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="ارسال">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_contact">
                            <div class="text">
                                <span>اضطراری</span>
                                <a href="tel:021-12345678">021-12345678</a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->



@stop
