@extends('customer.layout')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border-t-8 border-[#0099cc]">
    
    <div class="flex justify-between items-center mb-8 border-b pb-4">
        <div>
            <h2 class="text-2xl font-black text-[#0099cc]">ORDER STATUS</h2>
            <p class="text-sm text-gray-500">Claim Stub: <span class="font-bold text-black">WM-12345</span> [cite: 20, 24]</p>
        </div>
        <div class="text-right">
            <span class="bg-blue-100 text-[#0099cc] px-4 py-1 rounded-full font-bold text-sm uppercase">
                Washing in Progress
            </span>
        </div>
    </div>

    <div class="relative flex items-center justify-between mb-12">
        <div class="absolute left-0 top-1/2 w-full h-1 bg-gray-200 -z-10 transform -translate-y-1/2"></div>
        <div class="absolute left-0 top-1/2 w-1/2 h-1 bg-[#0099cc] -z-10 transform -translate-y-1/2 transition-all duration-500"></div>

        <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-[#0099cc] text-white rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <p class="mt-2 text-xs font-bold text-[#0099cc]">Order Placed </p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-[#0099cc] text-white rounded-full flex items-center justify-center animate-pulse shadow-lg ring-4 ring-blue-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
            </div>
            <p class="mt-2 text-xs font-bold text-[#0099cc]">Washing </p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <p class="mt-2 text-xs font-bold text-gray-400">On the Way [cite: 23, 46]</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="w-10 h-10 bg-gray-200 text-gray-500 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <p class="mt-2 text-xs font-bold text-gray-400">Delivered [cite: 14]</p>
        </div>
    </div>

    <div class="bg-gray-50 p-6 rounded-lg border-2 border-dashed border-gray-200">
        <h3 class="font-black text-gray-700 mb-4 uppercase tracking-widest">Order Details</h3>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-gray-500">Service:</span>
                <span class="font-bold text-gray-800 uppercase">Wash, Dry, & Press [cite: 23]</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Estimated Weight:</span>
                <span class="font-bold text-gray-800">5.0 Kilos </span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Option:</span>
                <span class="font-bold text-gray-800 uppercase">Delivery [cite: 15, 23]</span>
            </div>
        </div>
    </div>

    <div class="mt-8 text-center">
        <a href="/order" class="inline-block bg-[#cc2128] text-white font-black px-8 py-3 rounded-lg hover:bg-red-700 shadow-md transition">
            NEW ORDER
        </a>
    </div>
</div>
@stop