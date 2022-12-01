<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;



class iterasi4Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithFaker;
    // public function testDeletekategori()
    // {
    //     $user = User::where('role','admin')->first();
    //     $response = $this->actingAs($user)->get(route('kategoridelete', 1));
    //     $response->assertStatus(302);
    // }


    public function testLihatkategori()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('staff-detail', 4));
            $response->assertStatus(200);
    }

    public function testCreatePengajuan()
    {
        $user = User::where('role','warga')->first();
            $response = $this->actingAs($user)
                ->post(route('add-surat'), [
                    'kategori_id ' => '1',
                    'nama_pasangan' => '12',
                    'pengantar_rt' => UploadedFile::fake()->create('test4.jpg', 1024),
                ]);
            $response->assertStatus(302);
    }
}
