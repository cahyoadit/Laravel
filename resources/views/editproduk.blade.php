@extends('layout.templatetable')
@section('page-title')
    Edit Produk
@endsection
@section('table')
    <div class="container">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hello</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/editproduk/{{ $data->id }}" method="post">
            @csrf
            <div class="modal-body">
                Nama:
                <input type="text" name="name" id="" class="form-control" value="{{ $data->name }}">
                deskripsi:
                <input type="text" name="description" id="" class="form-control" value="{{ $data->description }}">
                harga:
                <input type="text" name="price" id="" class="form-control" value="{{ $data->price }}">
                kategori:
                <select name="category_id" id="" class="form-control">
                @foreach ( $category as $d )
                    <option value="{{ $d->id}}">{{$d->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit!</button>
            </div>
        </form>
    @endsection
