{{-- This will be the main page for application settings --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100">

    <!-- Sidebar Navigation -->
    <aside class="flex flex-col w-64 min-h-screen p-4 bg-violet-800 text-violet-100">
        <!-- Top Section -->
        <div>
            <div class="mb-8 text-2xl font-bold text-white">OpenData Portal</div>
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
        <!-- Bottom Section -->
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
        <!-- Header -->
        <h1 class="mb-8 text-3xl font-bold text-gray-800">Application Settings</h1>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <!-- General Settings Card -->
            <div class="lg:col-span-2">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="mb-4 text-xl font-semibold text-gray-800">General Settings</h2>
                    <form>
                        <div class="mb-4">
                            <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                            <input type="text" id="site_name" value="OpenData Portal" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-violet-500 focus:border-violet-500 sm:text-sm">
                        </div>
                         <div class="mb-4">
                            <label for="admin_email" class="block text-sm font-medium text-gray-700">Admin Email</label>
                            <input type="email" id="admin_email" value="admin@opendata.com" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-violet-500 focus:border-violet-500 sm:text-sm">
                        </div>
                         <div class="mb-4">
                            <label for="maintenance_mode" class="block text-sm font-medium text-gray-700">Maintenance Mode</label>
                            <select id="maintenance_mode" class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-violet-500 focus:border-violet-500 sm:text-sm">
                                <option>Disabled</option>
                                <option selected>Enabled</option>
                            </select>
                        </div>
                        <div class="text-right">
                             <button type="submit" class="px-4 py-2 text-white rounded-lg bg-violet-600 hover:bg-violet-700">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>

             <!-- API Settings Card -->
            <div>
                 <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="mb-4 text-xl font-semibold text-gray-800">API Settings</h2>
                    <form>
                        <div class="mb-4">
                            <label for="api_key" class="block text-sm font-medium text-gray-700">API Key</label>
                            <input type="text" id="api_key" value="**********" disabled class="block w-full px-3 py-2 mt-1 bg-gray-100 border border-gray-300 rounded-md shadow-sm sm:text-sm">
                        </div>
                         <div class="mb-4">
                            <label for="rate_limit" class="block text-sm font-medium text-gray-700">Rate Limit (per minute)</label>
                            <input type="number" id="rate_limit" value="100" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-violet-500 focus:border-violet-500 sm:text-sm">
                        </div>
                        <div class="text-right">
                             <button type="submit" class="px-4 py-2 text-white rounded-lg bg-violet-600 hover:bg-violet-700">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
