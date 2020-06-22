@extends('layouts.admin')
@section('title', 'Halaman logo')
@section('content')
    <div class="container">
        <div class="card mt-5">
        <div class="card-header text-center">
            Logo
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('logo.create') }}" class="btn btn-primary">Input Logo</a> --}}
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->logo) }}" width="50px" height="50px" alt="" />
                                </td>
                                {{-- <td>{{ $l->logo }}</td> --}}
                                <td>
                                    <a href="{{ route('logo.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                    {{-- <form class="d-inline" action="{{ route('logo.destroy', $item->id) }}" method="post">
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