@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">{{ $dataset->title }}</h1>
    <p class="text-sm text-gray-600">{{ $dataset->category }}</p>
    <p class="my-4">{{ $dataset->description }}</p>

    <a href="{{ route('datasets.download', $dataset) }}" class="bg-gray-800 text-white px-3 p
