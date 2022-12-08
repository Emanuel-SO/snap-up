<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //RUTAS OFfline
Route::get('/offline', function(){
    return view('vendor.laravelpwa.offline');
});
    //RUTAS APP
Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->name('app.index');
Route::get('ofertas/{categoria}', [App\Http\Controllers\AppController::class, 'ofertas'])->name('app.ofertas');
Route::get('buscar/categoria/{id}', [App\Http\Controllers\AppController::class, 'buscarCategoria'])->name('app.buscarCategoria');
Route::get('buscar/marca/{id}', [App\Http\Controllers\AppController::class, 'buscarMarca'])->name('app.buscarMarca');
Route::get('productos', [App\Http\Controllers\AppController::class, 'showTodosProductos'])->name('app.showTodosProductos');
Route::get('producto/{producto}', [App\Http\Controllers\AppController::class, 'showProducto'])->name('app.showProducto');
//Route::view()

Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');


Auth::routes();
//RUTAS DASHBOARD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.show');

//RUTAS DASHBOARD ADMIN

    //RUTAS DASHBOARD ADMIN CATEGORIAS
Route::get('dashboard/categorias', [App\Http\Controllers\CategoriasController::class, 'index'])
    ->middleware('auth.admin')
    ->name('categorias.index');
Route::get('dashboard/categorias/create', [App\Http\Controllers\CategoriasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('categorias.create');
Route::post('dashboard/categorias', [App\Http\Controllers\CategoriasController::class, 'store'])
    ->middleware('auth.admin')
    ->name('categorias.store');
Route::get('dashboard/categorias/{categoria}/edit', [App\Http\Controllers\CategoriasController::class, 'edit'])
    ->middleware('auth.admin')
    ->name('categorias.edit');
Route::patch('dashboard/categorias/{categoria}', [App\Http\Controllers\CategoriasController::class, 'update'])
    ->middleware('auth.admin')
    ->name('categorias.update');
Route::delete('dashboard/categorias/{categoria}', [App\Http\Controllers\CategoriasController::class, 'destroy'])
    ->middleware('auth.admin')
    ->name('categorias.destroy');

    //RUTAS DASHBOARD ADMIN MARCAS
Route::get('dashboard/marcas', [App\Http\Controllers\MarcasController::class, 'index'])
    ->middleware('auth.admin')
    ->name('marcas.index');
Route::get('dashboard/marcas/create', [App\Http\Controllers\MarcasController::class, 'create'])
    ->middleware('auth.admin')
    ->name('marcas.create');
Route::post('dashboard/marcas', [App\Http\Controllers\MarcasController::class, 'store'])
    ->middleware('auth.admin')
    ->name('marcas.store');
Route::get('dashboard/marcas/{marca}/edit', [App\Http\Controllers\MarcasController::class, 'edit'])
    ->middleware('auth.admin')
    ->name('marcas.edit');
Route::patch('dashboard/marcas/{marca}', [App\Http\Controllers\MarcasController::class, 'update'])
    ->middleware('auth.admin')
    ->name('marcas.update');
Route::delete('dashboard/marcas/{marca}', [App\Http\Controllers\MarcasController::class, 'destroy'])
    ->middleware('auth.admin')
    ->name('marcas.destroy');

    //RUTAS DASHBOARD ADMIN PRODUCTOS
Route::get('dashboard/productos', [App\Http\Controllers\ProductosController::class, 'index'])
    ->middleware('auth.admin')
    ->name('productos.index');
Route::get('dashboard/productos/create', [App\Http\Controllers\ProductosController::class, 'create'])
    ->middleware('auth.admin')
    ->name('productos.create');
Route::post('dashboard/productos', [App\Http\Controllers\ProductosController::class, 'store'])
    ->middleware('auth.admin')
    ->name('productos.store');
Route::get('dashboard/productos/{producto}/edit', [App\Http\Controllers\ProductosController::class, 'edit'])
    ->middleware('auth.admin')
    ->name('productos.edit');
Route::patch('dashboard/productos/{producto}', [App\Http\Controllers\ProductosController::class, 'update'])
    ->middleware('auth.admin')
    ->name('productos.update');
Route::delete('dashboard/productos/{producto}', [App\Http\Controllers\ProductosController::class, 'destroy'])
    ->middleware('auth.admin')
    ->name('productos.destroy');

    //RUTAS DASHBOARD ADMIN PRODUCTOS
Route::get('dashboard/productos_imagenes/create/{producto}', [App\Http\Controllers\ProductosImagenesController::class, 'create'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.create');
Route::post('dashboard/productos_imagenes/store/{producto}', [App\Http\Controllers\ProductosImagenesController::class, 'store'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.store');
Route::get('dashboard/productos_imagenes/{producto}', [App\Http\Controllers\ProductosImagenesController::class, 'show'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.show');
Route::get('dashboard/productos_imagenes/{producto_imagen}/edit', [App\Http\Controllers\ProductosImagenesController::class, 'edit'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.edit');
Route::patch('dashboard/productos_imagenes/update/{producto}', [App\Http\Controllers\ProductosImagenesController::class, 'update'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.update');
Route::delete('dashboard/productos_imagenes/{producto}', [App\Http\Controllers\ProductosImagenesController::class, 'destroy'])
    ->middleware('auth.admin')
    ->name('productos_imagenes.destroy');
