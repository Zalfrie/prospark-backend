<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_product()
    {
        $response = $this->get('/api/v1/product');

        $response->assertStatus(200);
    }
}
