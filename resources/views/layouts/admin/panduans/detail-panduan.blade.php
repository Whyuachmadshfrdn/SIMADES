@extends('layouts.master')

@section('content')


<section class="content">
  <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail Panduan</h3>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                  </div>
                  <div class="col-md-10">
                    <br>
                    <div>
                      <p class="h6"><b>Judul</b></p>
                      <p class="h5">{{$panduans->judul}}</p> 
                    </div>
                    <br>
                    <div>
                      <p class="h6"><b>Deskripsi</b></p>
                      <p class="h5">{{$item->deskripsi}}</p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection  