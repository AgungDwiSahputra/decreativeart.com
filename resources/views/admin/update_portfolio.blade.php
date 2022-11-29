@extends('admin.template.app')
@section('title', $NamaWebsite )
@section('author', $author )
    
@section('content')
    <!-- Row -->
    <div class="row row-sm my-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-light">Update Portfolio</h3>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                            <span class="alert-inner--text"><strong>Failed!</strong> {{ $error }}</span>
                        </div>
                        
                        @endforeach
                    @endif
                    <form class="form-horizontal" method="POST" action="/depanel/portfolio/{{ $portfolio->id }}/update" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class=" row mb-4">
                            <label for="inputName" class="col-md-3 form-label">Nama</label>
                            <div class="col-md-9">
                                <input type="text" name="nama" class="form-control" id="inputName" placeholder="Masukan Nama" value="{{ $portfolio->nama }}">
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="keterangan" class="col-md-3 form-label">Keterangan</label>
                            <div class="col-md-9">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan Keterangan" value="{{ $portfolio->keterangan }}">
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="jenis" class="col-md-3 form-label">Jenis</label>
                            <div class="col-md-9">
                                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukan Jenis" value="{{ $portfolio->jenis }}">
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="kategori" class="col-md-3 form-label">Kategori</label>
                            <div class="col-md-9">
                                <select name="kategori" id="kategori" class="form-control form-select select2" data-bs-placeholder="Pilih Kategori">
                                    <option label="Pilih Kategori" value="logo">Logo</option>
                                    <option value="logo">Logo</option>
                                    <option value="font">Desain Font</option>
                                    <option value="packaging">Packaging</option>
                                    <option value="video-editing">Video Editing</option>
                                    <option value="web-design">Web Design</option>
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="file" class="col-md-3 form-label">File Gambar</label>
                            <div class="col-md-9">
                                <input type="file" name="file" class="form-control" id="file" placeholder="File Gambar">
                                <span style="font-size: 0.7em;">Foto : {{ $portfolio->file }}</span><br>
                                <img src="{{ asset('storage/portfolio/'.$portfolio->file) }}" alt="FOto sebelumnya" class="w-20 img-thumbnail">
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="link" class="col-md-3 form-label">Link Video</label>
                            <div class="col-md-9">
                                <input type="text" name="link" class="form-control" id="link" placeholder="Masukan Link Video" value="{{ $portfolio->link }}">
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-danger" href="{{ route('AdminPortfolio') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection