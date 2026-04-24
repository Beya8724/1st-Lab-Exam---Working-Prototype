@extends('customer.layout')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md border-t-4 border-[#0099cc]">
    <h2 class="text-2xl font-bold mb-2 text-[#0099cc]">Create an Account</h2>
    <p class="text-sm text-gray-500 mb-6">Join WashMe to track your laundry in real-time!</p>
    
    <form action="/register" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" placeholder="Juan Dela Cruz" class="w-full border p-3 rounded focus:ring-2 focus:ring-[#0099cc] outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" name="phone" placeholder="09123456789" class="w-full border p-3 rounded focus:ring-2 focus:ring-[#0099cc] outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" placeholder="example@mail.com" class="w-full border p-3 rounded focus:ring-2 focus:ring-[#0099cc] outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" placeholder="••••••••" class="w-full border p-3 rounded focus:ring-2 focus:ring-[#0099cc] outline-none">
        </div>
        
        <button type="submit" class="w-full bg-[#cc2128] text-white font-bold py-3 rounded hover:bg-red-700 shadow-lg transition duration-200">
            REGISTER NOW
        </button>
    </form>

    <div class="mt-6 text-center text-sm text-gray-600">
        Already have an account? 
        <a href="/login" class="text-[#0099cc] font-bold hover:underline">Login here</a>
    </div>
</div>
@stop