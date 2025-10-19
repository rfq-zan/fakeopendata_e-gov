<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenData Web - Datasets</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <header class="bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <h1 class="text-xl font-bold text-blue-600">OpenData Web</h1>
            <p class="text-sm italic text-gray-500">Empowering insight through open information</p>
            <nav class="items-center hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-blue-600">Home</a>
                <a href="/datasets" class="text-sm font-medium text-blue-600">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium text-gray-600 hover:text-blue-600">Visualizations</a>
                <a href="/apidocs" class="text-sm font-medium text-gray-600 hover:text-blue-600">API Docs</a>
                <a href="/about" class="text-sm font-medium text-gray-600 hover:text-blue-600">About</a>
            </nav>
        </div>
    </header>

    <section class="container px-6 py-16 mx-auto">
        <h2 class="mb-6 text-3xl font-semibold text-blue-700">Available Datasets</h2>
        <p class="mb-10 text-gray-600">Browse a variety of open datasets ready for download or API use.</p>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Population Statistics</h3>
                <p class="mb-4 text-gray-600">Demographic data by region and year.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Environmental Data</h3>
                <p class="mb-4 text-gray-600">Air quality, water usage, and more.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Economic Indicators</h3>
                <p class="mb-4 text-gray-600">GDP, employment, and trade metrics.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Global Internet Penetration</h3>
                <p class="mb-4 text-gray-600">Most internet users in a place.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Renewable Energy Adoption</h3>
                <p class="mb-4 text-gray-600">Renewable Energy used by year per capita.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Healthcare Spending</h3>
                <p class="mb-4 text-gray-600">Economy spending per year in a place.</p>
                <a href="#" class="text-blue-600 hover:underline">View Details →</a>
            </div>
        </div>
    </section>
</body>
</html>
