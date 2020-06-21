@extends('layouts.admin')
@section('title', 'Halaman Data VARIAN')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>UPDATE DATA VARIAN</strong>
                </div>
                <div class="card-body">
                    <a href="/warnadompet" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('warnadompet.update', $items->id) }}" enctype="multipart/form-data">
 
                        @csrf
                        @method('PUT')
 
                        <div class="from-group">
                            <label for="warna1" class="form-control-label">Varian1</label>
                            <input type="text" name="warna1" value="{{ old('warna1') ? old('warna1') : $items->warna1 }}" class="form-control @error('warna1') is-invalid @enderror"/>
                            @error('warna1') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="gambar1" class="form-control-label">Gambar1</label>
                            <input type="file" name="gambar1" value="{{ old('gambar1') }}" accept="image/*" required class="form-control @error('gambar1') is-invalid @enderror"/>
                            @error('gambar1') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>

                        <div class="from-group">
                            <label for="warna2" class="form-control-label">Varian2</label>
                            <input type="text" name="warna2" value="{{ old('warna2') ? old('warna2') : $items->warna2 }}" class="form-control @error('warna2') is-invalid @enderror"/>
                            @error('warna2') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="gambar2" class="form-control-label">Gambar2</label>
                            <input type="file" name="gambar2" value="{{ old('gambar2') }}" accept="image/*" required class="form-control @error('gambar2') is-invalid @enderror"/>
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