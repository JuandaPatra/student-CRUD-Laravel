@extends('admin.index')


@section('container-admin')

<div class="d-flex justify-content-center">
    <h1>ADD PORTOFOLIO</h1>
</div>

<div class="container">
    <form action="/admin/portofolio/add/{{$student->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Portofolio Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Portofolio picture</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>
</div>


@endsection