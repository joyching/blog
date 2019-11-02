<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanShowHomePage()
    {
        $this->get('/')
            ->assertViewIs('index');
    }
}
