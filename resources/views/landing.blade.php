<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMB- LOTTO</title>
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>




<div class="index">
    <div class="">
            <div class=" index-flex" style="">
        <a>
            <button class="under-line">หน้าแรก</button>
        </a>
        <a>
            <button class="under-line">สมัครสมาชิก</button>
        </a>
        <a>
            <button class="under-line">วิธีเช็ครางวัลหวย</button>
        </a>
        <a>
            <button class="under-line">โปรโมชั่น</button>
        </a>
        <a>
            <button class="under-line">ติดต่อเรา</button>
        </a>
        <a>
            <button class="under-line">เข้าสู่ระบบ</button>
        </a>
    </div>

    <div id="navbar">
        <div class="index-flex-mobile" style="">
            <div class="index-flex-mobile" style="">
                <div class="navbar-bottom w-100">
                    <div class="row row-cols-5 mx-0 justify-content-center">
                        <div class=" px-0">
                            <div class="">

                            <a class=" top-m "  >
                                <img class="" style=" height: 31px;" src=" {{ url('/images/home.png') }}"
                                    alt="Image" />
                                <div class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</div>
                                </a>

                            </div>
                        </div>
                        <div class="px-0">
                            <div class="">

                            <a class=" top-m "  >
                                <img class="" style=" height: 31px;" src=" {{ url('/images/home2.png') }}"
                                    alt="Image" />
                                <div class="text-center mb-0 fill-text fill-text-hover">วิธีเช็คหวย</div>
                                </a>

                            </div>
                        </div>
                        <div class="px-0">
                            <div class="">
                    <a class=" top-m " >
                                <img class="" style=" height: 31px;" src=" {{ url('/images/home3.png') }}"
                                    alt="Image" />
                                <div class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</div>
                                </a>
                            </div>

                        </div>
                        <div class="px-0">
                            <div class="">
                        <a class=" top-m " >
                                <img class="" style=" height: 31px;" src=" {{ url('/images/home4.png') }}"
                                    alt="Image" />
                                <div class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</div>
                                </a>

                            </div>
                        </div>
                        <div class=" px-0 ">
                            <div class="">
                            <a class=" top-m " class="

                                 under-line" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <img class="" style=" height: 31px;" src=" {{ url('/images/home5.png') }}"
                                    alt="Image" />
                                <div class="text-center mb-0 fill-text fill-text-hover">เข้าสู่ระบบ</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style=" display: flex; justify-content: center;">
        <div class="slide-text">
            <div class="box-con-slide col-lg-3">
                ประกาศจากเว็บ :
            </div>
            <div class="ticker">
                <marquee>ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <span class="font-slide">AMB-LOTTO.COM</span>
                    ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                {{-- <div id="ticker"></div> --}}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="top-img">
        <div class="" style=" display: flex; justify-content: center; ">
                    <div class="     fonthead col-xl-10">
            <div class="fonthead-text">
                <div style="display: flex;">
                    เว็บไซต์
                    <div class="font-text"><b>แทงหวยออนไลน์</b></div>
                </div>
                <div class=""><b>อันดับ</b> 1 ของไทย</div>
                    </div>
                    <div class="
                    but-box">
                    <div class="middleover">
                        <a class="imgsize"><img class="img-but-size" src="{{ url('/images/i1.png') }}"
                                alt="Image" /></a>
                        <div class="middle">
                            <a class="imgsize"><img class="img-but-size" src="{{ url('/images/i1-1.png') }}"
                                    alt="Image" /></a>
                        </div>
                    </div>
                    <div class="middleover">
                        <a class="imgsize"><img class="img-but-size" src="{{ url('/images/i2.png') }}"
                                alt="Image" /></a>
                        <div class="middle">
                            <a class="imgsize"><img class="img-but-size" src="{{ url('/images/i2-2.png') }}"
                                    alt="Image" /></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-0 col-xl-2">
                <img class="image-girl" src="{{ url('/images/ban233 1.png') }}" alt="Image" />
            </div>
        </div>
    </div>
    <div class="dis-crow col-12-m">
        <div class="col-12-m col-xl-8 ">
            <div>
                <div class="dis-crow-p">
                    <img class="crow" src="{{ url('/images/crow.png') }}" alt="Image" />
                    <div class="font-crow">เว็บแทงหวยที่มั่นคงที่สุด</div>
                </div>
            </div>
            <div class="gradient-box">
                <div class="dis-crow-m">
                    <img class="crow" src="{{ url('/images/crow.png') }}" alt="Image" />
                    <div class="font-crow">เว็บแทงหวยที่มั่นคงที่สุด</div>
                </div>
                <div class="font-un-crow font-un-crow-pad">
                    AMB Lotto.vip แทงหวยออนไลน์ 24 ชั่วโมง
                </div>
                <div class="box-in">
                    ด้วยประสบการณ์การให้บริการทั้งคาสิโนออนไลน์ และ แทงหวยออนไลน์
                    นานนับ 10 ปี และไม่หยุดพัฒนาเพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียร
                    ที่สุด รองรับทั้งมือถือ และ คอมพิวเตอร์ โดยไม่ต้องดาวน์โหลดใดๆ อีกทั้ง
                    ยังมีระบบฝากถอนรวดเร็ว ทำให้เว็บที่ทีมงานดูแลและพัฒนาเป็นที่นิยมแพร่
                    หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะแทง หวยยี่กี ที่มีให้ลุ้นรวยทั้งวัน รวมทั้ง
                    หวยหุ้นทั้งในและต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมายต้องนึกถึง
                    เราเป็นเว็บแรกแน่นอน
                    โปรโมชั่นพิเศษสำหรับสมาชิกใหม่ และสิทธิพิเศษมาก
                    มาย แจกเครดิตฟรีอย่างต่อเนื่อง
                </div>
            </div>
        </div>

        <div>
            <div class="col-12-m col-lg-4 col-xl-12 " style="display: flex;
                flex-direction: column;
                align-items: center;
               ">
                <div class="font-un-crow" style="margin-top: 23px;">
                    ผลสลากกินแบ่งรัฐบาล
                </div>
                <div class="gradient-box box-size" style="width: 380px;">
                    <div class="box-top">
                        งวดประจำวันที่ 1 สิงหาคม 2564
                    </div>
                    <div>
                        <div class="box-con">
                            รางวัลที่ 1
                        </div>
                        <div class="" style=" display: flex; justify-content: center;">
                            <div class=" cop-font">910261</div>
                            <img class="cop" src="{{ url('/images/cop.png') }}" alt="Image" />
                        </div>
                        <div class="box-cap-number">
                            <div class="" style=" width: 230px;">
                                <div class=" box-con con-a">
                                    เลขท้าย 3 ตัว
                                </div>
                                <div>
                                    <div class="cop-font-two">
                                        <div>
                                            910 261
                                        </div>
                                        <div>
                                            261 910
                                        </div>
                                    </div>
                                    <img class="cop-two" src="{{ url('/images/cop2.png') }}" alt="Image" />
                                </div>
                                <div class="">

                            <div>

                            </div>
                        </div>

                    </div>
                    <div class="">
                            <div class="      ">
                                    <div class=" box-con con-a">
                                        ท้าย 2 ตัว
                                    </div>
                                    <div>
                                        <div class="cop-font-69">69</div>
                                        <img class="box-cop-69" src=" {{ url('/images/cop2.png') }}"
                                            alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" style=" display: flex; ">
        <div class="  ">
        <div>
            <div class="promo">
                <img class="crow" src="{{ url('/images/t2.png') }}" alt="Image" />
                <div class="font-crow">โปรโมชั่นสำหรับสมาชิก</div>
            </div>
        </div>
        <div class="gradient-box gradient-box-under col-12-m">
            <div class="col-6">
                <img class="g2" src="{{ url('/images/g2.png') }}" alt="Image" />
            </div>
            <div class="promo-text col-6">
                <div class="font-un-crow-in font-un">
                    สมาชิกใหม่ฝากเงินครั้ง
                    รับโบนัสสูงสุด 5,000 บาท
                </div>
                <div class="box-in-shadow">
                    <div class="">เติม 1,000 รับเพิ่ม 300</div>
                    <div class="">เติม 5,000 รับเพิ่ม 500</div>
                        <div class="             ">เติม 10,000 รับเพิ่ม 1,000</div>
                    <div class="">เติม 50,000
                            รับเพิ่ม 2,000</div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="
                        dqr">
                        <img class="qr" src="{{ url('/images/qr.png') }}" alt="Image" />
                    </div>
                </div>
            </div>

            <div class=" " style="">
                <div class=" ">
                    <div>
                        <div class="" style=" display: flex; margin-top: 30px;">
                            <img class="crow crow-belian" src="{{ url('/images/bl.png') }}" alt="Image" />
                            <div class="font-crow ">หวยออนไลน์ที่เปิดให้บริการ</div>
                        </div>
                    </div>
                    <div class="dis-non">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div>
                                        <div class=" font-un-crow font-un row">
                                            <div class="col-lg-4  pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/thai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/tks.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/aomsin.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/hanoy.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/maley.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/yekee.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/laos.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/pingpong.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a></a>
                                                <div class="bg-border">
                                                    <img class="bg-img"
                                                        src="{{ url('/images/sing.png') }}" alt="">
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <div class=" font-un-crow font-un row">
                                            <div class="col-lg-4  pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockhangseng.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockkorea.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockgerman.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockeng.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockchina.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockdownjones.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockindia.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockrussia.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockegypt.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <div class=" font-un-crow font-un row">
                                            <div class="col-lg-4  pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stocknikkei.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img"
                                                            src="{{ url('/images/stocktaiwan.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 pe-0">
                                                <a>
                                                    <div class="bg-border">
                                                        <img class="bg-img" style="filter: grayscale(100%);"
                                                            src="{{ url('/images/stockthai.png') }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">

                                <span class=""><img class=" box-cop-69" src=" {{ url('/images/prev.png') }}">
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class=""><img class=" box-cop-69"
                                    src=" {{ url('/images/next.png') }}"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="dis-none-mobile d-row row-cols-3 row-cols-xl-4 pe-0">
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/thai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/tks.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/aomsin.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/hanoy.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/maley.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/yekee.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/laos.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/pingpong.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/sing.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockthai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocknikkei.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockchina.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockhangseng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockkorea.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocktaiwan.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockindia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockgerman.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockeng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockdownjones.png') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockrussia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a>
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockegypt.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="" style=" display: flex; position: relative; margin: 80px 0px 0px 0px;">

                    <div class="" >
                    <img class=" line" src="{{ url('/images/center.png') }}"
                        alt="Image" />
                </div>

            </div>

            <div class=" ">
                <div>
                    <div class="" style=" margin-top: 30px; text-align: center;">
                        <div class="font-crow">เว็บแทงหวยออนไลน์ที่ดีที่สุด</div>

                    </div>
                    <div class="dis-cen">
                        <ul>
                            <li>เราเป็นทีมงานโดยตรงในไทย สามารถตอบคำถามและช่วยเหลือได้ตลอด</li>
                            <li>หมดปัญหาการถูกโกง จ่ายแน่นอนการันตี 100%</li>
                            <li>สมัครสมาชิกกับเราและแนะนำเพื่อนรับทันที จากยอดที่เพื่อนเแทง</li>
                            <li>มีหวยให้ลุ้นทุกวัน แจกรางวัลกิจกรรมประจำ มีทีมงานออนไลน์ตลอด 24 ชั่วโมง</li>
                            <li>สมัครครั้งเดียว รับสิทธิ์ลุ้นของรางวัลมากมายมีโปรโมชั่นตลอด</li>
                            <li>ระบบฝาก – ถอน ปลอดภัย รวดเร็ว ไว้ใจได้ โอนไวด้วยระบบอัตโนมัติ</li>
                            <li>เราเปิดให้เล่นหวยทุกชนิด จับยี่กี หวยรัฐบาล หวยลาว ฮานอย หวยหุ้นไทย</li>
                            <li>หวยหุ้นต่างประเทศ และอื่นๆ</li>
                            <li>เว็บภาษาไทย เข้าใจง่าย และเล่นผ่านมือถือได้ทุกที่ ที่ต้องการ</li>
                            <li>เว็บไซต์มีความปลอดภัย สามารถเข้าเล่นได้โดยไร้กังวล</li>
                        </ul>
                    </div>
                </div>

                <div class="" style=" display: flex; position: relative; margin: 40px 0px 0px 0px;">

                    <div class="" >
                <img class=" line" src="{{ url('/images/center.png') }}"
                        alt="Image" />
                </div>


            </div>

            <div>
                <div class="" style=" margin-top: 30px; text-align: center;">
                    <div class="font-crow">หวยออนไลน์ยอดนิยมในไทย</div>

                </div>
                <div class="dis-cen dis-non">
                    <div class="col-3">
                        <div class=" dis-col">
                            <img data-aos="flip-right" class=" a1" src="{{ url('/images/a1.png') }}"
                                alt="Image" />
                            <img class="line2" src=" {{ url('/images/line2.png') }}" alt="Image" />
                        </div>
                        <div class="font-a">
                            <div class="font-a-con">หวยยี่กี หวยยี่กี</div>
                            หวยจับยี่กีออนไลน์ หรือ อีกชื่อนึงคือหวย ปิงปอง เป็นการเลือกซื้อหวยออนไลน์อีก รูปแบบ
                            ที่กำลังเป็นที่ชื่นชอบและเป็นที่นิยม เป็นอย่างมากในกลุ่มคอหวย หวยปิงปอง (ยี่กี) นี้
                            สามารถแทงได้ทุกๆ 15
                            นาที ใน 1 วัน
                            สามารถซื้อยี่กีนี้ได้ถึง 88 ครั้งเลยทีเดียว
                        </div>

                    </div>
                    <div class="col-3">
                        <div class=" dis-col">
                            <img data-aos="flip-right" class=" a1" src="{{ url('/images/a2.png') }}"
                                alt="Image" />
                            <img class="line2" src=" {{ url('/images/line2.png') }}" alt="Image" />
                        </div>
                        <div class="font-a">
                            <div class="font-a-con">หวยลาว</div>
                            หวยลาวเป็นหนึ่งในหวยต่างประเทศที่คน
                            นิยมเล่นกันมากโดยเฉพาะในรูปแบบหวย
                            ออนไลน์เข้าเล่นง่ายและสามารถแทงผ่าน
                            ออนไลน์ได้บ่อยกว่าหวยรัฐบาลไทย
                        </div>
                    </div>
                    <div class="col-3">
                        <div class=" dis-col">
                            <img data-aos="flip-right" class=" a1" src="{{ url('/images/a3.png') }}"
                                alt="Image" />
                            <img class="line2" src=" {{ url('/images/line2.png') }}" alt="Image" />
                        </div>
                        <div class="font-a">
                            <div class="font-a-con">หวยรัฐบาล</div>
                            เป็นหวยที่นิยมมากที่สุด หวยรัฐบาลในหนึ่ง เดือนสามารถแทงได้สองรอบ คือ งวด วัน ที่ 1
                            และงวด วันที่
                            16
                            ของทุกเดือนตามวัน ที่ออกผลการออกสลากกินแบ่งรัฐบาล
                        </div>
                    </div>
                    <div class="col-3">
                        <div class=" dis-col">
                            <img data-aos="flip-right" class=" a1" src="{{ url('/images/a4.png') }}"
                                alt="Image" />
                            <img class="line2" src=" {{ url('/images/line2.png') }}" alt="Image" />
                        </div>
                        <div class="font-a">
                            <div class="font-a-con">หวยหุ้น </div>
                            หวยหุ้นคือเล่นทายผลตัวเลขที่อิงผลการ
                            ออกรางวัลจากตลาดหลักทรัพย์ทั้งหุ้นไทย และหุ้นต่างประเทศที่สามารถเล่นได้ทุกที่
                            เป็นหวยที่กำลังนิยมกันมากในปัจจุบัน ง่าย สะดวก ปลอดภัย
                        </div>
                    </div>
                </div>



                <div class="dis-cen-m">
                    <div class="">
                        <div class=" dis-col-m">
                        <img data-aos="flip-right" class=" a1-m" src="{{ url('/images/a1-m.png') }}"
                            alt="Image" />
                        <div data-aos="flip-left" class="font-a-m">
                            <img class="bac-m" src="{{ url('/images/bac-m.png') }}" alt="Image" />
                            <div class="font-a-con-m">หวยยี่กี หวยยี่กี</div>
                            หวยจับยี่กีออนไลน์ หรือ อีกชื่อนึงคือหวย ปิงปอง เป็นการเลือกซื้อหวยออนไลน์อีก รูปแบบ
                            ที่กำลังเป็นที่ชื่นชอบและเป็นที่นิยม เป็นอย่างมากในกลุ่มคอหวย หวยปิงปอง (ยี่กี) นี้
                            สามารถแทงได้ทุกๆ 15
                            นาที ใน 1 วัน
                            สามารถซื้อยี่กีนี้ได้ถึง 88 ครั้งเลยทีเดียว
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class=" dis-col-m">
                    <img data-aos="flip-right" class=" a1-m" src="{{ url('/images/a2-m.png') }}"
                        alt="Image" />
                    <div data-aos="flip-left" class="font-a-m">
                        <img class="bac-m" src="{{ url('/images/bac-m.png') }}" alt="Image" />
                        <div class="font-a-con-m">หวยลาว</div>
                        หวยลาวเป็นหนึ่งในหวยต่างประเทศที่คน
                        นิยมเล่นกันมากโดยเฉพาะในรูปแบบหวย
                        ออนไลน์เข้าเล่นง่ายและสามารถแทงผ่าน
                        ออนไลน์ได้บ่อยกว่าหวยรัฐบาลไทย
                    </div>
                </div>
            </div>
            <div class="">
                <div class=" dis-col-m">
                <img data-aos="flip-right" class=" a1-m" src="{{ url('/images/a3-m.png') }}" alt="Image" />
                <div data-aos="flip-left" class="font-a-m">
                    <img class="bac-m" src="{{ url('/images/bac-m.png') }}" alt="Image" />
                    <div class="font-a-con-m">หวยรัฐบาล</div>
                    เป็นหวยที่นิยมมากที่สุด หวยรัฐบาลในหนึ่ง เดือนสามารถแทงได้สองรอบ คือ งวด วัน ที่ 1 และงวด
                    วันที่ 16
                    ของทุกเดือนตามวัน ที่ออกผลการออกสลากกินแบ่งรัฐบาล
                </div>
            </div>
        </div>
        <div class="">
                <div class=" dis-col-m">
            <img data-aos="flip-right" class=" a1-m" src="{{ url('/images/a4-m.png') }}" alt="Image" />
            <div data-aos="flip-left" class="font-a-m">
                <img class="bac-m" src="{{ url('/images/bac-m.png') }}" alt="Image" />
                <div class="font-a-con-m">หวยหุ้น </div>
                หวยหุ้นคือเล่นทายผลตัวเลขที่อิงผลการ
                ออกรางวัลจากตลาดหลักทรัพย์ทั้งหุ้นไทย และหุ้นต่างประเทศที่สามารถเล่นได้ทุกที่
                เป็นหวยที่กำลังนิยมกันมากในปัจจุบัน ง่าย สะดวก ปลอดภัย
            </div>
        </div>
    </div>
