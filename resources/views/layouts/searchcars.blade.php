@extends('layouts.main')

@section('title', "Search Car")

@section('content')
    <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('car.search') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="plate" class="col-sm-3 col-form-label">Plate</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="plate" name="plate">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Search</button>
                            </div>
                        </form>
                        @if (isset($plates))
                            <div class="mt-2 d-flex justify-content-center">
                                <table class="table table-striped mt-3">
                                    <tbody>
                                        @foreach($plates as $plate)
                                        <tr>
                                            <th>{{ $plate->id }}</th>
                                            <th>{{ $plate->plate }}</th>
                                            <th>{{ $plate->brand }}</th>
                                            <th>{{ $plate->model }}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection