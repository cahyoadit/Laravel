@extends('layout.template')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

@section('page-title')
    Kategori
@endsection

@section('content-header')
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <table class="table table-hover table-columns">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Deskripsi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $d)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->description }}</td>
                            <td>

                                <a href="/table"><i class="bi bi-arrow-right-square-fill"></i></a>
                                <a href="#" class="delete" data-id="{{ $d->id }}"><i
                                        class="bi bi-trash2-fill"></i></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/store" method="post">
                    @csrf
                    <div class="modal-body">
                        Nama:
                        <input type="text" name="name" id="" class="form-control">
                        deskripsi:
                        <input type="text" name="description" id="" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
