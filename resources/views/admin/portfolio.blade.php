@extends('admin.template.app')
@section('title', $NamaWebsite )
@section('author', $author )
    
@section('content')
    <!-- Row -->
    <div class="row row-sm my-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-light">List Portfolio</h3>
                    <a href="{{ route('CreatePortfolio') }}" class="ms-auto"><button class="btn btn-light">Create Portfolio</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-check"></i></span>
                            <span class="alert-inner--text"><strong>Berhasil!</strong> {{ Session::get('success'); }}</span>
                        </div>
                        @endif
                        @if (Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                            <span class="alert-inner--text"><strong>Berhasil!</strong> {{ Session::get('failed'); }}</span>
                        </div>
                        @endif
                        <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-25p border-bottom-0">Aksi</th>
                                    <th class="wd-15p border-bottom-0">Nama</th>
                                    <th class="wd-15p border-bottom-0">Keterangan</th>
                                    <th class="wd-15p border-bottom-0">Jenis</th>
                                    <th class="wd-20p border-bottom-0">Kategori</th>
                                    <th class="wd-15p border-bottom-0">Gambar</th>
                                    <th class="wd-10p border-bottom-0">Link Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $data)
                                <tr>
                                    <td>
                                        <a href="{{ url('/depanel/portfolio/'.$data->id.'/update') }}"><i class="fe fe-edit text-warning"></i></a> | 
                                        <form action="{{ url('/depanel/portfolio/'.$data->id.'/destroy') }}" method="POST" id="delete" style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <a href="javascript:void(0)" onclick="document.getElementById('delete').submit()"><i class="fe fe-trash text-danger"></i></a>
                                        </form>
                                    </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>{{ $data->jenis }}</td>
                                    <td>{{ $data->kategori }}</td>
                                    <td>{{ $data->file }}</td>
                                    <td>
                                    @if ($data->link == null)
                                        {{ "-" }}
                                    @else
                                        {{ $data->link }}
                                    @endif    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection