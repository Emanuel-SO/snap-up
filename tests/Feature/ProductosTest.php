<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Producto;

class ProductosTest extends TestCase
{
    use RefreshDatabase;
    public function test_agregar_producto(){
        $producto = Producto::create([
            'nombre' => 'Ejemplo',
            'descripcion' => 'Ejemplo descripcion',
            'precio' => 123.2,
            'cantidad' => 12,
            'oferta' => 1,
            'marca_id' => 1,
            'categoria_id' => 1
        ]);

        $producto = Producto::first();
        if($producto != null){

            $this->assertTrue(true);
        }else{

            $this->assertTrue(false);
        }
    }

    
}
