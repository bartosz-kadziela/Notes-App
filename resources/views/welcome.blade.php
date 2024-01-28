<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notes App</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-blue-200">
        @for ($loop = 1; $loop < 5; $loop++)
            <div class="bg-white w-52 min-h-48 rounded-lg p-4 m-4"> 
                <h2 class="text-xl font-semibold"> 
                    Note {{ $loop }}
                </h2>
                <p>
                    Note body
                </p>
            </div>
        @endfor
    </body>
</html>
