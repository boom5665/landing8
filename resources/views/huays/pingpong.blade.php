@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;"  src=" {{ url('/images/banner-pingpong.png') }}">
                            <h1 class="AMB-contact-title-gradient">หวยปิงปอง</h1>
                            <h2 class="AMB-contact-title">หวยปิงปอง กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                            <li>เปิดรับเเทงออนไลน์วันละ 16 รอบ ออกผลรางวัลทุกๆ 1 ชั่วโมง</li>
                            <li>รอบเเรกเริ่มเวลา 09:00 น. (เริ่มทายผลใหม่ได้ตั้งเเต่ 08:00 น.)</li>
                            <li>ปิดรับเเทงรอบสุดท้าย เวลา 24:00 น.</li>
                            </ul>
                            <p>
                            ** โปรดตั้งเวลาของอุปกรณ์เข้าเล่นของท่านให้ตรงกับเวลาในเว็บ เพื่อที่ท่านจะได้ไม่สับสนกับเวลาปิดรับเวลาที่เเสดงผลการส่งตัวเลขจะใช้เวลาจากเซิฟเวอร์จริง **
                            </p>
                            </div>
                    </div>
                    <div class="mt-2 d-block d-md-none"></div>
                    @include('layouts.right-menu')
                </div>
            </div>
        </div>
    </div>
@endsection
