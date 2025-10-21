<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenData Portal - Population Dataset</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">

    <!-- HEADER / NAVBAR -->
    <header class="bg-white shadow-md">
        <div class="container flex flex-col items-center justify-between px-6 py-4 mx-auto space-y-2 md:flex-row md:space-y-0">
            <div>
                <h1 class="text-xl font-bold text-blue-600">OpenData Web</h1>
                <p class="text-sm italic text-gray-500">Empowering insight through open information</p>
            </div>
            <nav class="flex flex-wrap items-center justify-center space-x-6">
                <a href="/" class="text-sm font-medium text-gray-600 hover:text-blue-600">Home</a>
                <a href="/datasets" class="text-sm font-medium text-blue-600">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium text-gray-600 hover:text-blue-600">Visualizations</a>
                <a href="/apidocs" class="text-sm font-medium text-gray-600 hover:text-blue-600">API Docs</a>
                <a href="/about" class="text-sm font-medium text-gray-600 hover:text-blue-600">About</a>
            </nav>
        </div>
    </header>

    <!-- MAIN SECTION -->
    <section class="container px-6 py-16 mx-auto">
        <h2 class="mb-6 text-3xl font-semibold text-blue-700">Population Dataset - Surabaya 2024</h2>
        <p class="mb-10 text-gray-700 leading-relaxed">
            The <strong>Surabaya Population Dataset (2024)</strong> provides a comprehensive view of the city’s demographic structure,
            including population counts, gender distribution, age segmentation, and urban–rural ratios across different subdistricts.
            This dataset is essential for researchers, policymakers, and civic developers seeking to analyze population trends,
            optimize urban planning, or forecast future growth in Indonesia’s second-largest metropolitan area.
        </p>

        <p class="mb-10 text-gray-700 leading-relaxed">
            Surabaya, as a dynamic economic and educational hub in East Java, faces ongoing challenges related to urbanization,
            housing, transportation, and employment. Through this dataset, users can explore annual growth rates, household density,
            and the demographic transitions shaping the city’s development. The data was compiled from the Central Statistics Agency (BPS)
            and the Surabaya City Government open data initiative, ensuring reliability and transparency.
        </p>

        <!-- DOWNLOAD SECTION -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h3 class="mb-2 text-lg font-bold text-blue-600">CSV Format</h3>
                <p class="mb-4 text-gray-600">Comma-separated file format, suitable for Excel and data analysis tools.</p>
                <a href="{{ asset('datasets/population_2024.csv') }}" download class="inline-block px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">Download CSV</a>
            </div>

            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h3 class="mb-2 text-lg font-bold text-blue-600">JSON Format</h3>
                <p class="mb-4 text-gray-600">Structured JSON format for developers and API integration.</p>
                <a href="{{ asset('datasets/population_2024.json') }}" download class="inline-block px-4 py-2 text-sm font-semibold text-white bg-green-600 rounded hover:bg-green-700">Download JSON</a>
            </div>

            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h3 class="mb-2 text-lg font-bold text-blue-600">Excel Format</h3>
                <p class="mb-4 text-gray-600">Spreadsheet version for detailed manual analysis.</p>
                <a href="{{ asset('datasets/population_2024.xlsx') }}" download class="inline-block px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-700">Download XLSX</a>
            </div>

            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition duration-300">
                <h3 class="mb-2 text-lg font-bold text-blue-600">PDF Summary</h3>
                <p class="mb-4 text-gray-600">Compact document with key charts and summaries.</p>
                <a href="{{ asset('datasets/population_2024.pdf') }}" download class="inline-block px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded hover:bg-purple-700">Download PDF</a>
            </div>
        </div>

        <!-- INSIGHT SECTION -->
        <div class="mt-16 p-8 bg-white rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold text-blue-700 mb-4">Why This Dataset Matters</h3>
            <p class="text-gray-700 leading-relaxed mb-4">
                Understanding Surabaya’s population growth is crucial for designing sustainable infrastructure,
                allocating public services, and planning education, housing, and healthcare policies. Data-driven decisions
                help the local government align urban development with actual population needs and trends.
            </p>
            <p class="text-gray-700 leading-relaxed">
                The 2024 data shows a steady increase in young working-age residents and highlights suburban growth
                in areas like Rungkut, Sambikerep, and Lakarsantri — reflecting the ongoing decentralization of Surabaya’s
                urban core. Analysts and developers can utilize this dataset to build visualization dashboards or machine
                learning models for predictive urban studies.
            </p>
        </div>
    </section>

</body>
</html>
