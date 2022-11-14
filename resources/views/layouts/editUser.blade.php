@extends('layouts.main')

@section('title', "Edit User")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                            <form action="{{ route('user.edit', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="dni" class="col-sm-3 col-form-label">DNI</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="dni" name="dni" value="{{ $user->dni }}">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Edit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
@endsection