@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">About Harees Jewellery</h1>
        <p class="text-xl text-gray-600">Crafting Timeless Elegance Since Generations</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-4">Our Story</h2>
            <p class="text-gray-700 mb-4">
                Harees Jewellery has been a trusted name in fine jewelry for generations. We specialize in creating exquisite pieces that blend traditional craftsmanship with contemporary design.
            </p>
            <p class="text-gray-700 mb-4">
                Our collection features stunning diamond jewelry, elegant gold pieces, and beautiful gemstone creations that celebrate life's precious moments.
            </p>
        </div>

        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-4">Our Values</h2>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-yellow-500 mr-2">✓</span>
                    <span class="text-gray-700">Quality craftsmanship in every piece</span>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 mr-2">✓</span>
                    <span class="text-gray-700">Authentic and certified jewelry</span>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 mr-2">✓</span>
                    <span class="text-gray-700">Customer satisfaction guaranteed</span>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 mr-2">✓</span>
                    <span class="text-gray-700">Transparent pricing</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-yellow-50 rounded-lg p-8 text-center">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">Visit Our Store</h2>
        <p class="text-gray-700 mb-6">Experience our collection in person at our showroom</p>
        <a href="{{ route('stores') }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-200">
            Find a Store
        </a>
    </div>
</div>
@endsection
