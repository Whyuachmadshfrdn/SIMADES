<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function login_page()
    {
        $this->get('login');
        $this->assertStatus(200);

    }
}
