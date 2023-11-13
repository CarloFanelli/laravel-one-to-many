@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row align-items-md-stretch">
            <div class="col-6 m-auto text-center">
                <h5>{{ $type->name }}</h5>
                <small>id: {{ $type->id }} - slug: {{ $type->slug }}</small>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-4 m-auto text-center">
                <a class="btn btn-info text-white" href="{{ route('admin.types.index') }}">
                    <i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </div>
    </div>

    </div>
@endsection
