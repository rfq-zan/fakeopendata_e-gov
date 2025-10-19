<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen py-8 bg-gray-100">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            {{-- Top Stats Section --}}
            <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-3">
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-sm text-gray-500">Total Datasets</h3>
                    <p class="mt-2 text-3xl font-semibold text-blue-600">12</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-sm text-gray-500">Total Users</h3>
                    <p class="mt-2 text-3xl font-semibold text-green-600">54</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-sm text-gray-500">Pending Approvals</h3>
                    <p class="mt-2 text-3xl font-semibold text-red-600">3</p>
                </div>
            </div>

            {{-- Recent Activity Section --}}
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-lg font-semibold text-gray-800">Recent Dataset Uploads</h3>

                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="font-semibold text-gray-700 border-b">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Dataset Name</th>
                            <th class="px-4 py-2">Uploader</th>
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Population Growth 2024</td>
                            <td class="px-4 py-2">admin</td>
                            <td class="px-4 py-2">2025-10-18</td>
                            <td class="px-4 py-2"><span class="font-semibold text-green-600">Approved</span></td>
                        </tr>
                        <tr class="border-t">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">Economic Index Data</td>
                            <td class="px-4 py-2">user01</td>
                            <td class="px-4 py-2">2025-10-17</td>
                            <td class="px-4 py-2"><span class="font-semibold text-yellow-600">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
