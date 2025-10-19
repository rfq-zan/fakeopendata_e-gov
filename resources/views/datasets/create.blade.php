@extends('layouts.app')
@section('content')
    <h1 class="text-2xl mb-4">Upload Dataset (CSV)</h1>


    <form action="{{ route('datasets.store') }}" method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
        @csrf
        <div class="mb-2">
                <label class="block">Title</label>
            <input name="title" class="border p-2 w-full" required>
        </div>

        <div class="mb-2">
            <label class="block">Category</label>
            <input name="category" class="border p-2 w-full">
        </div>

        <div class="mb-2">
            <label class="block">Description</label>
            <textarea name="description" class="border p-2 w-full"></textarea>
        </div>

        <div class="mb-2">
            <label class="block">CSV File</label>
            <input type="file" name="csv_file" accept=".csv" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
    </form>
@endsection
