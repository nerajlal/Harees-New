@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">Cancellation Policy</h1>
    
    <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Order Cancellation</h2>
            <p class="text-gray-600">You can cancel your order before it is shipped. Once shipped, cancellation is not possible.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">How to Cancel</h2>
            <ol class="list-decimal list-inside text-gray-600 space-y-2">
                <li>Contact customer service immediately</li>
                <li>Provide your order number</li>
                <li>Cancellation will be processed within 24 hours</li>
            </ol>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Refund for Cancelled Orders</h2>
            <p class="text-gray-600">Full refund will be processed within 7-10 business days for cancelled orders.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Non-Cancellable Orders</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Custom-made jewelry</li>
                <li>Engraved items</li>
                <li>Orders already shipped</li>
            </ul>
        </section>
    </div>
</div>
@endsection
