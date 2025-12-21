@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">Refund Policy</h1>
    
    <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Eligibility for Refund</h2>
            <p class="text-gray-600">Items must be returned within 7 days of purchase in original condition with all tags and certificates.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Refund Process</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Contact our customer service within 7 days</li>
                <li>Return the item in original packaging</li>
                <li>Refund will be processed within 7-10 business days</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Non-Refundable Items</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Custom-made jewelry</li>
                <li>Engraved items</li>
                <li>Items without original certificates</li>
            </ul>
        </section>
    </div>
</div>
@endsection
