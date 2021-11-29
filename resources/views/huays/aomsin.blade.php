@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;" src=" {{ url('/images/banner-gsb.png') }}">

                            <h1 class="AMB-contact-title-gradient">หวยออมสิน</h1>
                            <h2 class="AMB-contact-title">หวยออมสิน กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                                <li>หวยออมสิน จะออกทุกวันที่ 1 และ 16 ของเดือน</li>
                                <li>เเทงหวยออมสินได้ 2 เเบบ คือ 3 ตัวบน เเละ 2 ตัวล่าง เเละ วิ่งบน, วิ่งล่าง</li>
                                <li>ใช้ผลอ้างอิงจากเลขท้าย 6 ตัวสลากออมสิน โดยออกรางวัล 2 ครั้ง</li>
                                <li>3 ตัวบน ใช้เลขท้าย 3 ตัวของผลรางวัลเลขท้าย 6 ตัวสลากออมสิน ออกครั้งที่ 1</li>
                                <li>2 ตัวล่าง ใช้เลขท้าย 2 ตัวของผลรางวัลเลขท้าย 6 ตัวสลากออมสิน ออกครั้งที่ 2</li>
                                <li>ปิดรับแทงหวยทุกวันที่ 1 และ 16 ของเดือน เวลา 12.30 น. ประกาศผล ประมาณ 14.00 น.</li>
                                </ul>
                            <h2 class="zone-contact-title">ตัวอย่าง</h2>
                            <ul>
                                <li>เลขท้าย 6 ตัว ออก 2 ครั้ง ออก 200[834] 4381[35] <br>สรุปผล</li>
                                <ul>
                                <li>3 ตัวบนออก 834</li>
                                <li>2 ตัวล่างออก 35</li>
                                </ul>
                                <li>ใช้ผลสลากออมสินพิเศษ 5 ปี สำหรับ ทุกวันที่ 1</li>
                                <li>ใช้ผลสลากออมสินพิเศษ 3 ปี สำหรับ ทุกวันที่ 16</li>
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
