@extends('layouts.main')

@section('title', "Current Cars")

@section('content')
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                    <h5 class="card-title">Car</h5>
                        <table class="table table-striped mt-3">
                            <tbody>
                                @each('partials.cars',$cars, 'car', 'partials.empty-cars')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection