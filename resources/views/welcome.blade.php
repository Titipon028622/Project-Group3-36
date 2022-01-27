<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sonto Bubble Cha Bubble tea shop</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('bad/img/000.jpg') }}" rel="icon">
    <link href="{{ asset('bad/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('bad/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bad/vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('bad/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bad/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('bad/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bad/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bad/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('bad/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly - v3.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="/">Sonto Bubble Cha</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="bad/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
                <li><a class="nav-link scrollto" href="#about">เกี่ยวกับ</a></li>
                <li><a class="nav-link scrollto" href="#menu">เมนู</a></li>
                <li><a class="nav-link scrollto" href="#specials">รากายพิเศษ</a></li>
                <li><a class="nav-link scrollto" href="#knowledge">เกร็ดความรู้</a></li>
                <li><a class="nav-link scrollto" href="#gallery">ผู้จัดทำ</a></li>
                <li class="dropdown"><a href="#"><span>กลับไปหน้าแรก</span> </a></li>
            </ul>
            <ul>
                @if (Route::has('login'))
                    @auth
                       <a href="{{ url('/home') }}" style="color: #cda45e">Profile</a>

                    @else

                       <a href="{{ route('login') }}" style="color: #cda45e">Login</a>

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}" style="color: #cda45e">Register</a>
                        @endif
                    @endauth

                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header><!-- End Header -->

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Sonto <span>Bubble Cha </span></h1>
                    <h2>Delivering great food for more than 5 years!</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">เมนู</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">สั่งอาหาร</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://youtu.be/Rl_s0cLJSfU" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="">
                            <img src="{{ asset('bad/img/14.jpg') }}" alt="" style="height: 550px;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>ประวัติและที่มาของชาไข่มุก</h3>
                        <p>
                            ต้นกำเนิด ชานมไข่มุก มาจากไต้หวัน
                            ชาไข่มุกเริ่มต้นมาตั้งแต่ช่วงปี ค.ศ. 1988 หรือประมาณปี พ.ศ. 2531
                            โดยมีข้อมูลพบว่าในสมัยนั้นมีร้านน้ำชาที่ชื่อ
                            ชาชุนฉุ่ยถัง ในเมืองไถจง ประเทศไต้หวัน น่าจะเป็นร้านแรกที่คิดค้นเมนู ชานมไข่มุก ขึ้นมาในปี
                            1988 ดังกล่าว
                            ส่วนอีกหนึ่งที่มาเล่าว่า ชาไข่มุกน่าจะมีที่มาจากร้านน้ำชา "หานหลิน" ที่เมืองไถหนาน
                            ประเทศไต้หวัน ช่วงปี 1990 โดยร้านนี้มีเจ้าของร้านชื่อ "ถัวซ่งเหอ"
                            เขาใส่เม็ดสาคูสีขาวลงไปในชา ทำให้มันเหมือนไข่มุก เป็นที่มาของคำว่า “ชาไข่มุก”
                            หลังจากนั้นไม่นานร้านหานหลินเปลี่ยนสีสาคูจากสีขาวเป็นสีดำ นำมาใส่ในน้ำชา
                            ทำให้เครื่องดื่มนี้มีหน้าตาเหมือนชานมไข่มุกที่เราคุ้นเคยกันในปัจจุบัน
                        </p>

                        <p>
                        <h3>ประโยชน์ของชาไข่มุก</h3>
                        </p>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> ดื่มแล้วมีสารต้านอนุมูลอิสระสูง </li>
                            <li><i class="bi bi-check-circle"></i> ช่วยให้เราดับร้อน กระหายน้ำได้ </li>
                            <li><i class="bi bi-check-circle"></i> ฟื้นฟูพลังได้อย่างรวดเร็ว </li>
                            <li><i class="bi bi-check-circle"></i> มีรสชาติอร่อยติดปาก </li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p>เมนูของทางร้าน</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li class="filter-active"
                                style="padding-right: 10px; border: 2px solid #cda45e; border-radius: 50px; padding: 8px 15px;">
                                <a href="http://127.0.0.1:8000/"> ทั้งหมด</a></li>
                            @foreach ($category as $categories)
                                <a href="{{ url('/product/category/' . $categories->id_type) }}"
                                    style="padding-right: 10px; border: 2px solid #cda45e; border-radius: 50px; padding: 8px 15px;">{{ $categories->typename }}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($product as $products)
                        <div class="col-lg-6 menu-item">
                            <img src="{{ asset('admin/img/' . $products->image) }}" alt="" class="menu-img">
                            <div class="menu-content">
                                <a>{{ $products->name }}</a> <br>
                                <p>{{ Str::limit($products->description) }}</p></br>
                                <span>{{ number_format($products->price) }} บาท</span>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('bad/img/menu/ชากีวี่.PNG')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>ชากีวี่</a> <br><p>ส่วนผสมของชากีวี่ ชาสด ไซรัปกีวี่ กีวีสด สำหรับตกแต่ง</p></br> <span>25 บาท</span>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('bad/img/menu/ชานมบราวชูก้า.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>ชานมบราวชูก้า</a> <br><p>ส่วนผสมของชานมบราวชูก้า นมข้นหวาน คาลเมล</p></br> <span>32 บาท</span>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('bad/img/menu/บลูฮาวายโซดา.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>บลูฮาวายโซดา</a> <br><p>ส่วนผสมบลูฮาวายโซดา น้ำบลูฮาวาย น้ำเชื่อม โซดา</p></br> <span>32 บาท</span>

            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('bad/img/menu/30.PNG')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>ชาลิ้นจี่</a> <br><p>ส่วนผสมของชาลิ้นจี่ น้ำลิ้นจี่ น้ำเชื่อม ลิ้นจี่สด</p></br> <span>25 บาท</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('bad/img/menu/22.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>ชานม</a> <br><p>ส่วนผสมของชานม ผงชา น้ำตาลทราย นมข้มหวาน</p></br> <span>25 บาท</span>
            </div>

          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('bad/img/menu/25.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>น้ำแดงโซดา</a> <br><p>ส่วนผสมของแดงโซดา น้ําแดงเฮลบลูบอย โซดา</p></br> <span>32 บาท</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('bad/img/menu/27.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>แอปเปิ้ลโซดา</a> <br><p>ส่วนผสมแอปเปิ้ลโซดา ผงแฮปเปิ้ล น้ำเชื่อม โซดา</p></br> <span>32 บาท</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('bad/img/menu/29.PNG')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>ชานมโกโก้</a> <br><p>ส่วนผสมของชานม ผงโกโก้ รสหวาน โกโก้เข้ม</p></br> <span>25 บาท</span>
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('bad/img/menu/26.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a>มะนาวโซดา</a> <br><p>ส่วนผสมของมะนาวโซดา น้ำผมนาว น้ำเชื่อม โซดา</p></br> <span>32 บาท</span>
            </div>
          </div> --}}
                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>รายการพิเศษทางร้าน</h2>
                    <p>รายการพิเศษทางร้านและ ที่อยู่ของร้าน</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">ที่อยู่ของร้าน</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Sonto Bubble Cha แบบขวด</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">คอนเฟลก</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">สาหร่าย</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Sonto Bubble Cha</h3>

                                        <p>80/88 ซอยหมูบ้านเจ้าพระยาซอย 9 ตำบลบางเลน</p>
                                        <p>อำเภอบางใหญ่ นนทบุรี 11140</p>

                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('bad/img/gg.PNG') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Sonto Bubble Cha</h3>
                                        <p>เป็นขวดน้ำที่มีหลากหลายสรชาติมีทั้ง ชานม ชาเขียว ชาไทย ชานมเผือก
                                            นอกจากนั้นยังมีประโยชน์ต่อสุขภาพด้วย</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('bad/img/10.PNG') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Sonto Bubble Cha</h3>
                                        <p>คอนเฟลก เป็นขนมของทางร้านจัดไว้ให้ลูกค้านั้นลองซื้อไปกินกรุบกรอบอร่อยมากๆ</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('bad/img/11.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Sonto Bubble Cha</h3>
                                        <p>เป็นสาหร่อยที่ทางร้านนั้นเอามาให้ทางลูกค้าได้ลองชิมสรชาติดู มีทั้งสรเผ็ด
                                            สรสาหร่อยธรรมดา สรปลาหมึก</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('bad/img/12.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                            quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                            recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                            quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('bad/img/specials-5.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Specials Section -->

        <!-- ======= GGG ======= -->
        <section id="knowledge" class="knowledge">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="">
                            <img src="{{ asset('bad/img/20.jpg') }}" width="450px  " height="550px">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>เกร็ดความรู้</h3>
                        <p>
                            มีอะไรอยู่ในชานมไข่มุก ชานมไข่มุกเป็นเครื่องดื่มประเภทชา
                            ซึ่งจะเป็นชาชนิดใดก็ได้ตามความชอบของผู้บริโภค ไม่ว่าจะเป็นชาไทย
                            ชาเขียว หรือชาผลไม้ที่บางร้านมีให้เลือกหลากหลายชนิด ทำโดยนำชามาผสมกับนมและไซรัป ครีมเทียม
                            น้ำตาล หรือนมข้นหวานตามสูตรของแต่ละร้าน เพื่อเพิ่มความหวานมัน
                            บางคนอาจชอบเครื่องดื่มชนิดนี้แบบใส่น้ำแข็ง แบบปั่น
                            หรือแบบสมูทตี้ผสมเนื้อผลไม้ด้วย และสิ่งที่ขาดไม่ได้เลยก็คือเม็ดไข่มุกที่ใส่ไว้ในแก้วด้านล่าง
                            ซึ่งทำมาจากมันสำปะหลังและมีเนื้อสัมผัสเหนียวนุ่ม
                        </p>
                        <p>
                        <h3>ทำไมชาไข่มุกอาจไม่ดีต่อสุขภาพ</h3>
                        </p>
                        <p>
                            การดื่มชาที่ไม่มีน้ำตาลอาจเป็นประโยชน์ต่อสุขภาพ
                            เพราะชาส่วนใหญ่อุดมไปด้วยสารต้านอนุมูลอิสระในกลุ่มโพลีฟีนอลที่มีคุณสมบัติช่วยยับยั้งกระบวนการอักเสบและความเสียหายของเซลล์ในร่างกายที่อาจทำให้เกิดริ้วรอยเหี่ยวย่นบนผิวหนัง
                            ทั้งยังอาจนำไปสู่โรคร้ายในระยะยาวได้ อย่างโรคต้อกระจก โรคมะเร็ง และโรคหลอดเลือดหัวใจ
                        </p>
                        <h3>กินชานมไข่มุกยังไงให้ดีต่อสุขภาพร่างกายมากที่สุด </h3>
                        <p>
                            ชานมไข่มุกเป็นเครื่องดื่มที่ควรกินนาน ๆ ครั้งเท่านั้น
                            ผู้ที่ห้ามใจไม่ได้จนต้องดื่มชานมไข่มุกอยู่บ่อย ๆ
                            หรือผู้ที่อยากดื่มแต่ก็กังวลว่าอาจไม่ดีต่อสุขภาพ
                            สามารถสั่งชานมไข่มุกแบบใส่น้ำตาลน้อยหรือไม่ใส่น้ำตาลเลยแทนได้
                            รวมทั้งอาจลดน้ำเชื่อมและสารเพิ่มความหวานอื่น ๆ
                            โดยควรเลือกร้านที่ใช้นมสดหรือนมไขมันต่ำแทนครีมเทียม
                            และอาจดื่มชาแบบไม่ใส่ไข่มุกเพื่อลดปริมาณแคลอรี่ด้วย
                            แม้อาจทำให้ชานมไข่มุกไม่เป็นชานมไข่มุกเหมือนเดิมจากที่เคยบริโภคก็ตาม
                            แต่แบบนี้ก็ดีต่อสุขภาพทั้งกายและใจมากกว่าที่เคย
                        </p>


                    </div>
                </div>

            </div>
        </section><!-- GGG -->


        <!-- ======= Book A Table Section ======= -->
        <!--<section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>สั่งอาหาร</h2>
                    <p>สั่งอาหาร</p>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="ชื่อ" class="form-control" id="ชื่อ" placeholder="ชื่อของคุณ"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="ที่อยู่" class="form-control" name="ที่อยู่" id="email"
                                placeholder="ที่อยู่ของคุณ" data-rule="ที่อยู่" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>


                        <div class="form-group mt-3">
                            <textarea class="form-control" name="ข้อความ" rows="5"
                                placeholder="ส่งข้อความเพิ่มเติม"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your booking request was sent. We will call back or send an Email
                                to confirm your reservation. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">สั่งเลย</button></div>
                </form>

            </div>
        </section>-->
        <!-- End Book A Table Section -->



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">

                    <p>ผู้จัดทำ และ อาจารย์ที่ปรึกษา</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('bad/img/gallery/ppp.jpg') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('bad/img/gallery/ppp.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('bad/img/gallery/nnn.jpg') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('bad/img/gallery/nnn.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('bad/img/gallery/nnn..jpg') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('bad/img/gallery/nnn..jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('bad/img/gallery/000.jpg') }}" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('bad/img/gallery/000.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>


        </section><!-- End Gallery Section -->





    </main><!-- End #main -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('bad/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('bad/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bad/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('bad/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('bad/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('bad/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('bad/js/main.js') }}"></script>

</body>
<!-- ======= Footer ======= -->
<footer id="footer">
    {{-- <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Restaurantly</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Information Technology</span></strong>. Pongsawadi Technological College
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

</html>
