@extends('layouts.main')

@section('title', "New Car")

@section('content')
        <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('car.add') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="plate" class="col-sm-3 col-form-label">Plate</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('plate') @enderror" id="plate" name="plate">
                                @error('plate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('brand') @enderror" id="brand" name="brand">
                                @error('brand')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="model" class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('model') @enderror" id="model" name="model">
                                @error('model')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="model" class="col-sm-3 col-form-label">User</label>
                                <div class="col-sm-8">
                                <select name="user_id" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"> {{ $user->name  }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Add Car</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection