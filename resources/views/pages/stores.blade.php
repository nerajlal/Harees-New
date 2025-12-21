@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Our Stores</h1>
        <p class="text-xl text-gray-600">Visit us at our locations</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        {{-- Store 1 --}}
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-semibold text-blue-900 mb-4">Harees Jewellery - Main Store</h3>
            
            <div class="space-y-3 mb-6">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <p class="text-gray-700">Kollam, Kerala, India</p>
                </div>

                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <p class="text-gray-700">+91 1234567890</p>
                </div>

                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Mon - Sat: 10:00 AM - 8:00 PM<br>Sunday: 10:00 AM - 6:00 PM</p>
                </div>
            </div>

            <a href="#" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition-all duration-200">
                Get Directions
            </a>
        </div>

        {{-- Store 2 - Add more stores as needed --}}
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-2xl font-semibold text-blue-900 mb-4">Harees Jewellery - Branch</h3>
            
            <div class="space-y-3 mb-6">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <p class="text-gray-700">Thiruvananthapuram, Kerala, India</p>
                </div>

                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <p class="text-gray-700">+91 0987654321</p>
                </div>

                <div class="flex items-start">
                    <svg class="w-5 h-5 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Mon - Sat: 10:00 AM - 8:00 PM<br>Sunday: 10:00 AM - 6:00 PM</p>
                </div>
            </div>

            <a href="#" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-lg transition-all duration-200">
                Get Directions
            </a>
        </div>
    </div>
</div>
@endsection
