@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Our Brands</h1>
        <p class="text-xl text-gray-600">Trusted jewelry brands we carry</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="mb-4">
                <div class="w-32 h-32 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
                    <span class="text-2xl font-bold text-gray-600">Brand 1</span>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Premium Gold</h3>
            <p class="text-gray-600">Certified 22K and 24K gold jewelry</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="mb-4">
                <div class="w-32 h-32 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
                    <span class="text-2xl font-bold text-gray-600">Brand 2</span>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Diamond Collection</h3>
            <p class="text-gray-600">Certified diamond jewelry</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 text-center">
            <div class="mb-4">
                <div class="w-32 h-32 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
                    <span class="text-2xl font-bold text-gray-600">Brand 3</span>
                </div>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Silver Jewelry</h3>
            <p class="text-gray-600">925 sterling silver collection</p>
        </div>
    </div>
</div>
@endsection
