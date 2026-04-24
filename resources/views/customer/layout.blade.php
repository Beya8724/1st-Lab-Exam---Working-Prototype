<!DOCTYPE html>
<html>
<head>
    <title>WashMe Laundromat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-[#0099cc] p-4 text-white shadow-md">
        <div class="container mx-auto font-bold text-xl">WashMe</div>
    </nav>

    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>