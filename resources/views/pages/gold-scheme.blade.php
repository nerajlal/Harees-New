@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Gold Scheme Booking</h1>
        <p class="text-xl text-gray-600">Save systematically for your dream jewelry</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Scheme Benefits</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Monthly Savings</h3>
                        <p class="text-gray-600">Save a fixed amount every month</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Bonus Amount</h3>
                        <p class="text-gray-600">Get bonus on completion</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Flexible Plans</h3>
                        <p class="text-gray-600">Choose 11 or 12 month plans</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">No Making Charges</h3>
                        <p class="text-gray-600">Waiver on making charges</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Enroll Now</h2>
            <form class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Full Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Phone</label>
                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Scheme Duration</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">Select duration</option>
                        <option>11 Months</option>
                        <option>12 Months</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Monthly Amount (₹)</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">Select amount</option>
                        <option>₹5,000</option>
                        <option>₹10,000</option>
                        <option>₹15,000</option>
                        <option>₹20,000</option>
                        <option>₹25,000</option>
                        <option>₹50,000</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Enroll in Scheme
                </button>
            </form>
        </div>
    </div>

    <div class="bg-yellow-50 rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4 text-center">How It Works</h2>
        <div class="grid md:grid-cols-4 gap-6 mt-8">
            <div class="text-center">
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">1</div>
                <h3 class="font-semibold text-gray-800 mb-2">Choose Plan</h3>
                <p class="text-sm text-gray-600">Select monthly amount and duration</p>
            </div>
            <div class="text-center">
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">2</div>
                <h3 class="font-semibold text-gray-800 mb-2">Pay Monthly</h3>
                <p class="text-sm text-gray-600">Make regular monthly payments</p>
            </div>
            <div class="text-center">
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">3</div>
                <h3 class="font-semibold text-gray-800 mb-2">Get Bonus</h3>
                <p class="text-sm text-gray-600">Receive bonus on completion</p>
            </div>
            <div class="text-center">
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">4</div>
                <h3 class="font-semibold text-gray-800 mb-2">Buy Jewelry</h3>
                <p class="text-sm text-gray-600">Purchase your dream jewelry</p>
            </div>
        </div>
    </div>
</div>
@endsection
