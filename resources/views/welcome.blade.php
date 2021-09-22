<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roman Numeral Conversion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
    <nav class="navbar navbar-dark bg-dark" style="justify-content: center;">
        <h1 class="text-danger">Roman Numeral Converter</h1>
    </nav>
     <div class="container">
            <form method="post">
                @csrf
                <br>
                <br>
                <div class="g-3 row">
                    <label for="numberToConvert" class="col-sm-2 col-form-label">Number to convert:</label>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="number-to-convert" id="numberToConvert">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Convert</button>
                    </div>
                </div>
            </form>

            @if(isset($result))
                <br>
                <div>
                    <p><b>Result: </b>{{$result}}</p>
                </div>
            @endif
        </div>
    </body>
</html>
