@extends('admin.index')


@section('container-admin')

<div class="d-flex justify-content-center mt-3">
    <h1>STUDENTS</h1>
</div>


<div class="container col-md-8">
    <div class="d-flex justify-content-end">
        <a href="/admin/add" class="btn btn-success"><i class="bi bi-plus"></i> Add Student</a>
    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Student</th>
                <th scope="col">Class</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>

                <td>
                    <div class="d-flex justify-content-center">
                        <a href="/admin/edit/{{$student->slug}}" class="btn btn-success me-2"><span class="bi bi-plus"></span></a>
                        <a href="/admin/student-profile/{{$student->slug}}" class="btn btn-primary me-2"><span class="bi-search"></a>
                        <a href="/admin/edit/{{$student->slug}}" class="btn btn-warning me-2"><span class="bi bi-pencil"></span></a>
                        <form action="/admin/delete/{{$student->slug}}" method="post">
                            <button type="submit" class="btn btn-danger"><span class="bi bi-backspace"></span></button>
                        </form>
                        
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection