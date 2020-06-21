@extends('layouts.admin')
@section('title', 'Halaman Detail Harga')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>UPDATE DETAIL HARGA</strong>
                </div>
                <div class="card-body">
                    <a href="/harga" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('harga.update', $items->id) }}">
 
                        @csrf
                        @method('PUT')
 
                        <div class="from-group">
                            <label for="harga_normal" class="form-control-label">Harga Normal</label>
                            <input type="text" name="harga_normal" value="{{ old('harga_normal') }}" class="form-control @error('harga_normal') is-invalid @enderror"/>
                            @error('harga_normal') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="harga_diskon" class="form-control-label">Harga Diskon</label>
                            <input type="text" name="harga_diskon" value="{{ old('harga_diskon') }}" class="form-control @error('harga_diskon') is-invalid @enderror"/>
                            @error('harga_diskon') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="from-group">
                            <label for="diskon" class="form-control-label">Diskon</label>
                            <input type="text" name="diskon" value="{{ old('diskon') }}" class="form-control @error('diskon') is-invalid @enderror"/>
                            @error('diskon') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        </div>
                        <div class="from-group">
                            <label for="potongan_ongkir" class="form-control-label">Potongan Ongkir</label>
                            <input type="text" name="potongan_ongkir" value="{{ old('potongan_ongkir') }}" class="form-control @error('potongan_ongkir') is-invalid @enderror"/>
                            @error('potongan_ongkir') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection