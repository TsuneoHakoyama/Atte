<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MultiloginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function ユーザーはusersガードを通して認証され管理者はゲスト状態である()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticatedAs($user, 'users');
        $response->assertRedirect('/');

        $this->assertGuest('admins');
        $this->get('/admin/attendance')->assertRedirect('/admin/login');
    }

    /**
     * @test
     * @return void
     */
    public function 管理者はadminsガードを通して認証されユーザーはゲスト状態である()
    {
        $admin = Admin::factory()->create();

        $response = $this->post('/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticatedAs($admin, 'admins');
        $response->assertRedirect('/admin/attendance');

        $this->assertGuest('users');
        $this->get('/')->assertRedirect('/login');
    }

    /**
     * @test
     * @return void
     */
    public function ユーザーと管理者は同時に認証される()
    {
        $user = User::factory()->create();
        $admin = Admin::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->post('/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticatedAs($admin, 'admins');
        $this->get('/admin/attendance')->assertOk();

        $this->assertAuthenticatedAs($user, 'users');
        $this->get('/')->assertOk();
    }
}
