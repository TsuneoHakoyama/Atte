<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function 管理者ログイン画面が正しく表示できる()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('管理者ログイン');
    }

    /**
     * @test
     * @return void
     */
    public function 管理者が正しくログインできる()
    {
        $admin = Admin::factory()->create([]);

        $response = $this->post('/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('admins');
        $response->assertRedirect(RouteServiceProvider::ADMIN_HOME);
    }

    /**
     * @test
     * @return void
     */
    public function 未認証の管理者がログインしようとすると失敗しログイン画面にリダイレクトされる()
    {
        $response = $this->get('/admin/attendance');

        $response->assertRedirect('/admin/login');
    }
}
