<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeOpenData Web - About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-900 bg-gray-50">
    <!-- Navbar -->
    <header class="bg-white shadow-md">
        <div class="container flex items-center justify-between px-6 py-4 mx-auto">
            <h1 class="text-xl font-bold text-blue-600">FakeOpenData Portal</h1>
            <p class="text-sm italic text-gray-500">Empowering insight through open information</p>

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

    <!-- About Section -->
    <section class="container px-6 py-20 mx-auto text-center">
        <h2 class="mb-4 text-3xl font-semibold text-blue-700">About OpenData Web</h2>
        <p class="max-w-2xl mx-auto mb-8 text-gray-600">
            OpenData Web is a platform dedicated to providing easy access to public data, enabling users to
            gain meaningful insights, perform analyses, and build visualizations using real-world information.
        </p>

        <div class="grid gap-8 mt-10 md:grid-cols-2">
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="mb-2 text-lg font-semibold text-blue-600">Our Mission</h3>
                <p class="text-gray-600">To promote transparency and innovation by empowering individuals
                    and organizations with open data resources.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="mb-2 text-lg font-semibold text-blue-600">Our Vision</h3>
                <p class="text-gray-600">To become the leading open data platform that bridges the gap
                    between information and actionable insights.</p>
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
