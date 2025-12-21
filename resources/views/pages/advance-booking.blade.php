@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Advance Gold Booking</h1>
        <p class="text-xl text-gray-600">Book gold in advance at today's rate</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Why Book in Advance?</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Lock Today's Rate</h3>
                        <p class="text-gray-600">Protect yourself from price fluctuations</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Flexible Payment</h3>
                        <p class="text-gray-600">Pay in installments over time</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Wedding Planning</h3>
                        <p class="text-gray-600">Perfect for upcoming weddings</p>
                    </div>
                </li>
            </ul>

            <div class="mt-8 bg-yellow-50 rounded-lg p-6">
                <h3 class="font-semibold text-gray-800 mb-2">Current Gold Rate</h3>
                <p class="text-3xl font-bold text-yellow-600">₹{{ number_format(config('shop.gold_rates.22k')) }}</p>
                <p class="text-sm text-gray-600">per gram (22K)</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Book Now</h2>
            <form class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Phone</label>
                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Gold Type</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">Select type</option>
                        <option>22K Gold</option>
                        <option>24K Gold</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Quantity (grams)</label>
                    <input type="number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" min="1" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Payment Plan</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">Select plan</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>12 Months</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Book Now
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
