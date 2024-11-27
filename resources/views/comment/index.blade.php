@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="table-responsive">
    <table class="table border text-nowrap text-md-nowrap">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Khách Hàng</th> <!-- Tên khách hàng -->
                <th>Sản Phẩm</th> <!-- Tên sản phẩm -->
                <th>Bình Luận</th> <!-- Nội dung bình luận -->
                <th>Đánh giá</th>
                <th>Hành động</th> <!-- Hành động -->
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->customer->name }}</td>
                <!-- Tên khách hàng -->
                <td>{{ $comment->product->product_name }}</td>
                <!-- Tên sản phẩm -->
                <td>{{ $comment->content }}</td>
                <td>
                    @for ($i = 1; $i <= 5; $i++) <i
                        class="fa fa-star {{ $i <= $comment->Evaluate ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                </td>
                <!-- Nội dung bình luận -->
                <td>
                    <!-- Edit Action -->
                    <!-- Delete Action -->
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">
                            Xóa
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection