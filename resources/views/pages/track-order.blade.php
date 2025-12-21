@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Track Your Order</h1>
        <p class="text-xl text-gray-600">Enter your order details to track</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-8">
        <form class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Order Number</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter your order number" required>
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Email or Phone</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Enter email or phone number" required>
            </div>

            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                Track Order
            </button>
        </form>

        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
            <p class="text-sm text-gray-700">
                <strong>Note:</strong> You will receive tracking information via SMS and email once your order is shipped.
            </p>
        </div>
    </div>
</div>
@endsection
