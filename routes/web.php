<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductsController;

route::get('/', [HomeController::class, 'index']);
route::get('product_detail/{id}', [ProductsController::class, 'product_detail']);
route::get('contact', [ContactController::class, 'contact']);
route::get('products', [ProductsController::class, 'products']);
