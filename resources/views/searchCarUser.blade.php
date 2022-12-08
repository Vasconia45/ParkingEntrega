@extends('layouts.main')

@section('title', "Search for Users car")

@section('content')
<div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="{{ route('searchingcarUser') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="plate" class="col-sm-3 col-form-label">User:</label>
                                <div class="col-sm-8">
                                    <select name="user_id" class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"> {{ $user->name  }}</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Search</button>
                            </div>
                        </form>
                         <div>
                            <table class="table table-striped mt-3">
                                <tbody>
                                    <p>{{ $user->cars->id }}</p>
                                    @endforeach
                                    <!--@each('partials.usercars',$cars, 'car', 'partials.empty-cars')-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection