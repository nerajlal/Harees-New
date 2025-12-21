@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Contact Us</h1>
        <p class="text-xl text-gray-600">We'd love to hear from you</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Get in Touch</h2>
            
            <div class="space-y-4">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <div>
                        <p class="font-semibold text-gray-800">Phone</p>
                        <p class="text-gray-600">{{ config('shop.contact.phone') }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <div>
                        <p class="font-semibold text-gray-800">Email</p>
                        <p class="text-gray-600">{{ config('shop.contact.email') }}</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <svg class="w-6 h-6 text-yellow-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <div>
                        <p class="font-semibold text-gray-800">Address</p>
                        <p class="text-gray-600">{{ config('shop.address.line1') }}<br>{{ config('shop.address.city') }}, {{ config('shop.address.state') }}, {{ config('shop.address.country') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Send us a Message</h2>
            
            <form class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your name">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your email">
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Message</label>
                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your message"></textarea>
                </div>

                <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
