<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('header')
</head>
<body>
    <div class="web">
        <header class="header" style="position: sticky; top: 0;z-index: 1000;">
            <nav class="header_nav">
                <ul class="header_nav_ul">
                    <li class="header_nav_ul_li"><a href=""><i class="fa-solid fa-house"></i>Trang chủ</a></li>
                    <li class="header_nav_ul_li"><a href=""><i class="fa-solid fa-bell"></i>Thông báo</a></li>
                    <li class="header_nav_ul_li"><a href=""><i class="fa-solid fa-id-badge"></i>    </i>Liên hệ</a></li>
                    <li class="header_nav_ul_li"><a href="">Đăng nhập</a></li>
                    <li class="header_nav_ul_li"><a href="">Đăng xuất</a></li>
                </ul>
            </nav>

            <div class="header_bottom">
                <div class="logo">
                    <a href=""><img src="{{ asset('imgs/logo.png') }}" alt="" class="img_logo"></a>
                </div>

                <div class="search_box">
                    <form action="">
                        <input type="text" placeholder="Tìm kiếm..." class="input_search">
                        <button type="submit" class="btn_search"><i class="fa-solid fa-search"></i></button>
                    </form>
                </div>

                <div class="cart">
                    <a href=""><i class="icon_cart fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>

        </header>


        @yield('home')
        @yield('products')
        @yield('product_detail')
        @yield('contact')
        
        <footer class="footer">
            <div class="footer_footer">
                <div class="iaSrUz">
                    <div class="mzvsTT">CHĂM SÓC KHÁCH HÀNG</div>
                    <ul class="PpgFjN">
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Trung Tâm Trợ Giúp</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Shopee Blog</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Shopee Mall</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Hướng
                                    Dẫn Mua Hàng</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Hướng
                                    Dẫn Bán Hàng</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Thanh
                                    Toán</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Shopee Xu</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Vận
                                    Chuyển</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Trả
                                    Hàng &amp; Hoàn Tiền</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Chăm
                                    Sóc Khách Hàng</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><span class="DMQMn2">Chính
                                    Sách Bảo Hành</span></a></li>
                    </ul>
                </div>
                <div class="iaSrUz">
                    <div class="mzvsTT">THANH TOÁN</div>
                    <ul class="JfFnLR">
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/d4bbea4570b93bfd5fc652ca82a262a8"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/a0a9062ebe19b45c1ae0506f16af5c16"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/38fd98e55806c3b2e4535c4e4a6c4c08"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/bc2a874caeee705449c164be385b796c"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/2c46b83d84111ddc32cfd3b5995d9281"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/5e3f0bee86058637ff23cfdf2e14ca09"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/9263fa8c83628f5deff55e2a90758b06"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/0217f1d345587aa0a300e69e2195c492"
                                    alt="logo"></a></li>
                    </ul>
                </div>
                <div class="iaSrUz">
                    <div class="mzvsTT">ĐƠN VỊ VẬN CHUYỂN</div>
                    <ul class="JfFnLR">
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/vn-50009109-159200e3e365de418aae52b840f24185"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/d10b0ec09f0322f9201a4f3daf378ed2"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/vn-50009109-64f0b242486a67a3d29fd4bcf024a8c6"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/59270fb2f3fbb7cbc92fca3877edde3f"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/957f4eec32b963115f952835c779cd2c"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/0d349e22ca8d4337d11c9b134cf9fe63"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/3900aefbf52b1c180ba66e5ec91190e5"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/6e3be504f08f88a15a28a9a447d94d3d"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/b8348201b4611fc3315b82765d35fc63"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/0b3014da32de48c03340a4e4154328f6"
                                    alt="logo"></a></li>
                        <li class="Z13wAy"><a target="_blank" rel="noopener noreferrer" class="nW3cn4"><img
                                    src="https://down-vn.img.susercontent.com/file/vn-50009109-ec3ae587db6309b791b78eb8af6793fd"
                                    alt="logo"></a></li>
                    </ul>
                </div>

                <div class="iaSrUz">
                    <div class="mzvsTT">THEO DÕI CHÚNG TÔI TRÊN</div>
                    <ul class="PpgFjN">
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><img class="IlIvTm"
                                    src="https://down-vn.img.susercontent.com/file/2277b37437aa470fd1c71127c6ff8eb5"><span
                                    class="DMQMn2">Facebook</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><img class="IlIvTm"
                                    src="https://down-vn.img.susercontent.com/file/5973ebbc642ceee80a504a81203bfb91"><span
                                    class="DMQMn2">Instagram</span></a></li>
                        <li class="Ka2gCh"><a href="" class="C0sjnV" title="" target="_blank"
                                rel="noopener noreferrer"><img class="IlIvTm"
                                    src="https://down-vn.img.susercontent.com/file/f4f86f1119712b553992a75493065d9a"><span
                                    class="DMQMn2">LinkedIn</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_copyright">
                <p>Copyright © 2024. All rights reserved by TA VAN CHIEN.</p>
            </div>
        </footer>
    </div>

</body>
</html>