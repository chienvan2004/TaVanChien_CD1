@extends('layouts.site')

@section('title','liên hệ')

@section('contact')
<div class="container mt-5 bg-white mb-2" style="border-radius: 3px;min-height:550px;padding-top:15px ;">
    <h2 class="text-center mb-4">Liên Hệ Chúng Tôi</h2>
    <div class="row">
      <div class="col-md-6">
        <h4>Địa chỉ của chúng tôi</h4>
        <p>123 Đường Man Thiện, Thành Phố Thủ Đức, TP.HCM</p>
        <p>Email: tavanchien360@gmail.com</p>
        <p>Điện thoại: (012) 345-6789</p>
        <!-- Bản đồ -->
        <div id="map" style="height: 250px;"></div>
      </div>
      <div class="col-md-6">
        <h4>Gửi tin nhắn cho chúng tôi</h4>
        <form>
          <div class="form-group">
            <label for="name">Họ và Tên:</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="message">Tin Nhắn:</label>
            <textarea class="form-control" id="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Gửi Tin Nhắn</button>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Thêm Google Maps -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>;
    <script>;
        var map = L.map('map').setView([10.8479, 106.7870], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&amp;copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([10.8479, 106.7870]).addTo(map)
            .openPopup();
    </script>
@endsection

@section('header')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
