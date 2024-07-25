<x-navigation>
    <!-- Main Content -->
    <div class="relative z-10">
        <h1 class="text-5xl font-bold mb-6 font-orbitron">F1 Car Setup Database</h1>
        <p class="text-lg mb-8 font-racing">Find and share the best setups for your F1 car.</p>
    </div>

    <!-- Car and Speed Images -->
    <div class="relative w-full max-w-sm mx-auto mb-8 md:max-w-md lg:max-w-lg z-10">
        <div class="relative w-full h-auto">
            <img id="car-image" src="{{ asset('images/redbull_top.png') }}" alt="RedBull 2023 car top view"
                 class="relative w-full h-auto">
        </div>
    </div>

    <!--Theory explained buttons-->
    <section class="relative z-10 grid grid-cols-3 md:grid-cols-5 gap-4 md:gap-6 lg:gap-8 mb-10">
        <a href="{{route('aerodynamics')}}" class="flex flex-col items-center bg-gray-800 hover:bg-red-500 p-4 rounded-lg transition duration-300 group">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FFFFFF/airodynamic.png" alt="airodynamic" class="transition duration-300"/>
            <p class="mt-2 text-xs">Aerodynamics</p>
        </a>
        <a href="{{route('suspension')}}" class="flex flex-col items-center bg-gray-800 hover:bg-red-500 p-4 rounded-lg transition duration-300 group">
            <img width="50" height="50" src="https://img.icons8.com/external-icongeek26-outline-icongeek26/50/FFFFFF/external-suspension-equipments-icongeek26-outline-icongeek26-1.png" class="transition duration-300"/>
            <p class="mt-2 text-xs">Suspension</p>
        </a>
        <a href="{{route('engine')}}" class="flex flex-col items-center bg-gray-800 hover:bg-red-500 p-4 rounded-lg transition duration-300 group">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FFFFFF/engine.png" alt="engine" class="transition duration-300"/>
            <p class="mt-2 text-xs">Engine mapping</p>
        </a>
        <a href="{{route('tyres')}}" class="flex flex-col items-center bg-gray-800 hover:bg-red-500 p-4 rounded-lg transition duration-300 group">
            <img width="50" height="50" src="https://img.icons8.com/ios/50/FFFFFF/wheel.png" alt="wheel" class="transition duration-300"/>
            <p class="mt-2 text-xs">Tyres</p>
        </a>
        <a href="{{route('geometry')}}" class="flex flex-col items-center bg-gray-800 hover:bg-red-500 p-4 rounded-lg transition duration-300 group">
            <img width="50" height="50" src="https://img.icons8.com/dotty/50/FFFFFF/graph.png" alt="graph" class="transition duration-300"/>
            <p class="mt-2 text-xs">Other geometry</p>
        </a>
    </section>

    <section class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
        <!-- Card 1: View Saved Setups -->
        <a href="{{route('setups.index')}}">
            <button class="bg-red-500 p-6 rounded-full shadow-lg transform hover:scale-105 transition">
                <h3 class="text-sm font-bold text-white text-center">View Saved Setups</h3>
            </button>
        </a>

        <!-- Card 2: Add New Setup -->
        <a href="{{route('welcome')}}">
            <button class="bg-gray-800 p-6 rounded-full shadow-lg transform hover:scale-105 transition">
                <h3 class="text-sm font-bold text-white text-center">Add New Setup</h3>
            </button>
        </a>

        <!-- Card 3: Performance Reports -->
        <a href="{{route('welcome')}}">
            <button class="bg-white p-6 rounded-full shadow-lg transform hover:scale-105 transition">
                <h3 class="text-sm font-bold text-gray-900 text-center">Performance Reports</h3>
            </button>
        </a>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carImage = document.getElementById('car-image');
            carImage.classList.add('slide-in');

            const links = document.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    carImage.classList.remove('slide-in');
                    carImage.classList.add('slide-out');
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 1000);
                });
            });
        });
    </script>
</x-navigation>
