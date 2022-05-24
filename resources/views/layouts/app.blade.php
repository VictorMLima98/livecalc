<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livecalc</title>

    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">

    @livewireStyles()
</head>
<body class="bg-apple-black">

    <livewire:calculator />

    @livewireScripts()
    <script type="text/javascript" src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
