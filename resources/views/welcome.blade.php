<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Roman Numeral Conversion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           <h1>Roman Numeral Converter</h1>

            <form method="post">
                @csrf
                <label>
                    Number to convert
                    <input name="number-to-convert" type="text">
                </label>
                <button type="submit">Convert</button>
            </form>

            @if(isset($result))
                <div>
                    <p><b>Result: </b>{{$result}}</p>
                </div>
            @endif
        </div>
    </body>
</html>
