<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeOpenData Web - API Docs</title>
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

    <!-- API Docs Section -->
    <section class="container px-6 py-16 mx-auto">
        <h2 class="mb-6 text-3xl font-semibold text-blue-700">API Documentation</h2>
        <p class="mb-10 text-gray-600">Access our datasets programmatically using the OpenData API.</p>

        <div class="p-8 bg-white rounded-lg shadow">
            <h3 class="mb-4 text-xl font-semibold text-blue-600">Authentication</h3>
            <p class="mb-4 text-gray-700">Use your API key to authenticate all requests:</p>
            <pre class="p-4 overflow-x-auto text-sm text-gray-800 bg-gray-100 rounded">
    GET https://api.fakeopendata.com/v1/datasets
    Headers:
    Authorization: Bearer WHJNORU23KJ4H5K6L7M8N9O0PQRSTUV
            </pre>

            <h3 class="mt-8 mb-4 text-xl font-semibold text-blue-600">Endpoints</h3>
            <ul class="pl-5 space-y-2 text-gray-700 list-disc">
                <li><code>/datasets</code> – Retrieve all available datasets.</li>
                <li><code>/datasets/{id}</code> – Retrieve details of a specific dataset.</li>
                <li><code>/visualizations</code> – Get visualization-ready data.</li>
            </ul>
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
