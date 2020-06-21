@extends('layouts.admin')
@section('title', 'Halaman Emboss')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH LOGO EMBOSS</strong>
                </div>
                <div class="card-body">
                    <a href="/emboss" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('emboss.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') ? old('title') : $items->title }}" class="form-control @error('title') is-invalid @enderror"/>
                            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="gambar" class="form-control-label">Gambar</label>
                            <input type="file" name="gambar" value="{{ old('gambar') }}" accept="image/*" required class="form-control @error('gambar') is-invalid @enderror"/>
                            @error('gambar') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection