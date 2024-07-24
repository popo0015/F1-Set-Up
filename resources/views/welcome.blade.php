<x-navigation>
    <!-- Main Content -->
    <div class="relative z-10">
        <h1 class="text-5xl font-bold mb-6 font-orbitron">F1 Car Setup Database</h1>
        <p class="text-lg mb-8 font-racing">Find and share the best setups for your F1 car.</p>
    </div>

    <!-- Car and Speed Images -->
    <div class="relative w-full max-w-sm mx-auto mb-8 md:max-w-md lg:max-w-lg z-10">
        <div class="relative w-full h-auto">
            {{--            <img src="{{ asset('images/speed.png') }}" alt="speed lines under the car"--}}
            {{--                 class="absolute inset-0 w-full h-auto object-cover">--}}
            <img id="car-image" src="{{ asset('images/redbull_top.png') }}" alt="RedBull 2023 car top view"
                 class="relative w-full h-auto">
        </div>
    </div>

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
