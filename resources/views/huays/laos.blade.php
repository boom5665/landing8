@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;" src=" {{ url('/images/banner-laos.png') }}">

                            <h1 class="AMB-contact-title-gradient">หวยลาว</h1>
                            <h2 class="AMB-contact-title">หวยลาว กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                                <li>เปิดรับเเทงล่วงหน้า 1 วัน ตั้งเเต่เวลา 05.00 น. (ตามเวลาประเทศไทย)</li>
                                <li>ปิดรับเเทงรอบสุดท้าย เวลา 20:00 น.</li>
                                <li>ระบบทำการคืนโพยเเละเครดิตให้ในกรณีที่ไม่มีการออกผลหวยลาว ภายใน 1 ชั่วโมง
                                    <br>ถือว่าไม่มีการออกผลรางวัล วิธีการดูผลหวยลาว</li>
                                <li>ใช้ผลการออกหวยลาว จากเพจ Digital Lottery</li>
                                <li>ออกผลรางวัลเป็นเลข 4 หลัก โดยจะนำเลข 3 ตัวหลัง ออกรางวัล 3 ตัวบน เเละ เลข 2 ตัวหน้า
                                    ออกรางวัล 2 ตัวล่าง</li>
                            </ul>
                            <h1 class="AMB-contact-title-gradient">หวยลาวแบบชุด</h1>
                            <h2 class="AMB-contact-title">หวยลาวแบบชุด กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                                <li>หวยชุดลาวจะออกรางวัลเเค่ 4 หมายเลข </li>
                                <li>ปิดรับเเทงรอบสุดท้าย เวลา 20:00 น.</li>
                                <li>เปิดรับเเทงออนไลน์ตลอด 24 ชั่วโมง สามารถเเทงได้ล่วงหน้าตามเวลาหวยลาวปกติ</li>
                                <li>หวยชุดลาวจะออกสลากทุกวันจันทร์และพฤหัสบดี เวลา 20:30 น.(ตามเวลาประเทศไทย)</li>
                                <li>ปิดรับเเทงเวลา 20:00 น. ของทุกวันจันทร์และพฤหัสบดี (ตามเวลาประเทศไทย)</li>
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
