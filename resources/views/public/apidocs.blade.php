<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenData Web - API Docs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <!-- Navbar -->
    <header class="bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <h1 class="text-xl font-bold text-blue-600">OpenData Web</h1>
            <p class="text-sm italic text-gray-500">Empowering insight through open information</p>
            <nav class="items-center hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-blue-600">Home</a>
                <a href="/datasets" class="text-sm font-medium text-gray-600 hover:text-blue-600">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium text-gray-600 hover:text-blue-600">Visualizations</a>
                <a href="/apidocs" class="text-sm font-medium text-blue-600">API Docs</a>
                <a href="/about" class="text-sm font-medium text-gray-600 hover:text-blue-600">About</a>
            </nav>
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
</body>
</html>
