@extends('layouts.admin')
@section('title', 'Halaman Promo')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH PROMO</strong>
                </div>
                <div class="card-body">
                    <a href="/promo" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('promo.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="nama_promo" class="form-control-label">Promo</label>
                            <input type="text" name="nama_promo" value="{{ old('nama_promo') }}" class="form-control @error('nama_promo') is-invalid @enderror"/>
                            @error('nama_promo') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="stock_promo" class="form-control-label">Stock</label>
                            <input type="text" name="stock_promo" value="{{ old('stock_promo') }}" class="form-control @error('stock_promo') is-invalid @enderror"/>
                            @error('stock_promo') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="waktu_promo" class="form-control-label">Waktu Promo</label>
                            <input type="datetime-local" name="waktu_promo" value="{{ old('waktu_promo') }}" class="form-control @error('waktu_promo') is-invalid @enderror"/>
                            @error('waktu_promo') <div class="text-muted">{{ $message }}</div> @enderror
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