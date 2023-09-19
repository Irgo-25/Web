<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Web</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
    {{-- Header in Partials Folder --}}
    @include('partials.header')
    {{-- End Header --}}

    {{-- Sidebar in partials Folder --}}
    @include('partials.sidebar')
    {{-- End Sidebar --}}

    {{-- Content In View --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- End Content --}}
</body>

</html>