@extends('layouts.site')

@section('title','trang chủ')

@section('products')
<div class="filter" style="background: #fff; width: 40%; height: 70px ;margin: 20px 0 0 95px; border-radius: 3px; display: flex; align-items: center; justify-content:space-around">
    <div class="filter_chil" style=" border: solid 1px #bbb ; border-radius: 5px;padding:5px">
        <span style="">Danh mục: </span>
        <select name="cars" id="cars" style="height: 30px; outline: none;border: none;border-radius: 5px ">
            <option value="volvo"><a href="">Điện thoại</a></option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
    </div>
    <div class="filter_chil" style=" border: solid 1px #bbb ; border-radius: 5px;padding:5px">
        <span style="">Thương hiệu: </span>
        <select name="cars" id="cars" style="height: 30px; outline: none;border: none;border-radius: 5px ">
            <option value="volvo"><a href="">samsung</a></option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
    </div>
    <div class="filter_chil" style=" border: solid 1px #bbb ; border-radius: 5px;padding:5px">
        <span style="">Giá: </span>
        <select name="cars" id="cars" style="height: 30px; outline: none;border: none;border-radius: 5px ">
            <option value="volvo"><a href="">Dưới 2 triệu</a></option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
    </div>
   
</div>

<div class="container_product_new" style="width: 89%; margin-bottom: 20px">
    <h5>sản phẩm</h5>
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
@endsection
@section('header')
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
@endsection