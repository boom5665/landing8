@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;" src=" {{ url('/images/banner-malay.png') }}">
                            <h1 class="AMB-contact-title-gradient">หวยมาเลย์</h1>
                            <h2 class="AMB-contact-title">หวยมาเลย์ กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                            <li>เปิดรับเเทงออนไลน์ทุกวัน พุธ, เสาร์, อาทิตย์</li>
                            <li>เปิดรับเเทงตั้งเเต่ 05.00 น. (ตามเวลาประเทศไทย)</li>
                            <li>ปิดรับเเทงรอบสุดท้าย เวลา 18:00 น.</li>
                            <li>ระบบทำการคืนโพยเเละเครดิตให้ในกรณีที่ตลาดหุ้นไม่มีความเคลื่อนไหวใดๆ ภายใน 1 ชั่วโมง ถือว่าไม่มีการออกผลรางวัล</li>
                            </ul>
                            <h2 class="AMB-contact-title">วิธีการดูผลหวยมาเลย์</h2>
                            <ul>
                            <li>ใช้ผลปิดตลาดรอบเช้าของหุ้น Magnum4d</li>
                            <li>ออกผลรางวัลจะนำเลขหลักหน่วยเเละจุดทศนิยมของค่า 1ST PRIZE ออกรางวัล 3 ตัวบน เเละ นำจุดทศนิยมของค่า 2ND PRIZE ออกรางวัล 2 ตัวล่าง</li>
                            </ul>
                            <h1 class="AMB-contact-title-gradient">หวยมาเลย์แบบชุด</h1>
                            <h2 class="AMB-contact-title">หวยมาเลย์แบบชุด กติกาการเเทง ZONELOTTO</h2>
                            <ul>
                            <li>เปิดรับเเทงออนไลน์ทุกวัน พุธ, เสาร์, อาทิตย์</li>
                            <li>เปิดรับเเทงตั้งเเต่ 05.00 น. (ตามเวลาประเทศไทย)</li>
                            <li>ปิดรับเเทงรอบสุดท้าย เวลา 18:00 น.</li>
                            <li>ระบบทำการคืนโพยเเละเครดิตให้ในกรณีที่ตลาดหุ้นไม่มีความเคลื่อนไหวใดๆ ภายใน 1 ชั่วโมง ถือว่าไม่มีการออกผลรางวัล</li>
                            </ul>
                            <h2 class="AMB-contact-title">วิธีการดูผลหวยมาเลย์</h2>
                            <ul>
                            <li>ใช้ผลปิดตลาดรอบเช้าของหุ้น Magnum4d</li>
                            <li>ออกผลรางวัลจะนำเลขหลักหน่วยเเละจุดทศนิยมของค่า 1ST PRIZE ออกรางวัล 3 ตัวบน เเละ นำจุดทศนิยมของค่า 2ND PRIZE ออกรางวัล 2 ตัวล่าง</li>
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
