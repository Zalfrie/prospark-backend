<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use DatabaseMigrations;

    private $apiProduct = "/api/products";

    public function test_can_create_product()
    {
        $response = $this->json(
            'GET',
            $this->apiProduct,
            [],
            []
        );

        $response->assertStatus(200);
    }
}
