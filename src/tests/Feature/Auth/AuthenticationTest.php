<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function ログイン画面が表示される()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('ログイン');
    }

    /**
     * @test
     * @return void
     */
    public function 登録ユーザーでログインできホーム画面にアクセスできる()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    /**
     * @test
     * @return void
     */
    public function 認証されていないユーザーがホームにアクセスするとログイン画面にリダイレクトされる()
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');
    }

    /**
     * @test
     * @return void
     */
    public function パスワードが正しくないとログインできない()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
