
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">THÊM MỚI SẢN PHẨM</h1>
</div>

<form class="row g-3" method="POST" action="{{ route('product.xl-them-moi') }}">
    <div class="col-12">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="product_id" class="form-label">ID</label>
                <input type="text" name="product_id" class="form-control" id="product_id" >
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="brand_id" class="form-label">nhan hang</label>
                <input type="text" name="brand_id" class="form-control" id="brand_id" >
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_name" class="form-label">NHÀ CUNG CẤP</label>
                <input type="text" name="product_name" class="form-control" id="product_name" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="product_price" class="form-label">gia</label>
                <input type="text" name="product_price" class="form-control" id="product_price" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="desc" class="form-label">mo ta</label>
                <input type="text" name="desc" class="form-control" id="desc" >
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_sold" class="form-label">GIÁ BÁN</label>
                <input type="product_sold" name="product_sold" class="form-control" id="product_sold" >
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_image" class="form-label">Hinh san pham</label>
                <input type="text" name="product_image" class="form-control" id="product_image" >
            </div>
        </div>        
        <div class="row pt-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</form>
@endsection