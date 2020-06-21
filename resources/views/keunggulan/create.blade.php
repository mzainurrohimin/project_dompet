@extends('layouts.admin')
@section('title', 'Halaman Varian')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH KEUNGGULAN</strong>
                </div>
                <div class="card-body">
                    <a href="/keunggulan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('keunggulan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror"/>
                            @error('title') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="gambar1" class="form-control-label">Gambar1</label>
                            <input type="file" name="gambar1" value="{{ old('gambar1') }}" accept="gambar1/*" required class="form-control @error('gambar1') is-invalid @enderror"/>
                            @error('gambar1') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="gambar2" class="form-control-label">Gambar2</label>
                            <input type="file" name="gambar2" value="{{ old('gambar2') }}" accept="gambar2/*" required class="form-control @error('gambar2') is-invalid @enderror"/>
                            @error('gambar2') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection