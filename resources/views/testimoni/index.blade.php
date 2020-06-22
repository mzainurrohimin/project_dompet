@extends('layouts.admin')
@section('title', 'Halaman Testimoni')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Testimoni
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Input Testimoni</a> --}}
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Testimoni</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->testimoni) }}" width="50px" height="50px" alt="" />
                                </td>
                                {{-- <td>{{ $l->logo }}</td> --}}
                                <td>
                                    <a href="{{ route('testimoni.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    {{-- <form class="d-inline" action="{{ route('testimoni.destroy', $item->id) }}" method="post">
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