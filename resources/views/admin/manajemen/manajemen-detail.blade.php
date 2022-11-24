@extends('layouts.master')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail User</h3>
        </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                <div>
                    <p class="h6"><b>Nama User</b></p>
                    <p class="h5">{{$users->name}}</p> 
                </div>
                <div>
                    <p class="h6"><b>Email</b></p>
                    <p class="h5">{{$users->email}}</p> 
                </div>
                <div>
                    <p class="h6"><b>Role</b></p>
                    <p class="h5">{{$users->role}}</p> 
                </div>
                <div>
                    <p class="h6"><b>password</b></p>
                    <p class="h5">{{$users->password}}</p> 
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection   