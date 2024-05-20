
@extends('layouts.site')

@section('title','trang chủ')

@section('home')
<div class="slideshow">
    <div class="slideshow_left">
        <!-- Slides -->
        <div class="mySlides">
            <img src="{{ asset('imgs/sideshow1.jpg') }}" alt="" style="width:100%; border-radius: 3px;">
        </div>
        <div class="mySlides">
            <img src="{{ asset('imgs/sideshow3.jpg') }}" style="width:100%; border-radius: 3px;">
        </div>
        <div class="mySlides">
            <img src="{{ asset('imgs/sideshow4.jpg') }}" style="width:100%; border-radius: 3px;">
        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)"><i class="icon_prev fa-solid fa-square-caret-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="icon_next fa-solid fa-square-caret-right"></i></a>
    </div>

    <div class="img_right">
        <img src="{{ asset('imgs/sideshow5.jpg') }}" alt="" style="width:100%; border-radius: 3px;" class="img_right_top">
        <img src="{{ asset('imgs/sideshow1.jpg') }}" alt="" style="width:100%; border-radius: 3px;" class="img_right_bottom">
    </div>
</div>

<div class="container-fluid">
    <div class="container_category" style="width: 89%">
        <h5 class="card-title">DANH MỤC</h5>
        <div class="category">

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cPhone.png" alt="" style="height: 50px;">
                            <p>Điện thoại</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cHeadphones.png" alt="" style="height: 50px;">
                            <p>Tại nghe</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cLaptop.png" alt="" style="height: 50px;">
                            <p>Laptop</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cPC.png" alt="" style="height: 50px;">
                            <p>PC</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cWatch.png" alt="" style="height: 50px;">
                            <p>Đồng hồ</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cPhukieen.png" alt="" style="height: 50px;">
                            <p>Phụ kiện</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cTablet.png" alt="" style="height: 50px;">
                            <p>Tablet</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="category_div">
                <ul class="category_ul">
                    <li class="category_li">
                        <a href="">
                            <img src="imgs/cPrinter.png" alt="" style="height: 50px;">
                            <p>Máy in</p>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <div class="container_product_new" style="width: 89%">
        <h5>Sản phẩm mới</h5>
        <div class="product_new">
            <div class="card" style=" width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style=" width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style=" width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>

                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="container_product_sale" style="width: 89%">
        <h5>Sản giảm giá</h5>
        <div class="product_sale">
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
          
       
          
         
        
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
            <div class="card" style="width: 13rem; height: 20rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 150px; width: 150px;">
                    <div class="card-body">
                        <h6 class="card-title">Samsung Galaxy S24 Ultra</h6>
                        <span>
                            <h5>28.490.000</h5>
                        </span>
                        <span>
                            <p class="price_sale">30.000.000</p>
                        </span>

                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection

@section('header')
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="{{ url('js/app.js') }}" defer></script>
@endsection