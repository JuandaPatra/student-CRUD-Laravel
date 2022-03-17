@extends('admin.index')


@section('container-admin')

<div class="d-flex justify-content-center mt-3">
    <h1>STUDENT PROFILE</h1>
</div>

<div class="container">
    <div class="text-center">
        <img src="{{asset('images')}}/{{$studentFull->slug}}/{{$studentFull->profile}}" class="rounded-circle" alt="..." width="300px" height="300px">
    </div>

    <div class="d-flex justify-content-center mt-3 mb-5">
        <div style="width: 300px;">
            <div class="row align-items-start">
                <div class="col-4">
                    NAME
                </div>
                <div class="col-2">
                    :
                </div>
                <div class="col-6">
                    {{$studentFull->name}}
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
                    {{$studentFull->gender == '0' ? 'MALE' : 'FEMALE'}}
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
                    {{$studentFull->class}}
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap mt-2 mb-3">
        @foreach($studentFull->portofolio as $portofolio)
        <div class="card me-2 ms-2" style="width: 18rem;">
            <img src="{{asset('images')}}/{{$studentFull->slug}}/{{$portofolio->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$portofolio->title}}</p>
            </div>
        </div>
        @endforeach

    </div>


</div>


@endsection