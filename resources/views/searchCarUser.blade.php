@extends('layouts.main')

@section('title', "Search for Users car")

@section('content')
<div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('searchingcarUser') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="user" class="col-sm-3 col-form-label">User:</label>
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
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Search</button>
                            </div>
                        </form>

                        <form action="{{ route('searchingCarDate') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-3">
                                <label for="date" class="col-sm-3 col-form-label">Date:</label>
                                <div class="col-sm-8">
                                    <input name="date" placeholder="Select date" type="date" id="example" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton2" class="col-sm-4 btn btn-outline-dark mt-2">Search</button>
                            </div>
                        </form>

                        @if(isset($x))
                         <div>
                            <table class="table table-striped mt-3">
                                <tbody>
                                    @foreach ($users as $user)
                                        @if($user->id == $x)
                                            @foreach ($user->cars as $car)
                                            <tr>
                                                <th>{{ $car->id }}</th>
                                                <th>{{ $car->plate }}</th>
                                                <th>{{ $car->brand }}</th>
                                                <th>{{ $car->model }}</th>
                                            </tr>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
@endsection