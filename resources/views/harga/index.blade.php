@extends('layouts.admin')
@section('title', 'Halaman Detail Harga')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <div class="card mt-5">
        <div class="card-header text-center">
            Detail Harga
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('harga.create') }}" class="btn btn-primary">Input Detail Harga</a> --}}
                    <br/>
                    <br/>
                    <table class="table-responsive table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Harga Normal</th>
                                <th>Harga Diskon</th>
                                <th>Diskon</th>
                                <th>Potongan Ongkir</th>
                                <th>Link Pesan Sekarang</th>
                                <th>Link Pesan Transfer</th>
                                <th>Link Pesan COD</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->harga_normal }}</td>
                                <td>{{ $item->harga_diskon }}</td>
                                <td>{{ $item->diskon }}</td>
                                <td>{{ $item->potongan_ongkir }}</td>
                                <td>{{ $item->pesan_sekarang }}</td>
                                <td>{{ $item->pesan_tf }}</td>
                                <td>{{ $item->pesan_cod }}</td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('harga.edit', $item->id) }}" class="btn btn-warning mt-3"><i class="fa fa-pencil-alt"></i></a>
                                    {{-- <form class="d-inline" action="{{ route('harga.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form> --}}
                    @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection