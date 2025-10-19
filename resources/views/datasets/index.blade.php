@extends('layouts.app')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl">Datasets</h1>
        <a href="{{ route('datasets.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Upload CSV</a>
    </div>


    @if(session('success'))
        <div class="bg-green-100 p-3 mb-4">{{ session('success') }}</div>
    @endif


    <div class="grid grid-cols-1 gap-4">
        @foreach($datasets as $d)
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-bold">{{ $d->title }}</h2>
                <p class="text-sm text-gray-600">{{ $d->category }} • {{ $d->rows_count }} rows</p>
                <div class="mt-2">
                    <a href="{{ route('datasets.show', $d) }}" class="mr-2">View</a>
                    <a href="{{ route('datasets.download', $d) }}">Download CSV</a>
                </div>
            </div>
        @endforeach
    </div>


    <div class="mt-6">{{ $datasets->links() }}</div>
@endsection
