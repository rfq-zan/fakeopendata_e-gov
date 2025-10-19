<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenData Web - Visualizations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <header class="bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <h1 class="text-xl font-bold text-blue-600">OpenData Web</h1>
            <p class="text-sm italic text-gray-500">Empowering insight through open information</p>
            <nav class="items-center hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-blue-600">Home</a>
                <a href="/datasets" class="text-sm font-medium text-gray-600 hover:text-blue-600">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium text-blue-600">Visualizations</a>
                <a href="/apidocs" class="text-sm font-medium text-gray-600 hover:text-blue-600">API Docs</a>
                <a href="/about" class="text-sm font-medium text-gray-600 hover:text-blue-600">About</a>
            </nav>
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
</body>
</html>
