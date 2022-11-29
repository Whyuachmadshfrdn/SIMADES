<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;

class iterasi2Test extends TestCase
{
    
    use WithFaker;

    public function testCreatestaff()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)
        ->post(route('add-staff'), [
            'nip' => '1234567890123456',
            'nama_staff' => $this->faker->name(),
            'tmpt_lahir' => 'girimukti',
            'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'jenis_kelamin' => 'Laki-laki',
            'jabatan' => 'kaur umum',
            'no_telp' => '083141124872',
            'email' => 'email@gmail.com',
            'foto' => UploadedFile::fake()->create('test4.jpg', 1024),
        ]);
    $response->assertStatus(302); 
    }

    public function testLihatstaff()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('staff-detail', 4));
            $response->assertStatus(200);
    }

    public function testEditstaff()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
            ->post(route('update-staff', 4), [
                'nip' => '1234567890123456',
                'nama_staff' => $this->faker->name(),
                'tmpt_lahir' => 'girimukti',
                'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                'jenis_kelamin' => 'Laki-laki',
                'jabatan' => 'kaur umum',
                'no_telp' => '083141124872',
                'email' => 'email@gmail.com',
                ]); 
            $response->assertStatus(302);
    }

    public function testDeletestaff()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)->get(route('staffdelete', 4));
        $response->assertStatus(302);
    }

    public function testLihatsuratkeluar()
    {
        $this->withoutExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('surat-keluar'));
            $response->assertStatus(200);
    }

    public function testLihatdatakeluarga()
    {
        $this->withoutExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('keluarga'));
            $response->assertStatus(200);
    }
}
