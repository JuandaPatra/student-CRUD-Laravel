@extends('client.index')


@section('container')

<div class="d-flex justify-content-center">
    <h1>EDIT PORTOFOLIO</h1>
</div>

<div class="container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Portofolio Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Portofolio picture</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-success">Add</button>
    </div>
</div>


@endsection