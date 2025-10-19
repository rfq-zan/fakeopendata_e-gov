<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - OpenData Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        input:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="flex min-h-screen">

        <!-- Branding Section -->
        <div class="items-center justify-center hidden p-12 text-white lg:flex lg:w-1/2 bg-gradient-to-br from-indigo-600 to-indigo-800">
            <div class="text-center">
                <h1 class="mb-4 text-5xl font-bold tracking-tight">OpenData Portal</h1>
                <p class="text-lg text-indigo-200">Secure Administrator Access</p>
            </div>
        </div>

        <!-- Login Form Section -->
        <div class="flex items-center justify-center w-full p-6 lg:w-1/2">
            <div class="w-full max-w-md">
                <div class="p-8 bg-white shadow-lg rounded-2xl">
                    <div class="mb-8 text-center">
                        <h2 class="text-3xl font-bold text-indigo-600">Welcome Back</h2>
                        <p class="mt-2 text-gray-500">Sign in to manage the portal.</p>
                    </div>

                    @if ($errors->any())
                        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 border border-red-200 rounded-lg">
                            <strong>Oops!</strong> {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206" />
                                    </svg>
                                </div>
                                <input id="email" type="email" name="email" class="w-full py-2 pl-10 pr-3 border border-gray-300 rounded-lg bg-gray-50 focus:border-indigo-500 focus:ring-0" placeholder="you@example.com" required>
                            </div>
                        </div>

                        <div class="mb-6">
                             <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                             <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                     <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input id="password" type="password" name="password" class="w-full py-2 pl-10 pr-3 border border-gray-300 rounded-lg bg-gray-50 focus:border-indigo-500 focus:ring-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <button class="w-full py-3 font-semibold text-white transition-transform duration-300 transform bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:scale-105">
                            Sign In
                        </button>
                    </form>
                </div>
                 <p class="mt-6 text-sm text-center text-gray-500">
                    &copy; 2025 OpenData Portal. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
