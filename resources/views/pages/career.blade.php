@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Career Opportunities</h1>
        <p class="text-xl text-gray-600">Join our team at {{ config('shop.name') }}</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">Why Work With Us?</h2>
        <ul class="space-y-3">
            <li class="flex items-start">
                <span class="text-yellow-500 mr-2">✓</span>
                <span class="text-gray-700">Competitive salary and benefits</span>
            </li>
            <li class="flex items-start">
                <span class="text-yellow-500 mr-2">✓</span>
                <span class="text-gray-700">Professional growth opportunities</span>
            </li>
            <li class="flex items-start">
                <span class="text-yellow-500 mr-2">✓</span>
                <span class="text-gray-700">Friendly work environment</span>
            </li>
            <li class="flex items-start">
                <span class="text-yellow-500 mr-2">✓</span>
                <span class="text-gray-700">Employee discounts</span>
            </li>
        </ul>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-semibold text-blue-900 mb-6">Apply Now</h2>
        <form class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Full Name</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Phone</label>
                <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Position</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    <option value="">Select position</option>
                    <option>Sales Associate</option>
                    <option>Jewelry Designer</option>
                    <option>Store Manager</option>
                    <option>Customer Service</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-1">Cover Letter</label>
                <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required></textarea>
            </div>
            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                Submit Application
            </button>
        </form>
    </div>
</div>
@endsection
