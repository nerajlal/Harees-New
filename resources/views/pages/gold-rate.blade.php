@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Today's Gold Rate</h1>
        <p class="text-xl text-gray-600">Updated Daily</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-yellow-50 rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">22K Gold</h3>
                <p class="text-4xl font-bold text-yellow-600 mb-2">₹7,500</p>
                <p class="text-sm text-gray-600">per gram</p>
            </div>

            <div class="bg-yellow-50 rounded-lg p-6 text-center">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">24K Gold</h3>
                <p class="text-4xl font-bold text-yellow-600 mb-2">₹9,100</p>
                <p class="text-sm text-gray-600">per gram</p>
            </div>
        </div>

        <div class="text-center text-sm text-gray-500">
            <p>Last updated: {{ date('d M Y, h:i A') }}</p>
            <p class="mt-2">Rates are subject to change. Please contact us for the latest rates.</p>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('gold-scheme') }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-200">
                Gold Scheme Booking
            </a>
        </div>
    </div>
</div>
@endsection
