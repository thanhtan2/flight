<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/flights', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Vietnam Airlines VN123', 'price' => '1.200.000đ'],
        ['id' => 2, 'name' => 'Vietjet Air VJ456', 'price' => '800.000đ'],
        ['id' => 3, 'name' => 'Bamboo Airways QH789', 'price' => '1.000.000đ']
    ]);
})->middleware(\Illuminate\Http\Middleware\HandleCors::class); // Cho phép Frontend gọi API