<?php

namespace Database\Seeders;


use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'ALCACHOFAS AL HORNO',
            'slug' => 'ALCACHOFAS-HORNO',
            'details' => 'Rica en sustancias activas muy beneficiosas para tu organismo',
            'price' => 250,
            'shipping_cost' => 0,
            'description' => 'ALCACHOFAS AL HORNO',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'ARROZ BASMATI',
            'slug' => 'ARROZ-BASMATI',
            'details' => 'Heura la nueva alternativa vegetal a la carne de pollo, que imita su textura y sabor',
            'price' => 159,
            'shipping_cost' => 0,
            'description' => 'ARROZ BASMATI',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'TATAKI DE ATÚN',
            'slug' => 'TATAKI-ATÚN',
            'details' => 'Es un plato delicioso que se consume prácticamente crudo',
            'price' => 369,
            'shipping_cost' => 0,
            'description' => 'TATAKI DE ATÚN',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'MERLUZA AL VAPOR',
            'slug' => 'MERLUZA-VAPOR',
            'details' => 'No solo es rica en proteínas completas o de alto valor biológico',
            'price' => 209,
            'shipping_cost' => 0,
            'description' => 'MERLUZA AL VAPOR',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'CREMA DE PUERROS',
            'slug' => 'CREMA-PUERROS',
            'details' => 'Los puerros son perfectos para regular el tránsito intestinal',
            'price' => 125,
            'shipping_cost' => 0,
            'description' => 'CREMA DE PUERROS',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'GUISO DE BACALAO',
            'slug' => 'GUISO-BACALAO',
            'details' => 'Cuentan con una buena cantidad de vitaminas, minerales, hidratos de carbono',
            'price' => 144.99,
            'shipping_cost' => 0,
            'description' => 'GUISO DE BACALAO',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'TOSTA DE SALMÓN',
            'slug' => 'TOSTA-SALMÓN',
            'details' => 'Es una fuente excelente de proteína de alta calidad, vitaminas y minerales',
            'price' => 148.99,
            'shipping_cost' => 0,
            'description' => 'TOSTA DE SALMÓN',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

        Product::create([
            'name' => 'TOSTA DE ATUN',
            'slug' => 'TOSTA-ATUN',
            'details' => 'Es una fuente excelente de proteína de alta calidad, vitaminas y minerales',
            'price' => 105.99,
            'shipping_cost' => 0,
            'description' => 'TOSTA DE ATUN',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'pexels-dana-tentis-691114.jpg'
        ]);

    }
}
