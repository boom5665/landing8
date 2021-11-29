@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;" src=" {{ url('/images/banner-bacc.png') }}">

                            <h1 class="AMB-contact-title-gradient">หวยธกส.</h1>
                            <h2 class="AMB-contact-title">หวยธกส. กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                                <li>ใช้ผลการออกรางวัลที่ 1 ของ ผลรางวัลฉลาก ธกส. ในแต่ละเดือน นำมาออกรางวัล</li>
                                <li>ใช้ผลการออกรางวัลที่ 16 ของเเต่ละเดือน</li>
                                <li>3 ตัวบน ใช้เลขท้าย 3 ตัวของรางวัลที่ 1</li>
                                <li>2 ตัวล่าง ใช้ตัวเลขหลักที่ 3 และ 4 มาใช้ในการออกรางวัล</li>
                                <li>ปิดรับเเทงทุกวันที่ 16 ของเดือน เวลา 09.00 น. ประกาศผลประมาณ 09.30 น.</li>
                            </ul>
                            <h2 class="zone-contact-title">ตัวอย่าง</h2>
                            <ul>
                                <li>รางวัลที่ 1 ผลรางวัล ฉลาก ธกส 4273157 สรุปผล 42 [73] [157]</li>
                                <ul>
                                    <li>3 ตัวบนออก 157</li>
                                    <li>2 ตัวล่างออก 73</li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-2 d-block d-md-none"></div>
                    @include('layouts.right-menu')
                </div>
            </div>
        </div>
    </div>
@endsection
