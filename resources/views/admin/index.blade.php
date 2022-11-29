@extends('admin.template.app')
@section('title', $NamaWebsite )
@section('author', $author )
    
@section('content')
    <!-- Row -->
    <div class="row row-sm my-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-light">Dashboard</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h1>Hello Selamat Datang, {{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection