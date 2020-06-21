@extends('layouts.admin')
@section('title', 'Halaman Testimoni')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>UPDATE TESTIMONI</strong>
                </div>
                <div class="card-body">
                    <a href="/testimoni" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="{{ route('testimoni.update', $items->id) }}" enctype="multipart/form-data">
 
                        @csrf
                        @method('PUT')
 
                        <div class="from-group">
                            <label for="testimoni" class="form-control-label">Testimoni</label>
                            <input type="file" name="testimoni" value="{{ old('testimoni') }}" accept="image/*" required class="form-control @error('testimoni') is-invalid @enderror"/>
                            @error('testimoni') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
@endsection