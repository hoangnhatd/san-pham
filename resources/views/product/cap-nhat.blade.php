
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">CẬP NHẬT SẢN PHẨM</h1>
</div>

<form class="row g-3" method="POST" action="{{ route('product.xl-cap-nhat', ['product_id' => $product->product_id]) }}">
    <div class="col-12">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="product_id" class="form-label">ID</label>
                <input type="text" name="product_id" class="form-control" id="product_id" value="{{ $product->product_id }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="brand_id" class="form-label">nhan hang</label>
                <input type="text" name="brand_id" class="form-control" id="brand_id" value="{{ $product->brand_id }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_name" class="form-label">Ten san pham</label>
                <input type="text" name="product_name" class="form-control" id="product_name" value="{{ $product->product_name }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="product_price" class="form-label">SỐ LƯỢNG</label>
                <input type="text" name="product_price" class="form-control" id="product_price" value="{{ $product->product_price }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="desc" class="form-label">GIÁ NHẬP</label>
                <input type="text" name="desc" class="form-control" id="desc" value="{{ $product->desc }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_sold" class="form-label">So luong</label>
                <input type="product_sold" name="product_sold" class="form-control" id="product_sold" value="{{ $product->product_sold }}">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="product_image" class="form-label">Hinh Anh</label>
                <input type="text" name="product_image" class="form-control" id="product_image" value="{{ $product->product_image }}">
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