@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 py-12 text-center">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Student Flats in Lahore</h1>
        <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-6">
            Find flats in Lahore close to universities. <br>
            <a href="#" class="text-orange-500 hover:underline">View all our student accommodation in Lahore</a>.
        </p>
    </div>
</div>

<!-- Filters -->
<div class="bg-white border-b border-gray-200 py-4">
    <div class="max-w-7xl mx-auto px-4 flex flex-wrap justify-center items-center gap-4">
        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Location</option>
            <option>Model Town</option>
            <option>DHA</option>
            <option>Gulberg</option>
            <option>Johar Town</option>
        </select>

        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Bedrooms</option>
            <option>1 Bed</option>
            <option>2 Beds</option>
            <option>3+ Beds</option>
        </select>

        <select class="border border-gray-300 rounded px-3 py-2">
            <option>Price Range</option>
            <option>Under 5000 PKR/week</option>
            <option>5000-10000 PKR/week</option>
            <option>10000+ PKR/week</option>
        </select>

        <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded">Search</button>

        <button class="flex items-center bg-white border border-gray-300 rounded px-3 py-2 text-gray-700 hover:bg-gray-50">
            <span class="mr-2">Filters</span>
            <!-- Simple Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" 
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M3 4a1 1 0 011-1h16a1 1 0 
                    011 1v2a1 1 0 01-.293.707l-5.376 
                    5.376a2 2 0 
                    00-.586 1.414V19a2 2 0 01-2 2h-2a2 2 
                    0 01-2-2v-5.503a2 2 0 
                    00-.586-1.414L3.293 6.707A1 1 0 
                    013 6V4z"/>
            </svg>
        </button>
    </div>
</div>

<!-- Listings Section -->
<section class="mt-8 p-4 md:p-8 max-w-7xl mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Student Flats in Lahore</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($hostels as $hostel)
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4">
                <img src="{{ $hostel->image_url ?? 'assets/images/placeholder.jpg' }}" alt="{{ $hostel->name }}"
                     class="w-full h-48 object-cover rounded-md mb-3">
                <h3 class="text-xl font-bold mb-1">{{ $hostel->name }}</h3>
                <p class="text-sm text-gray-600">{{ $hostel->location }}</p>
                <div class="flex items-center space-x-2 my-2 text-gray-700 text-sm">
                    <!-- Example icons can be replaced with actual icons -->
                    <span>{{ $hostel->bedrooms }} Beds</span>
                    <span>{{ $hostel->bathrooms }} Baths</span>
                </div>
                <p class="text-gray-800 font-semibold mb-3">
                    From ₨{{ number_format($hostel->price, 0) }}/week
                </p>
                <a href="hostel.php?id={{ $hostel->id }}" 
                   class="block bg-orange-500 text-white text-center py-2 px-4 rounded hover:bg-orange-600">
                   View
                </a>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center mt-8 space-x-2">
        <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">1</button>
        <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded">2</button>
        <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded">3</button>
        <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded">4</button>
        <button class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 px-4 py-2 rounded">5</button>
    </div>
</section>
@endsection
