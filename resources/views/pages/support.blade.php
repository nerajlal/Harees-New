@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Customer Support</h1>
        <p class="text-xl text-gray-600">We're here to help</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-blue-900 mb-4">Contact Support</h3>
            <div class="space-y-3">
                <p class="text-gray-700"><strong>Email:</strong> {{ config('shop.contact.email') }}</p>
                <p class="text-gray-700"><strong>Phone:</strong> {{ config('shop.contact.phone') }}</p>
                <p class="text-gray-700"><strong>Hours:</strong> {{ config('shop.hours.weekday') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-blue-900 mb-4">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('faq') }}" class="text-blue-600 hover:underline">FAQ</a></li>
                <li><a href="{{ route('return-exchange') }}" class="text-blue-600 hover:underline">Returns & Exchanges</a></li>
                <li><a href="{{ route('shipping-policy') }}" class="text-blue-600 hover:underline">Shipping Policy</a></li>
                <li><a href="{{ route('track-order') }}" class="text-blue-600 hover:underline">Track Your Order</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-blue-900 mb-6">Send us a Message</h2>
        <form class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Name</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Subject</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Message</label>
                <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
            </div>
            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                Send Message
            </button>
        </form>
    </div>
</div>
@endsection
