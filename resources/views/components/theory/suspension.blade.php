<x-navigation>
    <!-- Main Content -->
    <main class="relative z-10 p-4 text-center">
        <h1 class="text-5xl font-bold mb-6 font-orbitron text-white">F1 Car Suspension Setup</h1>
        <p class="text-lg mb-8 font-racing text-gray-300">Learn and adjust the main suspension elements for optimal performance.</p>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10">
            <!-- Sidebar for Suspension Elements -->
            <aside class="col-span-1 lg:col-span-1 bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold mb-4 text-red-500">Suspension Elements</h2>
                <ul class="space-y-4 text-left">
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#camber">
                        <h3 class="text-xl font-bold text-white">Camber</h3>
                        <p class="text-sm text-gray-200">Angle of the wheels relative to the vertical axis.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#caster">
                        <h3 class="text-xl font-bold text-white">Caster</h3>
                        <p class="text-sm text-gray-200">Angle of the steering pivot.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#toe">
                        <h3 class="text-xl font-bold text-white">Toe</h3>
                        <p class="text-sm text-gray-200">Angle of the wheels relative to the centerline of the car.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#front-height">
                        <h3 class="text-xl font-bold text-white">Front Height</h3>
                        <p class="text-sm text-gray-200">Height affects aerodynamics and handling balance.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#rear-height">
                        <h3 class="text-xl font-bold text-white">Rear Height</h3>
                        <p class="text-sm text-gray-200">Height affects aerodynamics and handling balance.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#rake">
                        <h3 class="text-xl font-bold text-white">Rake</h3>
                        <p class="text-sm text-gray-200">Difference in height between the front and rear.</p>
                    </li>
                    <li class="p-4 bg-gray-700 rounded-lg hover:bg-red-500 transition duration-300 cursor-pointer" data-target="#damper">
                        <h3 class="text-xl font-bold text-white">Damper</h3>
                        <p class="text-sm text-gray-200">Controls the car's oscillations.</p>
                    </li>
                </ul>
            </aside>

            <!-- Detailed Information Section -->
            <section class="col-span-1 lg:col-span-2">
                <article id="camber" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Camber</h3>
                    <p class="text-gray-400 mb-4">Camber is the angle of the wheels relative to the vertical axis. It affects cornering performance and tire wear.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Camber" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: -3° to 0°</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Camber vs Tire Wear</h4>
                        <img src="{{ asset('images/camber_tire_wear_graph.png') }}" alt="Camber vs Tire Wear" class="w-full h-auto">
                    </div>
                </article>
                <article id="caster" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Caster</h3>
                    <p class="text-gray-400 mb-4">Caster is the angle of the steering pivot. It affects the car's stability and steering effort.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Caster" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: 5° to 8°</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Caster vs Stability</h4>
                        <img src="{{ asset('images/caster_stability_graph.png') }}" alt="Caster vs Stability" class="w-full h-auto">
                    </div>
                </article>
                <article id="toe" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Toe</h3>
                    <p class="text-gray-400 mb-4">Toe is the angle of the wheels relative to the centerline of the car. It affects handling and tire wear.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Toe" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: -0.5° to 0.5°</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Toe vs Handling</h4>
                        <img src="{{ asset('images/toe_handling_graph.png') }}" alt="Toe vs Handling" class="w-full h-auto">
                    </div>
                </article>
                <article id="front-height" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Front Height</h3>
                    <p class="text-gray-400 mb-4">Front height affects the car's aerodynamics and handling balance.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Front Height" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: 50 mm to 70 mm</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Front Height vs Aerodynamics</h4>
                        <img src="{{ asset('images/height_aerodynamics_graph.png') }}" alt="Front Height vs Aerodynamics" class="w-full h-auto">
                    </div>
                </article>
                <article id="rear-height" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Rear Height</h3>
                    <p class="text-gray-400 mb-4">Rear height affects the car's aerodynamics and handling balance.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Rear Height" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: 55 mm to 75 mm</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Rear Height vs Aerodynamics</h4>
                        <img src="{{ asset('images/height_aerodynamics_graph.png') }}" alt="Rear Height vs Aerodynamics" class="w-full h-auto">
                    </div>
                </article>
                <article id="rake" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Rake</h3>
                    <p class="text-gray-400 mb-4">Rake is the difference in height between the front and rear of the car. It affects aerodynamics and handling.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Rake" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: 5 mm to 15 mm</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Rake vs Handling</h4>
                        <img src="{{ asset('images/rake_handling_graph.png') }}" alt="Rake vs Handling" class="w-full h-auto">
                    </div>
                </article>
                <article id="damper" class="bg-gray-800 bg-opacity-20 backdrop-filter backdrop-blur-lg p-6 rounded-lg shadow-lg hidden">
                    <h3 class="text-2xl font-bold mb-4 text-red-500">Damper</h3>
                    <p class="text-gray-400 mb-4">Dampers control the car's oscillations and affect handling and ride comfort.</p>
                    <img src="https://img.icons8.com/ios/100/FFFFFF/airodynamic.png" alt="Damper" class="mx-auto mb-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <p class="text-gray-300 text-sm">Optimal Range: 10 to 20 clicks</p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg font-bold text-white">Graph: Damper vs Comfort</h4>
                        <img src="{{ asset('images/damper_comfort_graph.png') }}" alt="Damper vs Comfort" class="w-full h-auto">
                    </div>
                </article>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const elements = document.querySelectorAll('aside ul li');
            const articles = document.querySelectorAll('section article');

            elements.forEach(element => {
                element.addEventListener('click', function () {
                    const targetId = this.getAttribute('data-target');
                    articles.forEach(article => {
                        if (article.id === targetId.substring(1)) {
                            article.classList.remove('hidden');
                            article.scrollIntoView({ behavior: 'smooth' });
                        } else {
                            article.classList.add('hidden');
                        }
                    });
                });
            });
        });
    </script>
</x-navigation>
