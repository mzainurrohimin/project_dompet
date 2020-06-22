@extends('layouts.admin')
@section('title', 'Halaman Promo')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Promo
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('promo.create') }}" class="btn btn-primary">Input Promo</a> --}}
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Promo</th>
                                <th>Stock</th>
                                <th>Waktu Promo</th>
                                <th>Gambar</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_promo }}</td>
                                <td>{{ $item->stock_promo }}</td>
                                <td>{{ $item->waktu_promo }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar) }}" width="50px" height="50px" alt="Gambar" />
                                </td>
                                <td>
                                    <a href="{{ route('promo.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    {{-- <form class="d-inline" action="{{ route('promo.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection