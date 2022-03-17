@extends('admin.index')


@section('container-admin')

<div class="d-flex justify-content-center mt-3">
    <h1>STUDENT PROFILE</h1>
</div>

<div class="container">
    <div class="text-center">
        <img src="{{asset('images')}}/{{$student->slug}}/{{$student->profile}}" class="rounded-circle" alt="..." width="300px" height="300px">
    </div>

    <div class="d-flex justify-content-center mt-3">
        <div style="width: 300px;">
            <div class="row align-items-start">
                <div class="col-4">
                    NAME
                </div>
                <div class="col-2">
                     :
                </div>
                <div class="col-6">
                    {{$student->name}}
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-4">
                    GENDER
                </div>
                <div class="col-2">
                     :
                </div>
                <div class="col-6">
                     {{$student->gender == '0' ? 'MALE' : 'FEMALE'}}
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-4">
                    CLASS
                </div>
                <div class="col-2">
                     :
                </div>
                <div class="col-6">
                    {{$student->class}}
                </div>
            </div>
        </div>
    </div>


</div>


@endsection