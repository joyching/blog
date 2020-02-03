<?php

namespace Tests\Feature\Controllers\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticateControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 測試登入頁面
     *
     * @return void
     */
    public function testItCanShowLoginPage()
    {
        $this->get('/login')->assertViewIs('auth.login');
    }

    /**
     * 測試登入
     *
     * @return void
     */
    public function testItCanLogin()
    {
        $user = factory(User::class)->create();
        $credential = [
            'email' => $user->email,
            'password' => 'password',
        ];

        $this->post('/login', $credential);

        $this->assertAuthenticatedAs($user);
    }
}
