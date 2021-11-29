<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header id="header">
    <div class="index">
        <div class=" index-flex" style="">
            <div>
                <img class="" style=" " src=" {{ url('/images/Logo.png') }}" alt="Image" />
            </div>

            <div>
                <a href="{{ url('') }}">
                    <button class="under-line" >หน้าแรก</button>
                </a>
                <a href="{{ url('award') }}">
                    <button class="under-line">วิธีเช็ครางวัลหวย</button>
                </a>
                <a href="{{ url('contract') }}">
                    <button class="under-line" >โปรโมชั่น</button>
                </a>
                <a href="{{ url('contract') }}">
                    <button class="under-line" >ติดต่อเรา</button>
                </a>
                <a>
                    <button class="under-line" data-bs-toggle="modal" data-bs-target="#exampleModal">เข้าสู่ระบบ</button>
                </a>
                <a href="{{ url('register') }}">
                    <button class="under-line">สมัครสมาชิก</button>
                </a>
            </div>
        </div>

      



        <div id="navbar">
            <div class="index-flex-mobile" style="">
                <div class="index-flex-mobile" style="">
                    <div class="navbar-bottom w-100">
                        <div class="row row-cols-5 mx-0 justify-content-center">
                            <div class=" px-0">
                                <div class="">

                                    <a class=" top-m " href="
                                    {{ url('landingsale') }}">
                                        <img class="" style=" height: 31px;"
                                            src=" {{ url('/images/home.png') }}" alt="Image" />
                                        <div class="text-center mb-0 fill-text fill-text-hover">หน้าแรก</div>
                                    </a>

                                </div>
                            </div>
                            <div class="px-0">
                                <div class="">

                                    <a class=" top-m " href="
                                    {{ url('award') }}">
                                        <img class="" style=" height: 31px;"
                                            src=" {{ url('/images/home2.png') }}" alt="Image" />
                                        <div class="text-center mb-0 fill-text fill-text-hover">วิธีเช็คหวย</div>
                                    </a>

                                </div>
                            </div>
                            <div class="px-0">
                                <div class="">
                                    <a class=" top-m " href="
                                    {{ url('award') }}">
                                        <img class="" style=" height: 31px;"
                                            src=" {{ url('/images/home3.png') }}" alt="Image" />
                                        <div class="text-center mb-0 fill-text fill-text-hover">เข้าแทงหวย</div>
                                    </a>
                                </div>

                            </div>
                            <div class="px-0">
                                <div class="">
                                    <a class=" top-m " href="
                                    {{ url('promotion') }}">
                                        <img class="" style=" height: 31px;"
                                            src=" {{ url('/images/home4.png') }}" alt="Image" />
                                        <div class="text-center mb-0 fill-text fill-text-hover">โปรโมชั่น</div>
                                    </a>

                                </div>
                            </div>
                            <div class=" px-0 ">
                                <div class="">
                                    <a class=" top-m " class="
                                     under-line"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <img class="" style=" height: 31px;"
                                            src=" {{ url('/images/home5.png') }}" alt="Image" />
                                        <div class="text-center mb-0 fill-text fill-text-hover">เข้าสู่ระบบ</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="color: black;">
        <div class="modal-dialog edit-margin" role="document">
            <div class="modal-content edit-modal-content">
                <div class="modal-header edit-pxy no-border-m">
                </div>
                <div class="modal-body edit-pxy no-border-m mb-3">
                    <div class="bg-gold-login mb-3">
                        <div class="bg-white-input">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row g-2">
                                        <div class="col-2 col-lg-1 img-input">
                                            <img class="icon-email"
                                                src="https://zonelotto.net/img/lotto-icon/icon-email.png" alt="">
                                        </div>
                                        <div class="col-10 col-lg-11 size-text-input">
                                            <input id="username" type="text" class="col-10 w-100"
                                                placeholder="ชื่อผู้ใช้" style="border:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gold-login">
                        <div class="bg-white-input">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row g-2">
                                        <div class="col-2 col-lg-1 img-input">
                                            <img class="icon-lockpass"
                                                src="https://zonelotto.net/img/lotto-icon/icon-lockpass.png" alt="">
                                        </div>
                                        <div class="col-10 col-lg-11 size-text-input">
                                            <input id="password" type="password" class="col-10 w-100"
                                                placeholder="รหัสผ่าน" style="border:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer edit-pxy no-border-m">
                    <div class="w-100 button-group2 text-center edit-margin-m">
                        <button type="button" class="btn-login btn-regis2" onclick="loginAjax()">ลงชื่อเข้าใช้</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>

</html>







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

    // $('a').click(function() {
    //     Swal.fire({
    //         icon: 'error',
    //         title: 'สำหรับเข้าชมเท่านั้น',
    //         // footer: '<a href="">Why do I have this issue?</a>'
    //     })
    //     // .then(function() {
    //     //     setTimeout(function() {
    //     //         window.location.href = "http://127.0.0.1:8000/landing2"
    //     //     }, 1000);
    //     // });
    // });
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
