

@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
    <div class="container">
        <div class="row row-mar ">
            <div class="col-12 col-md-9">
                <div class="h-100 AMB-background AMB-reward AMB-content">
                    <h1 class="zone-select-title text-center">กติกาหวยที่เปิดให้บริการ</h1>
                    <div class=" d-row-2 row-cols-3 row-cols-xl-3 pe-0">
                        <div class="col pe-0">
                            <a href="{{ url('thai') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/thai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('tgs') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/tks.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('aomsin') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/aomsin.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('hanoy') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/hanoy.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('maley') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/maley.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('yeekee') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/yekee.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('laos') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/laos.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('pingpong') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/pingpong.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('singgapore') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/sing.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockthai') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockthai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stocknikkei') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocknikkei.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockchina') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockchina.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockhangseng') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockhangseng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockkorea') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockkorea.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stocktaiwan') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocktaiwan.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockindia') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockindia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockgerman') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockgerman.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockeng') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockeng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockdownjones') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockdownjones.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockrussia') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockrussia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col pe-0">
                            <a href="{{ url('stockegypt') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockegypt.png') }}" alt="">
                                </div>
                            </a>
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




