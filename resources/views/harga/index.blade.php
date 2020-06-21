@extends('layouts.admin')
@section('title', 'Halaman Detail Harga')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Detail Harga
        </div>
        <div class="card-body">
            <a href="{{ route('harga.create') }}" class="btn btn-primary">Input Detail Harga</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Harga Normal</th>
                                <th>Harga Diskon</th>
                                <th>Diskon</th>
                                <th>Potongan Ongkir</th>
                                <th>OPSI</th>
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
                                <td>
                                    <a href="{{ route('harga.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    <form class="d-inline" action="{{ route('harga.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection