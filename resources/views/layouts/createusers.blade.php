@extends('layouts.main')

@section('title', "Create User")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <form action="{{ route('user.add') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="dni" class="col-sm-3 col-form-label">DNI</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="dni" name="dni">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Add User</button>
                            </div>
                        </form>

                        <table class="table table-striped mt-3">
                            <tbody>
                                @each('partials.users',$users, 'user', 'partials.empty-cars')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection