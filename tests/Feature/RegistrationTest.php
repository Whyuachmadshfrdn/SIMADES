<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /** @test */

    public function registration_page_can_be_rendered()
    {
        $this->withoutExceptionHandling();

        $respon = $this->get('register');
        $respon ->assertStatus(200);
    }

     /** @test */

     public function anyone_can_registered()
     {

        $user = User::factory()->make();
        $respon = $this->post('register', $user->toArray());

        $this ->assertAuthenticated();
        $respon = assertRedirect('/home');

     }
}
 