</div>


</div>
<div class="row row-cols-2 x-gap-m" style="padding: 80px 1px 0px 0px; justify-content: center; ">

    <div class="col-6 col-xxl-4 gradient-contact">
        <div class="box-tex2">
            <div class="box-tex-con">ฝาก - ถอน 24 ชม. </div>
            <div class="box-tex-in">
                ผ่านธนาคารชั้นนำของไทย โอนไว จ่ายเต็ม มั่นใจ 100%

            </div>
            <div class="" >
                    <img class=" tana" src="{{ url('/images/tana1.png') }}"
                alt="Image" />
            <img class="tana" src="{{ url('/images/tana2.png') }}" alt="Image" />
            <img class="tana" src="{{ url('/images/tana3.png') }}" alt="Image" />
            <img class="tana" src="{{ url('/images/tana4.png') }}" alt="Image" />
            <img class="tana" src="{{ url('/images/tana5.png') }}" alt="Image" />
        </div>
    </div>
</div>
<div class="col-6 col-xxl-4 gradient-contact">
    <div class="box-tex">
        <div class="box-tex-con">ติดต่อเรา</div>
        <div class="box-tex-in">
            สอบถามหรือแจ้งปัญหากับทางเว็บไซต์ได้ตลอด 24 ชม.
        </div>
    </div>
