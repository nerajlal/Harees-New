@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">Shipping Policy</h1>
    
    <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Shipping Methods</h2>
            <p class="text-gray-600">We offer secure and insured shipping for all jewelry orders.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Delivery Time</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Local delivery: 2-3 business days</li>
                <li>Domestic shipping: 5-7 business days</li>
                <li>Custom orders: 15-20 business days</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Shipping Charges</h2>
            <p class="text-gray-600">Shipping charges vary based on location and order value. Free shipping on orders above ₹50,000.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tracking</h2>
            <p class="text-gray-600">You will receive a tracking number via SMS and email once your order is shipped.</p>
        </section>
    </div>
</div>
@endsection
