<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>F1 Setup Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">

    @stack('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .slide-in {
            animation: slide-in 2s forwards;
        }

        .slide-out {
            animation: slide-out 2s forwards;
        }

        @keyframes slide-in {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes slide-out {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(100%);
            }
        }
    </style>
</head>
<body class="bg-gray-900 min-h-screen text-white relative">
<nav class="absolute top-0 left-0 right-0 p-4 flex justify-end items-center z-50">
    <button id="openNavPopup" class="px-4 py-2 text-white hover:text-red-500 transition z-50">Menu</button>
</nav>

<!-- Navigation Popup -->
<div id="navPopup" class="fixed inset-0 bg-black bg-opacity-85 flex items-center justify-center hidden z-40">
    <div class="text-white rounded-lg p-8 max-w-lg w-full text-center font-orbitron">
        <ul>
            <li class="mb-2"><a href="{{route('welcome')}}" class="text-2xl md:text-3xl hover:underline">Home</a></li>
            <li class="mb-2"><a href="{{route('setups.index')}}" class="text-2xl md:text-3xl hover:underline">View Saved Setups</a></li>
            <li class="mb-2"><a href="{{route('welcome')}}" class="text-2xl md:text-3xl hover:underline">Add New Setup</a></li>
            <li class="mb-2"><a href="{{route('welcome')}}" class="text-2xl md:text-3xl hover:underline">Performance Reports</a></li>
        </ul>
    </div>
</div>

<div class="relative min-h-screen flex flex-col items-center justify-center text-center px-4">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center opacity-50 z-0 mix-blend-luminosity"
         style="background-image: url('{{ asset('images/track.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    {{$slot}}
</div>

<script>
    document.getElementById('openNavPopup').addEventListener('click', function () {
        const navPopup = document.getElementById('navPopup');
        const openNavButton = document.getElementById('openNavPopup');

        navPopup.classList.toggle('hidden');
        navPopup.classList.toggle('visible');

        if (navPopup.classList.contains('visible')) {
            openNavButton.textContent = 'X';
        } else {
            openNavButton.textContent = 'Menu';
        }
    });

    document.addEventListener('click', function (event) {
        const navPopup = document.getElementById('navPopup');
        const openNavButton = document.getElementById('openNavPopup');

        if (!navPopup.contains(event.target) && !openNavButton.contains(event.target)) {
            navPopup.classList.add('hidden');
            navPopup.classList.remove('visible');
            openNavButton.textContent = 'Menu';
        }
    });
</script>

</body>
</html>
