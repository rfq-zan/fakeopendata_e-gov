<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeOpenData - Visualizations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <header class="bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <h1 class="text-xl font-bold text-blue-600">FakeOpenData Portal</h1>
            <p class="text-sm italic text-gray-500">Empowering insight through open information</p>

                <!-- Navbar -->
            <button id="mobile-menu-button" class="p-2 md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <nav class="items-center hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium transition-colors hover:text-primary">Home</a>
                <a href="/datasets" class="text-sm font-medium transition-colors hover:text-primary">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium transition-colors hover:text-primary">Visualizations</a>
                <a href="apidocs" class="text-sm font-medium transition-colors hover:text-primary">API Docs</a>
                <a href="about" class="text-sm font-medium transition-colors hover:text-primary">About</a>
            </nav>

            <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md">
                <nav class="flex flex-col p-4 space-y-2">
                    <a href="/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Home</a>
                    <a href="/datasets" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Datasets</a>
                    <a href="/visualizations" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Visualizations</a>
                    <a href="apidocs" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">API Docs</a>
                    <a href="about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">About</a>
                </nav>
            </div>

            <div class="items-center hidden space-x-2 lg:flex"></div>
        </div>
    </header>

    <section class="container px-6 py-16 mx-auto">
        <h2 class="mb-6 text-3xl font-semibold text-blue-700">Data Visualizations</h2>
        <p class="mb-10 text-gray-600">Explore meaningful charts and graphs built from our datasets.</p>

        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Population Growth</h3>
                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/line.png') }}" alt="Line Chart" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
            <!-- Card 2 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Economic Trends</h3>
                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/bar.png') }}" alt="Bar Chart" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
            <!-- Card 3 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Climate Change Indicators</h3>
                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/area.png') }}" alt="Area Chart" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
            <!-- Card 4 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Global Internet Penetration</h3>
                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/Pie.png') }}" alt="Pie Chart" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
            <!-- Card 5 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Renewable Energy Adoption</h3>

                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/Scatter.png') }}" alt="Scatter Plot" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
            <!-- Card 6 -->
            <div class="p-6 bg-white rounded-lg shadow group">
                <h3 class="mb-4 text-lg font-bold text-indigo-600">Healthcare Spending</h3>
                <div class="relative h-48 text-gray-400 rounded-lg bg-indigo-50 group-hover:overflow-visible">
                    <img src="{{ Storage::url('img/heatmap.png') }}" alt="Heat Map" class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-out rounded-lg group-hover:scale-110 group-hover:z-10">
                </div>
            </div>
        </div>
    </section>
    <script>
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
