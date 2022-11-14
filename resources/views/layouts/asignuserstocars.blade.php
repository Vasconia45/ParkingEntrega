@extends('layouts.main')

@section('title', "Asign User To Car")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('asigncartouser') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between">
                                <div class="col-5">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="user" id="user">
                                        @foreach($users as $user)
                                            <option value="{{ $user->name }}"> {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-5">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="car" id="car">
                                        @foreach($cars as $car)
                                            <option value="{{ $car->plate }}">{{ $car->plate }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Asign</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection