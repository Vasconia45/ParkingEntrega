@extends('layouts.main')

@section('title', "Current Cars")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                    <h5 class="card-title">Car</h5>
                        <table class="table table-striped mt-3">
                            <tbody>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @foreach($cars as $car)
                                    <tr>
                                        <th>{{ $car->plate }}</th>
                                        <th>{{ $car->brand }}</th>
                                        <th>{{ $car->model }}</th>
                                        <th><button formaction="{{ route('car.delete', $car->id) }}" type="submit" class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i>Delete</button></th>
                                    </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection