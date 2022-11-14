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
                                <input type="text" class="form-control" id="plate" name="plate" value="{{ $car->plate }}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="model" class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
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