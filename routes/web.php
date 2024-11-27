<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\ContactInquiryController;
use App\Http\Controllers\productcontroller;


Route::view('layout;','layout.layout');
Route::get('/comment',[CommentController::class, 'index'])->name('comments.index');
Route::patch('/comments/{id}/status', [CommentController::class, 'updateStatus'])->name('comments.updateStatus');
Route::get('/comments/edit/{comment}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/contact', [ContactInfoController::class, 'index'])->name('contact.index');
Route::put('/contact', [ContactInfoController::class, 'update'])->name('contact.update');

Route::get('/contact/inquiries', [ContactInquiryController::class, 'showInquiries'])->name('contact.inquiries');
Route::delete('/inquiries/{inquiry}', [ContactInquiryController::class, 'destroy'])->name('inquiries.destroy');
////
Route::get('/product', [productcontroller::class, 'index'])->name('product.index');

Route::delete('product/{product_id}', [productController::class, 'destroy'])->name('product.destroy');


//
Route::get('/product/them-moi', [productController::class, 'themmoi'])->name('product.them-moi');
Route::post('/product/them-moi', [productController::class, 'xulythemmoi'])->name('product.xl-them-moi');
Route::get('/product/cap-nhat/{product_id}', [productController::class, 'capnhat'])->name('product.cap-nhat');
Route::post('/product/cap-nhat/{product_id}', [productController::class, 'xulycapnhat'])->name('product.xl-cap-nhat');
Route::get('/product/xoa/{product_id}', [productController::class, 'xoa'])->name('product.xoa');