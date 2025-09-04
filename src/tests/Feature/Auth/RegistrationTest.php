<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function 会員登録画面が表示される()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('会員登録');
    }

    /**
     * @test
     * @return void
     */
    public function 新規ユーザー登録が成功しホーム画面にアクセスできる()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $data = User::where('name', 'Test User')->first();
        $this->assertNotNull($data);
        $this->assertEquals($data->email, 'test@example.com');

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
