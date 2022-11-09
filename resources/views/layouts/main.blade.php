<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
    <div class="container">
    <div class="text-center">
        <h2>Parking Manager</h2>
    </div>
    <!--DIV principal-->
    <div class="row">
        <!-- Navbar -->
        <div class="d-flex justify-content-center">
            <nav class="navbar navbar-light">
            <form action="" method="">
                <button type="submit" class="btn btn-success">List Cars</button>
                <button type="submit" class="btn btn-success">New Car</button>
            </form>
            <!-- Navbar content -->
        </nav>
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <!-- Card1-->
                <div class="card col-8">
                    <div class="card-header">
                        New Car
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Car</h5>
                        <div class="d-flex justify-content-center">
                            <form action="{{ route('car.add') }}" method="POST">
                            @csrf
                                <div class="form-group row">
                                    <label for="plate" class="col-sm-3 col-form-label">Plate</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="plate" name="plate">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="brand" class="col-sm-3 col-form-label">Brand</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="brand" name="brand">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label for="model" class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="model" name="model">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <button type="submit" id="boton" class="col-sm-4 btn btn-outline-dark mt-2">Add Car</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            </div>
            <!-- Card2-->
            <div class="mt-3 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-header">
                        Current Cars
                    </div>
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
        </div>
        @yield('content')
    </div>
</html>