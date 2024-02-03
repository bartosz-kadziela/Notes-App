@php
    use App\Models\Note;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notes App</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-blue-200">
        <div class="bg-white w-52 min-h-48 rounded-lg p-4 m-4">
            <form method="post" action="/notes">
                @csrf
                <input type="text" id="title" name="title" placeholder="Title" class="w-full text-xl font-semibold"/>
                <textarea id="body" name="body" rows="5" placeholder="Enter your note body here" class="w-full"></textarea>
                <div class="text-right">
                    <button type="submit" class="bg-blue-400 px-4 rounded-lg text-white">Save</button>
                </div>
            </form>
        </div>
        <div>
            @foreach (Note::all() as $note)
                <div class="float-left bg-white w-52 min-h-48 rounded-lg p-4 m-4">
                    <h2 class="text-xl font-semibold">
                        {{ $note->title }}
                    </h2>
                    <p>
                        {{ $note->body }}
                    </p>
                </div>
            @endforeach
        </div>
    </body>
</html>
