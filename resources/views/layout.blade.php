<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/bootstrap.min.css')
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="http://[::1]:5173/resources/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>

<body style="background-color:#E3F2FD">
    <div class="container my-5">
        <div class="shadow-4 rounded-5 overflow-hidden">
            <!--Message d'ajouter de client-->

            @if (Session::has('status Edit'))
                <div class="alert alert-success alert-dismissible" class="alert">
                    <a href="{{ url()->previous() }}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('status Edit') }}

                </div>
            @endif

            @if (Session::has('status Delete'))
                <div class="alert alert-danger alert-dismissible" class="alert">
                    <a href="{{ route('client.index') }}" class="close" data-dismiss="alert"
                        aria-label="close">&times;</a>
                    {{ Session::get('status Delete') }}

                </div>
            @endif

            @yield('container')
        </div>
        @yield('Ajout')
    </div>

    <script>
        setTimeout(function() {
            // Select the alert element
            var alert = document.querySelector('.alert');
            // Remove the alert element from the page
            alert.parentNode.removeChild(alert);
        }, 3000); // 3 seconds
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>

</html>
