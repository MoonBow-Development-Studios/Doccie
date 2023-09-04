@props(['page' => ''])
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Doccie @if(isset($page)) - {{$page}}@endif</title>
</head>
<body class="bg-gradient-to-b from-white to-[#FEE6CC] absolute h-screen w-screen object-cover">
<main class="max-w-lg mx-auto mt-20 bg-white border border-gray-200 p-6 rounded-xl shadow shadow-xl z-100">
    <div class="flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-40 rounded-sm" src="/assets/img/logo_icon_whitebg_selection.png" alt="Doccie">
                <h2 class="mt-6 mb-1 text-center text-4xl font-bold tracking-tight text-gray-800">Doccie {{$page}}</h2>
            </div>
            {{ $slot }}
        </div>
    </div>
    </div>
</main>
</body>
