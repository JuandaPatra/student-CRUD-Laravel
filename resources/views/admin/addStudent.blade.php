@extends('admin.index')


@section('container-admin')

<div class="d-flex justify-content-center mt-2">
    <h1>ADD STUDENT</h1>
</div>

<div class="container">
    <form action="/admin/add" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="studentName">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gender</label>
            
        </div>

        <!-- <label for="exampleFormControlInput1" class="form-label">Gender</label> -->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="0">
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Profile Picture</label>
            <input class="form-control" type="file" id="formFile" name="profilePicture">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Class</label>
            <select class="form-select" aria-label="Default select example" name="class">
                <option selected>Select Grade</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-success" type="submit">Add Student</button>
        </div>
    </form>
</div>


@endsection