<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Kategori;
use App\Models\Pengajuan;
use App\Models\IsianKategori;

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

    public function testDeletekategori()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)->get(route('kategoridelete', 6));
        $response->assertStatus(302);
    }

    public function testLihatkategori()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('detail-kategori', 3));
            $response->assertStatus(302);
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

    public function testKonfirmasipengajuan()
    {
        $user = User::where('role','staff')->first();
        $response = $this->actingAs($user)
        ->get(route('staff-verifikasi', 13));
        $response->assertStatus(200);
    }

    public function testDeletepengajuan()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)->get(route('suratdelete', 14));
        $response->assertStatus(302);
    }

    public function testLihatpengajuan()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('surat-detail', 12));
            $response->assertStatus(200);
    }
}
