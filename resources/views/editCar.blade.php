@extends('layouts.main')

@section('title', "Edit Car")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('car.edit', $car->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="plate" class="col-sm-3 col-form-label">Plate</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('plate') @enderror" id="plate" name="plate" value="{{ $car->plate }}">
                                @error('plate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('brand') @enderror" id="brand" name="brand" value="{{ $car->brand }}">
                                @error('brand')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="model" class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control @error('model') @enderror" id="model" name="model" value="{{ $car->model }}">
                                @error('model')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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