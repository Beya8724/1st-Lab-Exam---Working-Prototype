@extends('customer.layout')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg border-t-8 border-[#0099cc]">
    <h2 class="text-3xl font-black text-center mb-6 text-[#0099cc]">LOG IN</h2>
    
    <div class="space-y-4">
        <input type="email" placeholder="Email" class="w-full border-2 border-gray-200 p-3 rounded-lg focus:border-[#0099cc] outline-none">
        <input type="password" placeholder="Password" class="w-full border-2 border-gray-200 p-3 rounded-lg focus:border-[#0099cc] outline-none">
        
        <a href="/order" class="block text-center w-full bg-[#cc2128] text-white font-bold py-4 rounded-lg hover:bg-red-700 transition shadow-md">
            LOG IN
        </a>
    </div>

    <p class="mt-6 text-center text-gray-600">
        Walay account? <a href="/register" class="text-[#0099cc] font-bold underline">Register Here</a>
    </p>
</div>
@stop