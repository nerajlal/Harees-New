@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">Return & Exchange Policy</h1>
    
    <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Return Policy</h2>
            <p class="text-gray-600 mb-4">We accept returns within 7 days of purchase for items in original condition.</p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Item must be unused and in original packaging</li>
                <li>All certificates and tags must be intact</li>
                <li>Original receipt required</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Exchange Policy</h2>
            <p class="text-gray-600 mb-4">Exchanges are available for:</p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Size adjustments</li>
                <li>Different design (subject to price difference)</li>
                <li>Manufacturing defects</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">How to Return/Exchange</h2>
            <ol class="list-decimal list-inside text-gray-600 space-y-2">
                <li>Contact customer service</li>
                <li>Visit our store with the item and receipt</li>
                <li>Our team will inspect and process your request</li>
            </ol>
        </section>
    </div>
</div>
@endsection
