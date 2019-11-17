<?php

namespace Tests\Feature\Controllers\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 測試註冊頁面
     *
     * @return void
     */
    public function testItCanShowRegiterPage()
    {
        $this->get('/register')->assertViewIs('auth.register');
    }

    /**
     * 測試註冊
     *
     * @return void
     */
    public function testItCanSignUp()
    {
        $info = [
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'secret123',
            'password_confirmation' => 'secret123',
        ];

        $this->post('/register', $info);

        $this->assertDatabaseHas('users', ['email' => 'test@example.com', 'name' => 'Test']);
    }
}
