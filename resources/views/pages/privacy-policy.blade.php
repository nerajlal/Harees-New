@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-900 mb-8 text-center">Privacy Policy</h1>
    
    <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Information We Collect</h2>
            <p class="text-gray-600">We collect information you provide directly to us, including name, email, phone number, and address when you create an account or make a purchase.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">How We Use Your Information</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Process your orders and transactions</li>
                <li>Send you updates about your orders</li>
                <li>Improve our services and customer experience</li>
                <li>Send promotional offers (with your consent)</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Data Security</h2>
            <p class="text-gray-600">We implement appropriate security measures to protect your personal information from unauthorized access, alteration, or disclosure.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
            <p class="text-gray-600">If you have questions about this Privacy Policy, please contact us at <a href="{{ route('contact-us') }}" class="text-blue-600 hover:underline">Contact Us</a>.</p>
        </section>
    </div>
</div>
@endsection
