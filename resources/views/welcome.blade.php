@extends('layouts.index')
@section('title')
    {!! SEO::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
@stop
@section('container')
    <!-- Start Main Slider Area -->
    <div class="home-slides owl-carousel owl-theme">
        <div class="main-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-slider-content">
                            <h1>شرکت قطعات بتنی عمرانی آذین صنعت</h1>
                            <p>شرکت قطعات بتنی عمرانی آذین صنعت، به منظور تولید محصولات بتنی و بلوک های سبک در سال 98 که مسئولین کشور برای حمایت از تولید اهتمام ویژه داشتند شروع به کار کرد.کارخانه آذین صنعت مجهز به بهترین دستگاه های تمام اتوماتیک، اتاق بخار
                                و دستگاه .های بسته بندی می باشد</p>
                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    درخواست همکاری
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-shape">
                <img src="{{asset('assets/img/slides/ساختمان2.jpg')}}" alt="image">
            </div>
        </div>

        <div class="main-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-slider-content">
                            <h1>شرکت قطعات بتنی عمرانی آذین صنعت</h1>
                            <p>شرکت قطعات بتنی عمرانی آذین صنعت، به منظور تولید محصولات بتنی و بلوک های سبک در سال 98 که مسئولین کشور برای حمایت از تولید اهتمام ویژه داشتند شروع به کار کرد.کارخانه آذین صنعت مجهز به بهترین دستگاه های تمام اتوماتیک، اتاق بخار
                                و دستگاه .های بسته بندی می باشد</p>
                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    درخواست همکاری
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-shape">
                <img src="assets/img/slides/ساختمان2.jpg" alt="image">
            </div>
        </div>

        <div class="main-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-slider-content">
                            <h1>شرکت قطعات بتنی عمرانی آذین صنعت</h1>
                            <p>شرکت قطعات بتنی عمرانی آذین صنعت، به منظور تولید محصولات بتنی و بلوک های سبک در سال 98 که مسئولین کشور برای حمایت از تولید اهتمام ویژه داشتند شروع به کار کرد.کارخانه آذین صنعت مجهز به بهترین دستگاه های تمام اتوماتیک، اتاق بخار
                                و دستگاه .های بسته بندی می باشد</p>
                            <div class="slider-btn">
                                <a href="#" class="default-btn">
                                    درخواست همکاری
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-shape">
                <img src="assets/img/slides/ساختمان2.jpg" alt="image">
            </div>
        </div>
    </div>
    <!-- End Main Slider Area -->

    <!-- Start Top Services Area -->
    <section class="top-services-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="top-services-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">تولید بلوک سبک معدن و صنعتی </a>
                        </h3>
                        <p>شرکت آذین صنعت توانایی تولید بلوک های معدنی و صنعتی در تعداد بالا را دارد.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="top-services-item top1">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">
                                تولید و بسته بندی با دستگاه های تمام اتوماتیک
                            </a>
                        </h3>
                        <p>آذین صنعت توانسته با تکیه بر توانایی ها و نیروی انسانی مجرب؛ بسته بندی های خود را با دستگاه های تمام اتوماتیک انجام دهد.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="top-services-item">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">
                                مجهز به اتاق بخار جهت عمل آوری
                            </a>
                        </h3>
                        <p>دارای ترکیب و فرمول رنگ انحصاری با زیر سازی مخصوص.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="top-services-item top2">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">
                                ارسال به صورت سلفونی
                            </a>
                        </h3>
                        <p>ارسال به صورت سلفونی و تسمه کشی روی پالت</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Services Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="assets/img/ساختمان.jpg" alt="image">
                        <img src="assets/img/ساختمان3.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <span>درباره ما</span>
                        <h3>شرکت قطعات بتنی آذین صنعت</h3>
                        <p>شرکت قطعات بتنی عمرانی آذین صنعت، به منظور تولید محصولات بتنی و بلوک های سبک در سال 98 که مسئولین کشور برای حمایت از تولید اهتمام ویژه داشتند شروع به کار کرد.کارخانه آذین صنعت مجهز به بهترین دستگاه های تمام اتوماتیک، اتاق بخار
                            و دستگاه .های بسته بندی می باشد. این شرکت در قدم اول برنامه توسعه خود توانسته پس از اخذ استاندارد ملی با بهره گیری از علم روز و دانش فنی و استفاده از سبک دانه پرلیتبرای اولین بار در استان اردبیل، محصول جدید به صنعت ساختمان
                            کشور معرفی نماید و در ادامه موفق به دریافت گواهی نامه فنی از مرکز تحقیقات راه، مسکن و شهرسازی طبق مباحث مقررات ملی ساختمان گردیده است.
                        </p>
                        <p class="p-text"></p>

                        <ul class="about-list">
                            <li>
                                <i class="las la-check-circle"></i> متخصصان با تجربه
                            </li>
                            <li>
                                <i class="las la-check-circle"></i> تولید بلوک سبک معدنی و صنعتی
                            </li>
                            <li>
                                <i class="las la-check-circle"></i> تجهیزات پیشرفته
                            </li>
                            <li>
                                <i class="las la-check-circle"></i> بسته های مقرون به صرفه
                            </li>
                        </ul>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                اطلاعات بیشتر
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="assets/img/ساختمان3.jpg" alt="image">
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>خدمات</span>
                <h2>خدمات شرکت قطعات بتنی آذین صنعت</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">پوکه صنعتی : CS2A</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 2/5 mpa
                        </p>
                        <p>
                            جرم حجمی : 500 - 700 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 8 - 11 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 100 - 140 kg
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">پوکه معدنی : CS2B</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 2/5 mpa
                        </p>
                        <p>
                            جرم حجمی : 500 - 700 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 8 - 11 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 100 - 140 kg
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">پوکه معدنی و ماسه ای : CS4</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 5 mpa
                        </p>
                        <p>
                            جرم حجمی : 1000 - 700 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 16 - 11 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 200 - 140 kg
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#"> پوکه صنعتی: CS2A</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 2/5 mpa
                        </p>
                        <p>
                            جرم حجمی : 700 - 500 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 11 - 8 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 105 - 75 kg
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">پوکه معدنی و ماسه ای : CS6</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 6/5 mpa
                        </p>
                        <p>
                            جرم حجمی : 1400 - 1000 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 21 - 15 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 210 - 150 kg
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon">
                            <i class="flaticon-right-quotes-symbol"></i>
                        </div>
                        <h3>
                            <a href="#">پوکه معدنی و ماسه ای : CS4</a>
                        </h3>
                        <p>
                            مقاومت فشاری : 5 mpa
                        </p>
                        <p>
                            جرم حجمی : 1000 - 700 kg/m3
                        </p>
                        <p>
                            وزن بلوک : 16 - 11 kg
                        </p>
                        <p>
                            وزن هر متر مربعدیوار بدون ملات : 200 - 140 kg
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-shape">
            <div class="shape1">
                <img src="assets/img/ساختمان4.jpg" alt="image">
            </div>

        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Projects Area -->
    <section class="projects-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>پروژه های ما</span>
                <h2>آخرین پروژه های ما</h2>
            </div>

            <div class="projects-slider owl-carousel owl-theme">
                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان1.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان3.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان4.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان3.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان3.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>

                <div class="projects-item">
                    <div class="image">
                        <a href="#">
                            <img src="assets/img/ساختمان.jpg" alt="image">
                        </a>

                        <div class="icon">
                            <a href="#">
                                <i class="las la-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">تولید بلوک سبک معدنی</a>
                        </h3>
                        <span>بلوک های مقاوم</span>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Projects Area -->

    <!-- Start Why Choose Area -->
    <section class="why-choose-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <span>چرا ما باید آذین صنعت را انتخاب کنید؟</span>
                        <h3>محصولات آذین صنعت تحولی شگفت در قطعات بتنی کشور</h3>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>نوآوری در تولید</h4>
                            <p>آذین صنعت، تولیدکننده نسل جدید بلوک های سبک با دستگاه های تمام اتومات و مجهز به اتاق های بخار.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>فناوری پیشرفته</h4>
                            <p>آذین صنعت با بهره گیری از دستگاه های به روز و با کیفیت سعی داشته تا استانداردترین محصولات و قطعات بتنی را به شما عرضه کند.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>اصول تولید جداول بتنی</h4>
                            <p>امروزه جداول بتنی به عنوان یکی از کاربردی ترین قطعات بتنی در شهر ها مطرح می شود و وظیفه محدود کننده فضا ها، زیباسازی شهر ها و هدایت آبهای سطحی معابر را بر عهده دارد که آذین صنعت با تولید حرفه ای و استاندارد جداول بتنی، قدرت
                                خود را در عرضه این نوع محصولات نشان داده است.</p>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <img src="assets/img/ساختمان4.jpg" alt="image" style="border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Area -->



    <!-- Start Appointment Area -->
    <section class="appointment-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class=" row align-items-center">
                    <div class="appointment-content">
                        <h3>خدمات شرکت آذین صنعت
                        </h3>
                    </div>

                    <div class="skill-bar" data-percentage="78%">
                        <p class="progress-title-holder">
                            <span class="progress-title">نمونه کار های حرفه ای</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="58%">
                        <p class="progress-title-holder">
                            <span class="progress-title">تولید پوکه صنعتی پومیس</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="88%">
                        <p class="progress-title-holder">
                            <span class="progress-title">تولید و عرضه پوکه صنعتی پرلیت</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Appointment Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pt-100 pb-100">
        <div class="container">
            <div class="fun-facts-inner">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="250">00</span>
                            </h3>
                            <p>تعداد مشتریان</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="55">00</span>
                            </h3>
                            <p>تجهیزات</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="425">00</span>
                            </h3>
                            <p>پرونده کامل</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="125">00</span>
                            </h3>
                            <p>تجربه</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Testimonial Area -->
    <section class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>بازخورد مشتریان</span>
                <h2>مشتریان ما چه می گویند</h2>
            </div>

            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                    <div class="info">
                        <img src="assets/img/client/client1.jpg" alt="image">
                        <h3>محمدرضا</h3>
                        <span>طراح وب</span>
                    </div>
                    <div class="text">
                        <p>خرید از مجموعه آذین صنعت تجربه بسیار جذابی بود</p>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="info">
                        <img src="assets/img/client/client2.jpg" alt="image">
                        <h3>سعید</h3>
                        <span>طراح وب</span>
                    </div>
                    <div class="text">
                        <p>خرید از مجموعه آذین صنعت تجربه بسیار جذابی بود </p>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="info">
                        <img src="assets/img/client/client3.jpg" alt="image">
                        <h3>علیرضا</h3>
                        <span>طراح وب</span>
                    </div>
                    <div class="text">
                        <p>خرید از مجموعه آذین صنعت تجربه بسیار جذابی بود</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>وبلاگ</span>
                <h2>اخبار وبلاگ ما</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item bg-ffffff">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="assets/img/ساختمان.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>اردیبهشت ماه 1401</span>
                            </div>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    بلوک پرلیتی دارای گواهینامه 18 و 19 مقررات ملی ساختمان

                                </a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-item bg-ffffff">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="assets/img/ساختمان3.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>اردیبهشت ماه 1401</span>
                            </div>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    بلوک پرلیتی دارای گواهینامه 18 و 19 مقررات ملی ساختمان
                                </a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="blog-item bg-ffffff">
                        <div class="image">
                            <a href="blog-details.html">
                                <img src="assets/img/ساختمان4.jpg" alt="image">
                            </a>
                            <div class="date">
                                <span>اردیبهشت ماه 1401</span>
                            </div>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="blog-details.html">
                                    بلوک پرلیتی دارای گواهینامه 18 و 19 مقررات ملی ساختمان
                                </a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">بیشتر بخوانید +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Partner Area -->

    <div class="partner-area ptb-100">
        <div class="section-title">
            <h2>برخی از شرکت های همکار ما</h2>
        </div>
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/1c3bde3d-e428-49f2-9e0b-d3859fad6cd6-removebg-preview.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/logoooo-removebg-preview.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/1c3bde3d-e428-49f2-9e0b-d3859fad6cd6-removebg-preview.png" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="assets/img/logoooo-removebg-preview.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Projects Area -->
    <section class="projects-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>پروژه های ما</span>
                <h2>آخرین پروژه های ما</h2>
            </div>

            <div class="projects-slider owl-carousel owl-theme">
                @foreach($projects as $result)
                    <div class="col-lg-12 col-md-6">
                        <div class="projects-item two">
                            <div class="image">
                                <a href="#">
                                    <img src="{{asset($result->image)}}" alt="{{$result->image_alt}}">
                                </a>

                                <div class="icon">
                                    <a href="{{route('project.detail',$result)}}">
                                        <i class="las la-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="#">{{$result->title}}</a>
                                </h3>
                                @foreach($result->categories as $cat)
                                    <span>{{$cat->name}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- End Projects Area -->

    <!-- Start Why Choose Area -->
    <section class="why-choose-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <span>چرا ما را انتخاب می کنید</span>
                        <h3>بیش از 20 سال تجربه در زمینه تحقیقات پزشکی و درمانی</h3>
                        <strong>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</strong>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>نمونه برداری رایگان در منزل</h4>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>فناوری پیشرفته</h4>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>پشتیبانی 24/7 از بیمار</h4>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>

                        <div class="why-choose-text">
                            <div class="icon">
                                <i class="las la-check"></i>
                            </div>
                            <h4>500 + آزمون رایگان</h4>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <img src="{{asset('sorenaz/assets/img/why-choose.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Area -->



    <!-- Start Appointment Area -->
    <section class="appointment-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class=" row align-items-center">
                    <div class="appointment-content">
                        <h3>خدمات شرکت مهندسی سورین آز
                        </h3>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                    </div>

                    <div class="skill-bar" data-percentage="78%">
                        <p class="progress-title-holder">
                            <span class="progress-title">نمونه حرفه ای</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="58%">
                        <p class="progress-title-holder">
                            <span class="progress-title">آزمایش دیابت</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="88%">
                        <p class="progress-title-holder">
                            <span class="progress-title">آزمایش پیشرفته</span>
                            <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                            <span class="down-arrow"></span>
                            </span>
                            </span>
                        </p>
                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Appointment Area -->

    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area pt-100 pb-100">
        <div class="container">
            <div class="fun-facts-inner">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="25">00</span>
                            </h3>
                            <p>برنده جایزه</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="55">00</span>
                            </h3>
                            <p>تجهیزات</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="425">00</span>
                            </h3>
                            <p>پرونده کامل</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="125">00</span>
                            </h3>
                            <p>تجربه</p>
                        </div>
                    </div>
                </div>

                <div class="fun-facts-shape">
                    <div class="shape1">
                        <img src="{{asset('sorenaz/assets/img/fun-facts-shape/shape1.png')}}" alt="image">
                    </div>
                    <div class="shape2">
                        <img src="{{asset('sorenaz/assets/img/fun-facts-shape/shape2.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->



    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>وبلاگ</span>
                <h2>اخبار وبلاگ ما</h2>
            </div>

            <div class="row">
                @foreach($blog as $result)

                    <div class="col-lg-4 col-md-8">
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
    </section>
    <!-- End Blog Area -->

    <!-- Start Partner Area -->

    <div class="partner-area ptb-100">
        <div class="section-title">
            <h2>برخی از شرکت های همکار ما</h2>
        </div>
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <a href="#">
                        <img src="{{asset('sorenaz/assets/img/1c3bde3d-e428-49f2-9e0b-d3859fad6cd6-removebg-preview.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{asset('sorenaz/assets/img/logoooo-removebg-preview.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{asset('sorenaz/assets/img/1c3bde3d-e428-49f2-9e0b-d3859fad6cd6-removebg-preview.png')}}" alt="image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{asset('sorenaz/assets/img/logoooo-removebg-preview.png')}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->
@stop
