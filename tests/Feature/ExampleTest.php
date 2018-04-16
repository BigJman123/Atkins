<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_see_index_page() {
        $response = $this->get('/');

        $response->assertSee('Family Owned and Operated');
        $response->assertSee('Precision Planting');
        $response->assertSee('Pioneer Seeds');
        $response->assertSee('Custom Farming');
    }
}
