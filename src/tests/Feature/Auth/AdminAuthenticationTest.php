<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function 管理者ログイン画面が正しく表示できる()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
        $response->assertSee('管理者ログイン');
    }
}
