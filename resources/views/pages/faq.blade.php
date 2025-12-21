@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Frequently Asked Questions</h1>
        <p class="text-xl text-gray-600">Find answers to common questions</p>
    </div>

    <div class="space-y-4">
        {{-- FAQ Item 1 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the purity of your gold jewelry?</h3>
            <p class="text-gray-600">We offer jewelry in 18K, 22K, and 24K gold. Each piece comes with a purity certificate.</p>
        </div>

        {{-- FAQ Item 2 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Do you provide certificates for diamond jewelry?</h3>
            <p class="text-gray-600">Yes, all our diamond jewelry comes with authentic certification from recognized gemological laboratories.</p>
        </div>

        {{-- FAQ Item 3 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">What is your return policy?</h3>
            <p class="text-gray-600">We offer a 7-day return policy for unused items in original condition. Please refer to our <a href="{{ route('return-exchange') }}" class="text-blue-600 hover:underline">Return Policy</a> for details.</p>
        </div>

        {{-- FAQ Item 4 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Do you offer custom jewelry design?</h3>
            <p class="text-gray-600">Yes! We specialize in custom jewelry design. Visit our <a href="{{ route('custom-jewellery') }}" class="text-blue-600 hover:underline">Custom Jewellery</a> page to learn more.</p>
        </div>

        {{-- FAQ Item 5 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">What payment methods do you accept?</h3>
            <p class="text-gray-600">We accept cash, credit/debit cards, UPI, and net banking. We also offer gold scheme booking options.</p>
        </div>

        {{-- FAQ Item 6 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Do you provide jewelry cleaning services?</h3>
            <p class="text-gray-600">Yes, we offer complimentary cleaning services for jewelry purchased from our store.</p>
        </div>

        {{-- FAQ Item 7 --}}
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-2">How can I check today's gold rate?</h3>
            <p class="text-gray-600">You can check the current gold rate on our <a href="{{ route('gold-rate') }}" class="text-blue-600 hover:underline">Gold Rate</a> page, which is updated daily.</p>
        </div>
    </div>

    <div class="mt-12 bg-yellow-50 rounded-lg p-8 text-center">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">Still have questions?</h2>
        <p class="text-gray-700 mb-6">Feel free to reach out to our customer support team</p>
        <a href="{{ route('contact-us') }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-200">
            Contact Us
        </a>
    </div>
</div>
@endsection
