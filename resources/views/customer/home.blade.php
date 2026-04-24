@extends('customer.layout')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border-t-8 border-[#0099cc]">
    <h2 class="text-3xl font-black text-[#0099cc] mb-6">Place Your Laundry Order</h2>
    
    <form action="/order-success" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <label class="border-2 p-4 rounded-lg cursor-pointer hover:border-[#0099cc] transition">
                <input type="radio" name="service" value="WDF" class="mr-2">
                <span class="font-bold">Wash, Dry, & Fold (WDF)</span>
            </label>
            <label class="border-2 p-4 rounded-lg cursor-pointer hover:border-[#0099cc] transition">
                <input type="radio" name="service" value="WDP" class="mr-2">
                <span class="font-bold">Wash, Dry, & Press</span>
            </label>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-bold">Kilos:</label>
                <input type="number" class="w-full border-2 p-3 rounded-lg outline-none focus:border-[#0099cc]">
            </div>
            <div>
                <label class="block font-bold">Payment Method:</label>
                <select id="payment_method" class="w-full border-2 p-3 rounded-lg outline-none focus:border-[#0099cc]" onchange="toggleGcash()">
                    <option value="cash">Cash</option>
                    <option value="gcash">GCash</option>
                </select>
            </div>
        </div>

        <div id="gcash_box" class="hidden bg-blue-50 p-4 rounded-lg border-2 border-blue-200">
            <p class="text-sm font-bold text-blue-800 mb-2">GCash Payment: 0912-345-6789 (WashMe)</p>
            <input type="text" placeholder="Enter Reference Number/Code" class="w-full border-2 p-3 rounded-lg">
        </div>

        <div>
            <label class="block font-bold">Option:</label>
            <select id="delivery_option" class="w-full border-2 p-3 rounded-lg outline-none focus:border-[#0099cc]" onchange="toggleMap()">
                <option value="pickup">Self Pick-up</option>
                <option value="deliver">Delivery</option>
            </select>
        </div>

        <div id="address_box" class="hidden space-y-4">
            <label class="block font-bold">Delivery Location:</label>
            <div class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden relative">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126656.34751433292!2d125.53123847844005!3d7.240212792945224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327f%3A0xb53c121404169765!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1700000000000!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <textarea placeholder="Enter specific address details..." class="w-full border-2 p-3 rounded-lg outline-none focus:border-[#0099cc]"></textarea>
        </div>

        <a href="/track" class="block text-center w-full bg-[#cc2128] text-white font-bold py-4 rounded-lg hover:bg-red-700 shadow-lg transition">
            CONFIRM ORDER
        </a>
    </form>
</div>

<script>
    function toggleGcash() {
        var method = document.getElementById('payment_method').value;
        var box = document.getElementById('gcash_box');
        if(method == 'gcash') { box.classList.remove('hidden'); }
        else { box.classList.add('hidden'); }
    }

    function toggleMap() {
        var option = document.getElementById('delivery_option').value;
        var box = document.getElementById('address_box');
        if(option == 'deliver') { box.classList.remove('hidden'); }
        else { box.classList.add('hidden'); }
    }
</script>
@stop