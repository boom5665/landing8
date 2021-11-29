

@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
    <div class="container">
        <div class="row row-mar ">
            <div class="col-12 col-sm-9 col-md-9">
                <div class="h-100 AMB-background AMB-contact AMB-content text-center">
                <h1 class="AMB-contact-title-contract">ติดต่อเรา</h1>
                <p class="text-center">
                หากมีปัญหาเรื่องการเติมเงินไม่เข้า หรือ สอบถามรายละเอียดเกี่ยวกับ การแทงหวย<br>
                ที่เป็นบริการของเราผ่าน call center ติดต่อเราได้ 24 ชม.<br>
                เรามีพนักงานที่มีความชำนาญและผ่านการฝึกอบรมเฉพาะทาง<br>
                จึงสามารถแก้ปัญหาได้อย่างรวดเร็วและตรงจุด มั่นใจได้ในบริการของเรา<br>
                <br>
                Line :
                <a class="href-hover" href="https://line.me/ti/p/~j8day">
                j8day
                </a>
                </p>
                </div>
                </div>
            <div class="mt-2 d-block d-md-none"></div>
            <div class="col-12 col-sm-3 col-md-3 ps-0 padding-x3-m">
                <div class="row">
                    <div class="AMB-sidebar-line col-md-12 col-sm-12 qr-pro">
                        <div class="AMB-background">
                            <div class="AMB-contact-line">
                                <img style=" width: 100%;" src="https://zonelotto.net/img/contact/line-add.png">
                            </div>
                            <div class="AMB-contact-qr">
                                <img style=" width: 100%; padding: 50px;" src=" {{ url('/images/qrregis.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 spacing-m"></div>
                    <div class="col-12 col-sm-12">
                        <div class="AMB-background">
                            <div class="AMB-head-contact">
                                <span class="icon-contact-lotto"></span> หวยออนไลน์ที่เปิดให้บริการ
                            </div>
                            <ul class="AMB-sidebar-contact">
                                <li><a class="AMB-sidebar-link" href="{{ url('thai') }}">หวยรัฐบาลไทย</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('tgs') }}">หวยธกส.</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('aomsin') }}">หวยออมสิน</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('laos') }}">หวยลาว</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('hanoy') }}">หวยฮานอย</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('maley') }}">หวยมาเลย์</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('yeekee') }}">หวยยี่กี</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('pingpong') }}">หวยปิงปอง</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('singgapore') }}">หวยหุ้นสิงคโปร์</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockthai') }}">หวยหุ้นไทย</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stocknikkei') }}">หวยหุ้นนิเคอิ</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockchina') }}">หวยหุ้นจีน</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockhangseng') }}">หวยหุ้นฮั่งเส็ง</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockkorea') }}">หวยหุ้นเกาหลี</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stocktaiwan') }}">หวยหุ้นไต้หวัน</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockindia') }}">หวยหุ้นอินเดีย</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockgerman') }}">หวยหุ้นเยอรมัน</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockeng') }}">หวยหุ้นอังกฤษ</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockdownjones') }}">หวยหุ้นดาวโจนส์</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockrussia') }}">หวยหุ้นรัสเซีย</a></li>
                                <li><a class="AMB-sidebar-link" href="{{ url('stockegypt') }}">หวยหุ้นอียิปต์</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection




