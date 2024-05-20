@extends('layouts.site')

@section('title','chi tiết sản phẩm')

@section('product_detail')

<div class="container">
    <div class="card mb-3" style="width: 100%; border: none; background-color: #fff;">
        <div class="img row g-0">
            <div class="col-md-4">
                <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="content col-md-7">
                <div class="card-body">
                    <h5 class="card-title">Samsung Galaxy S24 Ultra</h5>
                    <div class="price" style="display: flex; ">
                        <h4 class="price_sale" style="margin-right: 10px;">28.490.000</h4>
                        <p class="price_product" style="text-decoration: line-through; margin-top: 2px;">
                            30.000.000</p>
                    </div>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="btn" style="border: none;">
                    <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                    <button class="btn btn-success">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #fff; border-radius: 3px; margin-bottom: 20px;">
        <h5 style="text-align: center;">Sản phẩm tương tự</h5>
        <div class="product_sale">
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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
            <div class="card" style="width: 15rem; height: 23rem; padding-top: 25px;">
                <a href="">
                    <img src="{{ asset('imgs/samsung-galaxy-s24.webp') }}" class="card-img-top" alt="..."
                        style="height: 200px; width: 200px;">
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