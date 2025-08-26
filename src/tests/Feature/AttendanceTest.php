<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    /**
     * Test for show index.blade.php
     * @test
     * @return void
     */
    public function show_index()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('index')
            ->assertSee('Index page');
    }
}
