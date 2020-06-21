@extends('layouts.admin')
@section('title', 'Halaman Keunggulan')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Keunggulan
        </div>
        <div class="card-body">
            <a href="{{ route('keunggulan.create') }}" class="btn btn-primary">Input Keunggulan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Gambar</th>
                                <th>OPSI</>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar1) }}" width="50px" height="50px" alt="" />
                                </td>
                                <td>
                                    <img src="{{ Storage::url($item->gambar2) }}" width="50px" height="50px" alt="" />
                                </td>
                                {{-- <td>{{ $l->logo }}</td> --}}
                                <td>
                                    <a href="{{ route('keunggulan.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    <form class="d-inline" action="{{ route('keunggulan.destroy', $item->id) }}" method="post">
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