</div>
</div>



</div>

</div>
</div>
</div>

<footer>
    <div class="" >
            สมัครสมาชิก   |   เข้าแทงหวย  |  ตรวจเช็ครางวัลหวย  |  โปรโมชั่น  |  ติดต่อเรา
            <div class="" >Copyright © 2020 AMB-lotto.com All right reserved.
            </div>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            (function($) {
                $.fn.textWidth = function() {
                    var calc = document.createElement('span');
                    $(calc).text($(this).text());
                    $(calc).css({
                        position: 'absolute',
                        visibility: 'hidden',
                        height: 'auto',
                        width: 'auto',
                        'white-space': 'nowrap'
                    });
                    $('body').append(calc);
                    var width = $(calc).width();
                    $(calc).remove();
                    return width;
                };

                $.fn.marquee = function(args) {
                    var that = $(this);
                    var textWidth = that.textWidth(),
                        offset = that.width(),
                        width = offset,
                        css = {
                            'text-indent': that.css('text-indent'),
                            'overflow': that.css('overflow'),
                            'white-space': that.css('white-space')
                        },
                        marqueeCss = {
                            'text-indent': width,
                            'overflow': 'hidden',
                            'white-space': 'nowrap'
                        },
                        args = $.extend(true, {
                            count: -1,
                            speed: 1e1,
                            leftToRight: false
                        }, args),
                        i = 0,
                        stop = textWidth * -1,
                        dfd = $.Deferred();

                    function go() {
                        if (that.css('overflow') != "hidden") {
                            that.css('text-indent', width + 'px');
                            return false;
                        }
                        if (!that.length) return dfd.reject();

                        if (width <= stop) {
                            i++;
                            if (i == args.count) {
                                that.css(css);
                                return dfd.resolve();
                            }
                            if (args.leftToRight) {
                                width = textWidth * -1;
                            } else {
                                width = offset;
                            }
                        }
                        that.css('text-indent', width + 'px');
                        if (args.leftToRight) {
                            width++;
                        } else {
                            width--;
                        }
                        setTimeout(go, args.speed);
                    };

                    if (args.leftToRight) {
                        width = textWidth * -1;
                        width++;
                        stop = offset;
                    } else {
                        width--;
                    }
                    that.css(marqueeCss);
                    go();
                    return dfd.promise();
                };
                // $('h1').marquee();
                $("#ticker").marquee();
                $("#ticker").mouseover(function() {
                    $(this).removeAttr("style");
                }).mouseout(function() {
                    $(this).marquee();
                });
            })(jQuery);

            AOS.init({
                duration: 1200,
            });
            $('a').click(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'สำหรับเข้าชมเท่านั้น',
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
                // .then(function() {
                //     setTimeout(function() {
                //         window.location.href = "http://127.0.0.1:8000/landing2"
                //     }, 1000);
                // });
            });
        </script>
</footer>
