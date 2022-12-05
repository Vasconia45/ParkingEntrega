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
    <div>
        @if(session('error_message'))
        <div class="alert alert-danger">
            {{ session('error_message') }}
        </div>
        @endif
    </div>
    <div>
        @if(session('successful_message'))
        <div class="alert alert-success">
            {{ session('successful_message') }}
        </div>
        @endif
    </div>
    <div class="container">
        <div class="text-center">
            <h1>@yield('title')</h1>
        </div>
        <!--DIV principal-->
        <div class="row">
            <!-- Navbar -->
            <div class="d-flex justify-content-center">
                <nav class="navbar navbar-light">
                <form>
                    <button type="submit" formaction="{{ route('listcar') }}" class="btn btn-success">List Cars</button>
                    <button type="submit" formaction="{{ route('addcar') }}" class="btn btn-success">New Car</button>
                    <button type="submit" formaction="{{ route('showListUsers') }}" class="btn btn-success">New User</button>
                    <button type="submit" formaction="{{ route('searchcar') }}" class="btn btn-success">Search Car</button>
                    <button type="submit" formaction="{{ route('searchcarUser') }}" class="btn btn-success">Search Car from User</button>
                </form>
                <!-- Navbar content -->
                </nav>
            </div>
            @section('content')

            @show
        </div>
    </div>
</html>