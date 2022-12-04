<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class iterasi5Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * 
     */

    use WithFaker;

    public function testTambahuser()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->post(route('add-manajemen'), [
                    'name' => $this->faker->name(),
                    'email' => '1234567890123456',
                    'role' => 'staff',
                    'password' => 'password',
                ]);
            $response->assertStatus(302); 
    }

}
