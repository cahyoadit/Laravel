@extends('layout.templatetable')
@section('page-title')
    Table
@endsection

@section('content-header')
    <a href="/tambahproduk" class="btn btn-primary btn-sm">TAMBAH</a>
@endsection

@section('table')
    <div class="content-wrapper">
        <div class="container">
            <table class="table table-hover table-borderless" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $d)
                        <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->description }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->category->name}} </td>

                            <td>
                                <a href="#"><i class="bi bi-eye-fill"></i></a>
                                <a href="/edit/{{ $d->id }}"><i class="bi bi-pencil-square"></i></a>
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
@endsection
