<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Population Dataset - Download</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <!-- Header -->
<header class="sticky top-0 z-50 w-full border-b shadow-sm bg-gradient-to-r from-indigo-500/10 via-sky-500/10 to-cyan-500/10 backdrop-blur-md">
    <div class="container px-4 mx-auto">
        <div class="flex items-center justify-between h-16">
            <!-- Logo & Title -->
            <a href="/" class="flex items-center space-x-3">
                <div class="flex items-center justify-center w-10 h-10 text-white shadow-md rounded-xl bg-gradient-to-r from-indigo-500 to-sky-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                </div>
                <div class="hidden md:block">
                    <h1 class="text-xl font-extrabold text-gray-800">FakeOpenData</h1>
                    <p class="text-xs text-gray-500">Open Government Data</p>
                </div>
            </a>

            <!-- Navbar -->
            <div class="flex items-center justify-between w-full">
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="p-2 text-gray-700 transition md:hidden hover:text-indigo-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Center Navigation -->
                <nav class="items-center hidden mx-auto space-x-8 md:flex">
                    <a href="/" class="text-sm font-semibold text-gray-700 transition-colors hover:text-indigo-600">Home</a>
                    <a href="/visualizations" class="text-sm font-semibold text-gray-700 transition-colors hover:text-indigo-600">Visualizations</a>
                    <a href="/apidocs" class="text-sm font-semibold text-gray-700 transition-colors hover:text-indigo-600">API Docs</a>
                    <a href="/about" class="text-sm font-semibold text-gray-700 transition-colors hover:text-indigo-600">About</a>
                </nav>

                <!-- Modern Search Bar -->
                <div class="relative items-center hidden md:flex">
                    <input
                        type="text"
                        placeholder="Search datasets..."
                        class="w-48 py-2 pl-10 pr-4 text-sm text-gray-700 transition-all duration-300 bg-white border border-gray-200 rounded-full shadow-sm md:w-64 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400"
                    >
                    <svg
                        class="absolute w-5 h-5 text-gray-400 pointer-events-none left-3"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z"/>
                    </svg>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="absolute left-0 hidden w-full bg-white shadow-lg md:hidden top-16 rounded-b-xl">
                <nav class="flex flex-col p-4 space-y-2">
                    <a href="/" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-indigo-50 hover:text-indigo-600">Home</a>
                    <a href="/visualizations" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-indigo-50 hover:text-indigo-600">Visualizations</a>
                    <a href="/apidocs" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-indigo-50 hover:text-indigo-600">API Docs</a>
                    <a href="/about" class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-indigo-50 hover:text-indigo-600">About</a>
                </nav>
            </div>
        </div>
    </div>
</header>

    <main class="container px-6 py-16 mx-auto">
        <h2 class="mb-6 text-3xl font-semibold text-blue-700">Surabaya Population Dataset 2024</h2>

        <p class="mb-8 leading-relaxed text-gray-700">
            This dataset provides a detailed overview of Surabaya’s 2024 population, covering age demographics,
            gender ratios, district-level density, and growth comparisons to previous years.
            It is curated to support open research, civic planning, and data-driven decision-making in East Java.
        </p>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">CSV Format</h3>
                <p class="mb-4 text-gray-600">For spreadsheet and data analysis tools.</p>
                <a href="{{ asset('datasets/population_2024.csv') }}" download
                   class="inline-block px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">
                    Download CSV
                </a>
            </div>

            <div class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">JSON Format</h3>
                <p class="mb-4 text-gray-600">Structured format for developers & APIs.</p>
                <a href="{{ asset('datasets/population_2024.json') }}" download
                   class="inline-block px-4 py-2 text-sm font-semibold text-white bg-green-600 rounded hover:bg-green-700">
                    Download JSON
                </a>
            </div>

            <div class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Excel Format</h3>
                <p class="mb-4 text-gray-600">Spreadsheet version for offline use.</p>
                <a href="{{ asset('datasets/population_2024.xlsx') }}" download
                   class="inline-block px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    Download XLSX
                </a>
            </div>

            <div class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                <h3 class="mb-2 text-lg font-bold text-blue-600">PDF Summary</h3>
                <p class="mb-4 text-gray-600">Quick summary with key highlights.</p>
                <a href="{{ asset('datasets/population_2024.pdf') }}" download
                   class="inline-block px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded hover:bg-purple-700">
                    Download PDF
                </a>
            </div>
        </div>

        <div class="mt-12 text-gray-700">
            <p>
                Each file is hosted under the <code>/public/datasets</code> directory and can be freely accessed for research,
                academic, or civic purposes. Attribution to <strong>Surabaya City Open Data Initiative</strong> is appreciated.
            </p>
        </div>
    </main>

</body>
</html>
