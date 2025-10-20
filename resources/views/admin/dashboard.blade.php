<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - FakeOpenData Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="flex bg-gray-100">

    <!-- Sidebar -->
    <aside class="flex flex-col w-64 min-h-screen p-4 bg-violet-800 text-violet-100">
        <div>
            <div class="mb-8 text-2xl font-bold text-white">FakeOpenData Portal</div>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-violet-700 text-white' : 'hover:bg-violet-700' }}">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.datasets.index') }}" class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.datasets.*') ? 'bg-violet-700 text-white' : 'hover:bg-violet-700' }}">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 1.1.9 2 2 2h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2z"/></svg>
                            Datasets
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.users.index') }}" class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.users.*') ? 'bg-violet-700 text-white' : 'hover:bg-violet-700' }}">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            Users
                        </a>
                    </li>
                     <li class="mb-2">
                        <a href="{{ route('admin.settings') }}" class="flex items-center p-2 rounded-lg {{ request()->routeIs('admin.settings') ? 'bg-violet-700 text-white' : 'hover:bg-violet-700' }}">
                             <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mt-auto">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="flex items-center w-full p-2 rounded-lg hover:bg-violet-700">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <header class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Welcome, Admin!</h1>
            <div class="flex items-center">
                 <span class="mr-2 text-sm text-gray-600">{{ auth()->user()->email }}</span>
                <img src="https://placehold.co/40x40/9ca3af/ffffff?text=A" alt="Admin Avatar" class="rounded-full">
            </div>
        </header>

        <!-- Cards -->
        <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 lg:grid-cols-4">
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <p class="text-sm text-gray-500">Total Datasets</p>
                    <p class="text-3xl font-bold text-violet-600">1,250</p>
                </div>
                <div class="p-3 rounded-full bg-violet-100">
                     <svg class="w-6 h-6 text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 1.1.9 2 2 2h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2z" /></svg>
                </div>
            </div>
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <p class="text-sm text-gray-500">Total Users</p>
                    <p class="text-3xl font-bold text-violet-600">8,420</p>
                </div>
                 <div class="p-3 rounded-full bg-violet-100">
                    <svg class="w-6 h-6 text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
            </div>
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <p class="text-sm text-gray-500">API Requests (24h)</p>
                    <p class="text-3xl font-bold text-violet-600">1.2M</p>
                </div>
                 <div class="p-3 rounded-full bg-violet-100">
                    <svg class="w-6 h-6 text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" /></svg>
                </div>
            </div>
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <p class="text-sm text-gray-500">Storage Used</p>
                    <p class="text-3xl font-bold text-violet-600">512 GB</p>
                </div>
                 <div class="p-3 rounded-full bg-violet-100">
                    <svg class="w-6 h-6 text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
                </div>
            </div>
        </div>

        <!-- Main Content  -->
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="p-6 bg-white rounded-lg shadow-md lg:col-span-2">
                <h2 class="mb-4 text-xl font-semibold text-gray-800">Recent Datasets</h2>
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-sm text-gray-500 border-b">
                            <th class="py-2">Dataset Name</th>
                            <th class="py-2">Category</th>
                            <th class="py-2">Status</th>
                            <th class="py-2">Last Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3">Population Data 2024</td>
                            <td class="py-3">Demographics</td>
                            <td class="py-3"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Published</span></td>
                            <td class="py-3 text-sm text-gray-600">2 days ago</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">National Healthcare Spending</td>
                            <td class="py-3">Health</td>
                            <td class="py-3"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-200 rounded-full">Published</span></td>
                             <td class="py-3 text-sm text-gray-600">5 days ago</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">Education Statistics Q3</td>
                            <td class="py-3">Education</td>
                            <td class="py-3"><span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-200 rounded-full">Pending</span></td>
                             <td class="py-3 text-sm text-gray-600">1 week ago</td>
                        </tr>
                         <tr>
                            <td class="py-3">Climate Change Indicators</td>
                            <td class="py-3">Environment</td>
                            <td class="py-3"><span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-200 rounded-full">Error</span></td>
                             <td class="py-3 text-sm text-gray-600">2 weeks ago</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Chart -->
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="mb-4 text-xl font-semibold text-gray-800">User Sign-ups</h2>
                <canvas id="userChart"></canvas>
            </div>
        </div>
    </main>
    <script>
        const ctx = document.getElementById('userChart').getContext('2d');
        const userChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Users',
                    data: [150, 220, 180, 250, 290, 320],
                    backgroundColor: 'rgba(124, 58, 237, 0.2)',
                    borderColor: 'rgba(124, 58, 237, 1)',
                    borderWidth: 2,
                    tension: 0.4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</body>
</html>


