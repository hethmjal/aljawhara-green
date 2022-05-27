@extends('front.layout.partials')
@section('content')
   

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url({{asset('front/img/bg-img/1.jpg')}});"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>التميز في تقديم خدمات و استشارات زراعية متكاملة ذات خدمة عالية و بأسعار منافسة باستخدام أفضل الكفاءات و التقنيات لتلبية احتياجات العملاء
                                </h2>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url({{asset('front/img/bg-img/2.jpg')}});"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>التميز في تقديم خدمات و استشارات زراعية متكاملة ذات خدمة عالية و بأسعار منافسة باستخدام أفضل الكفاءات و التقنيات لتلبية احتياجات العملاء </h2>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->





    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>تواصل معنا </h2>
                        <p> اخبرنا بطلبك وسنقوم بالرد عليك باقرب وقت</p>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="contact-name" placeholder="الاسم">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="البريد الالكتروني ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" id="contact-subject" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="نص الرسالة"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success alazea-btn mt-15">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.906922909583!2d46.29298948500527!3d24.454014384247287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc1e0b0afaf31c030!2zMjTCsDI3JzE0LjUiTiA0NsKwMTcnMjYuOSJF!5e0!3m2!1sar!2s!4v1651234370018!5m2!1sar!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="m-auto">
                    <a class="col-12 col-sm-6 col-lg-4" href="#"><i class="fa fa-whatsapp m-1" aria-hidden="true"></i>9660501914149</a>

                    <a class="col-12 col-sm-6 col-lg-4" href="#"><i class="fa fa-whatsapp  m-1" aria-hidden="true"></i>9660554000050</a>
                    <a class="col-12 col-sm-6 col-lg-4" href="#"><i class="fa fa-whatsapp  m-1" aria-hidden="true"></i>9660502050204</a>
                </div>

            </div>
        </div>

    </section>

    <!-- ##### Contact Area End ##### -->
@endsection