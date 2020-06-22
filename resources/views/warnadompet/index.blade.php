@extends('layouts.admin')
@section('title', 'Halaman Varian')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Varian
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('warnadompet.create') }}" class="btn btn-primary">Input Varian</a> --}}
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Varian1</th>
                                <th>Gambar1</th>
                                <th>Varian2</th>
                                <th>Gambar2</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->warna1 }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar1) }}" width="50px" height="50px" alt="" />
                                </td>
                                <td>{{ $item->warna2 }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar2) }}" width="50px" height="50px" alt="" />
                                </td>
                                {{-- <td>{{ $l->logo }}</td> --}}
                                <td>
                                    <a href="{{ route('warnadompet.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    {{-- <form class="d-inline" action="{{ route('warnadompet.destroy', $item->id) }}" method="post">
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