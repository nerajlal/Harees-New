@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-blue-900 mb-4">Custom Jewellery Design</h1>
        <p class="text-xl text-gray-600">Create your dream jewelry piece</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
        <div>
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Why Choose Custom Design?</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Unique Design</h3>
                        <p class="text-gray-600">Create a one-of-a-kind piece that reflects your style</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Expert Craftsmanship</h3>
                        <p class="text-gray-600">Our skilled artisans bring your vision to life</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Quality Materials</h3>
                        <p class="text-gray-600">Choose from premium gold, diamonds, and gemstones</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-yellow-500 text-2xl mr-3">✓</span>
                    <div>
                        <h3 class="font-semibold text-gray-800">Personal Consultation</h3>
                        <p class="text-gray-600">Work directly with our design team</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-blue-900 mb-6">Request Custom Design</h2>
            <form class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Name</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your name" required>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Phone</label>
                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Your phone number" required>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Jewelry Type</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="">Select type</option>
                        <option>Ring</option>
                        <option>Necklace</option>
                        <option>Earrings</option>
                        <option>Bracelet</option>
                        <option>Pendant</option>
                        <option>Other</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1">Design Details</label>
                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Describe your design idea..." required></textarea>
                </div>

                <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200">
                    Submit Request
                </button>
            </form>
        </div>
    </div>

    <div class="bg-yellow-50 rounded-lg p-8 text-center">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">How It Works</h2>
        <div class="grid md:grid-cols-4 gap-6 mt-8">
            <div>
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">1</div>
                <h3 class="font-semibold text-gray-800 mb-2">Consultation</h3>
                <p class="text-sm text-gray-600">Discuss your design ideas with our team</p>
            </div>
            <div>
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">2</div>
                <h3 class="font-semibold text-gray-800 mb-2">Design</h3>
                <p class="text-sm text-gray-600">We create detailed sketches and 3D models</p>
            </div>
            <div>
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">3</div>
                <h3 class="font-semibold text-gray-800 mb-2">Approval</h3>
                <p class="text-sm text-gray-600">Review and approve the final design</p>
            </div>
            <div>
                <div class="bg-yellow-400 text-white rounded-full w-12 h-12 flex items-center justify-center text-xl font-bold mx-auto mb-3">4</div>
                <h3 class="font-semibold text-gray-800 mb-2">Creation</h3>
                <p class="text-sm text-gray-600">Our artisans craft your unique piece</p>
            </div>
        </div>
    </div>
</div>
@endsection
