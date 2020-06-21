@extends('layouts.admin')
@section('title', 'Halaman Logo')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH Logo</strong>
                </div>
                <div class="card-body">
                    <a href="/logo" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('logo.store') }}" enctype="multipart/form-data">
 
                        @csrf
 
                        <div class="from-group">
                            <label for="logo" class="form-control-label">Logo</label>
                            <input type="file" name="logo" value="{{ old('logo') }}" accept="image/*" required class="form-control @error('logo') is-invalid @enderror"/>
                            @error('logo') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection