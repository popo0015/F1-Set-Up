<x-navigation>
    <!-- Main Content -->
    <div class="relative z-10 p-4">
        <h1 class="text-5xl font-bold mb-6 font-orbitron">F1 Car Setup Previous Information</h1>
        <p class="text-lg mb-8 font-racing">Browse through the saved setups from previous races.</p>
    </div>

    <!-- Column Selection -->
    <div class="relative w-full mb-8 md:max-w-screen-xl lg:max-w-screen-xl z-10">
        <p class="text-lg">You can filter which columns you would like to see visible by clicking on these checkboxes.</p>
        <div class="mb-4">
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" class="form-checkbox column-toggle" checked data-column="id">
                <span class="ml-2">ID</span>
            </label>
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" class="form-checkbox column-toggle" checked data-column="driver-name">
                <span class="ml-2">Driver Name</span>
            </label>
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" class="form-checkbox column-toggle" checked data-column="team-name">
                <span class="ml-2">Team Name</span>
            </label>
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" class="form-checkbox column-toggle" checked data-column="track">
                <span class="ml-2">Track</span>
            </label>
            <label class="inline-flex items-center mr-4">
                <input type="checkbox" class="form-checkbox column-toggle" checked data-column="country">
                <span class="ml-2">Country</span>
            </label>
            <!-- Add more checkboxes for each column -->
        </div>

        <!-- Responsive Table -->
        <div class="max-w-screen-xl overflow-x-scroll">
            <table class="min-w-max bg-gray-800 text-white rounded-lg shadow-lg">
                <thead class="sticky top-0 bg-gray-900 text-gray-300">
                <tr>
                    <th class="p-4 text-left column-id">ID</th>
                    <th class="p-4 text-left column-driver-name">Driver Name</th>
                    <th class="p-4 text-left column-team-name">Team Name</th>
                    <th class="p-4 text-left column-track">Track</th>
                    <th class="p-4 text-left column-country">Country</th>
                    <th class="p-4 text-left column-year">Year</th>
                    <th class="p-4 text-left column-front-angle">Front Angle</th>
                    <th class="p-4 text-left column-rear-angle">Rear Angle</th>
                    <th class="p-4 text-left column-anti-roll">Anti-Roll</th>
                    <th class="p-4 text-left column-tyre-camber">Tyre Camber</th>
                    <th class="p-4 text-left column-toe-out">Toe-Out</th>
                    <th class="p-4 text-left column-tyre-compound">Tyre Compound</th>
                    <th class="p-4 text-left column-tyre-pressure">Tyre Pressure</th>
                    <th class="p-4 text-left column-ride-height">Ride Height</th>
                    <th class="p-4 text-left column-brake-bias">Brake Bias</th>
                    <th class="p-4 text-left column-engine-mapping">Engine Mapping</th>
                    <th class="p-4 text-left column-suspension-geometry">Suspension Geometry</th>
                    <th class="p-4 text-left column-brakes">Brakes</th>
                    <th class="p-4 text-left column-transmission">Transmission</th>
                    <th class="p-4 text-left column-aerodynamics">Aerodynamics</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b border-gray-700 hover:bg-gray-700">
                    <td class="p-4 column-id">1</td>
                    <td class="p-4 column-driver-name">Max Verstappen</td>
                    <td class="p-4 column-team-name">Red Bull Racing</td>
                    <td class="p-4 column-track">Singapore</td>
                    <td class="p-4 column-country">Singapore</td>
                    <td class="p-4 column-year">2023</td>
                    <td class="p-4 column-front-angle">10</td>
                    <td class="p-4 column-rear-angle">8</td>
                    <td class="p-4 column-anti-roll">4</td>
                    <td class="p-4 column-tyre-camber">2.5</td>
                    <td class="p-4 column-toe-out">1.0</td>
                    <td class="p-4 column-tyre-compound">Soft</td>
                    <td class="p-4 column-tyre-pressure">22 PSI</td>
                    <td class="p-4 column-ride-height">5 cm</td>
                    <td class="p-4 column-brake-bias">55%</td>
                    <td class="p-4 column-engine-mapping">Aggressive</td>
                    <td class="p-4 column-suspension-geometry">Balanced</td>
                    <td class="p-4 column-brakes">Medium</td>
                    <td class="p-4 column-transmission">Manual</td>
                    <td class="p-4 column-aerodynamics">High</td>
                </tr>
                <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</x-navigation>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Column toggle functionality
        const checkboxes = document.querySelectorAll('.column-toggle');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const column = this.dataset.column;
                const cells = document.querySelectorAll(`.column-${column}`);
                cells.forEach(cell => {
                    if (this.checked) {
                        cell.classList.remove('hidden');
                    } else {
                        cell.classList.add('hidden');
                    }
                });
            });
        });

        // Initially hide columns based on checkboxes
        checkboxes.forEach(checkbox => {
            const column = checkbox.dataset.column;
            const cells = document.querySelectorAll(`.column-${column}`);
            if (!checkbox.checked) {
                cells.forEach(cell => cell.classList.add('hidden'));
            }
        });
    });
</script>
