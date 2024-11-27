@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="card-body">
    <h4 class="card-title">Thông Tin Liên Hệ Của Shop</h4>
    <p class="text-muted">
        Trang này quản lý thông tin liên hệ của shop, bao gồm địa chỉ, số điện thoại, email, giờ làm việc, và các thông
        tin hỗ trợ khác.
    </p>

    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Contact Information Form -->
    <form method="POST" action="{{ route('contact.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="shop_name">Tên Shop</label>
            <input type="text" name="shop_name" id="shop_name" class="form-control"
                value="{{ old('shop_name', $contactInfo->shop_name) }}" required>
        </div>

        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control"
                value="{{ old('address', $contactInfo->address) }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Số Điện Thoại</label>
            <input type="tel" name="phone" id="phone" class="form-control"
                value="{{ old('phone', $contactInfo->phone) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                value="{{ old('email', $contactInfo->email) }}" required>
        </div>

        <div class="form-group">
            <label for="fax">Fax (Nếu có)</label>
            <input type="text" name="fax" id="fax" class="form-control" value="{{ old('fax', $contactInfo->fax) }}">
        </div>

        <div class="form-group">
            <label for="business_hours">Giờ Làm Việc</label>
            <input type="text" name="business_hours" id="business_hours" class="form-control"
                value="{{ old('business_hours', $contactInfo->business_hours) }}" required>
        </div>

        <div class="form-group">
            <label for="social_links">Liên kết Mạng Xã Hội</label>
            <input type="text" name="social_links" id="social_links" class="form-control"
                value="{{ old('social_links', $contactInfo->social_links) }}">
        </div>

        <div class="form-group">
            <label for="map">Embed Google Maps</label>
            <textarea name="map" id="map" class="form-control" rows="5">{{ old('map', $contactInfo->map) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhật Thông Tin Liên Hệ</button>
    </form>

</div>
@endsection