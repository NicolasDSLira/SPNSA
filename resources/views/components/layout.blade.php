<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}} " type="image/x-icon">
    <title>SPNSA</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
    <x-footer></x-footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</html>