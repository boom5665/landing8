

@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
    <div class="container">
        <div class="row row-mar ">
            <div class="col-12 col-md-9">
                <div class="h-100 AMB-background AMB-reward AMB-content">
                    <h1 class="AMB-regis-title text-center">สมัครสมาชิก</h1>
                    <div class="form-regis">
                        <div class="row register-form">
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="re-input" id="firstname" name="firstname"
                                    placeholder="ชื่อต้องตรงกับบัญชีธนาคาร...">
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="surname">นามสกุล</label>
                                <input type="text" class="re-input" id="surname" name="surname"
                                    placeholder="นามสกุลต้องตรงกับบัญชีธนาคาร...">
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="bank">ธนาคาร</label>
                                <select id="bank" name="bank" class="re-select custom-select minimal">
                                    <option disabled="disabled" value="" selected="">กรุณาเลือกธนาคาร...</option>
                                    <option value="SCB">ธนาคารไทยพาณิชย์</option>
                                    <option value="KBANK">ธนาคารกสิกรไทย</option>
                                    <option value="BBL">ธนาคารกรุงเทพ</option>
                                    <option value="KTB">ธนาคารกรุงไทย</option>
                                    <option value="GSB">ธนาคารออมสิน</option>
                                    <option value="BAY">ธนาคารกรุงศรีอยุธยา</option>
                                    <option value="CITI">ธนาคารซิตี้แบงก์</option>
                                    <option value="BAAC">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                    <option value="TMB">ธนาคารทีเอ็มบีธนชาต</option>
                                    <option value="KKP">ธนาคารเกียรตินาคิน</option>
                                    <option value="ICBC">ธนาคารไอซีบีซี (ไทย)</option>
                                    <option value="TCD">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                                    <option value="SCBT">ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย) </option>
                                    <option value="CIMB">ธนาคารซีไอเอ็มบีไทย</option>
                                    <option value="UOB">ธนาคารยูโอบี</option>
                                    <option value="HSBC">ธนาคารเอชเอสบีซี ประเทศไทย</option>
                                    <option value="MIZUHO">ธนาคารมิซูโฮ คอร์ปอเรต</option>
                                    <option value="GHB">ธนาคารอาคารสงเคราะห์</option>
                                    <option value="LHBANK">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
                                    <option value="TISCO">ธนาคารทิสโก้</option>
                                    <option value="IBANK">ธนาคารอิสลามแห่งประเทศไทย</option>
                                </select>
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="banknumber">หมายเลขบัญชี</label>
                                <input maxlength="12" type="text" class="re-input" id="banknumber"
                                    name="banknumber" placeholder="เลขบัญชี"
                                    >
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="number">เบอร์โทรศัพท์</label>
                                <input maxlength="10" type="text" class="re-input" id="phone" name="phone"
                                    placeholder="ต้องใช้งานได้จริง"
                                    >
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m2">
                                <label for="userregis">ยูสที่เข้าเล่น</label>
                                <input readonly="" maxlength="36" type="text" class="re-input" id="userregis"
                                    name="userregis" value="zone"
                                    >
                            </div>
                            <div class="col-12 d-flex flex-column margin-bottom-m3">
                                <label for="passwordregis">รหัสผ่าน</label>
                                <input maxlength="20" type="password" class="re-input" id="passregis"
                                    name="passwordregis" placeholder="รหัสผ่าน"
                                   >
                            </div>
                        </div>
                        <div class="button-group text-center">
                            <button type="button" class="btn btn-regis btn-secondary"
                                onclick="registerAjax()">สมัครสมาชิก</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2 d-block d-md-none"></div>
            @include('layouts.right-menu')
        </div>
    </div>
    </div>
    </div>
@endsection




