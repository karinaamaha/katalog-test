<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT SAP Enterprise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans m-0 p-0">
    <header class="bg-red-600 text-white py-2 px-8 flex justify-between items-center fixed w-full z-20 top-0 start-0">
        <div class="text-2xl font-bold pl-4">
            <img src="../image/Logo.png" alt="Company Logo" class="h-8">
        </div>
        <nav class="flex items-center gap-8">
            <input type="search" placeholder="Search" class="py-2 px-4 rounded-full border-none w-96 mr-8">
            <a href="#" class="text-white no-underline text-sm">Home</a>
            <a href="#" class="text-white no-underline text-sm">Products</a>
            <a href="#" class="text-white no-underline text-sm pr-4">About Us</a>
        </nav>
    </header>

    <main class="h-full p-8">
    <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-1/2">
            <img src="../image/foto.png" alt="Product" class="w-full rounded-lg mb-4">
             <div class="flex overflow-x-auto gap-2">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
                <img src="../image/foto.png" alt="Thumbnail" class="w-16 h-16 object-cover rounded-md border border-gray-300">
            </div>
        </div>

        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold mb-2">Lorem Ipsum Dolor Sit Amet</h1>
            <p class="text-gray-600 mb-4">Category</p>
            
            <p class="text-3xl font-bold text-red-600 mb-4">Rp 1,000,000<span class="text-sm text-gray-500">/day</span></p>
            
            <div class="mb-4">
                <p class="font-semibold mb-2">Duration</p>
                <div class="flex items-center">
                    <button class="bg-gray-200 px-3 py-1 rounded-l">-</button>
                    <input type="text" value="1" class="w-12 text-center border-t border-b border-gray-300">
                    <button class="bg-gray-200 px-3 py-1 rounded-r">+</button>
                </div>
            </div>
            
            <p class="text-gray-700 mb-6">
                Lorem posuere et sed augue nulla eget augue. Aliquet id sed commodo non
                blandit vitae ipsum. Tempus pellentesque adipiscing ornare porttitor enim
                lacus fames sed. Quam auto diam in diam vitae et donec vel. Justo ac amet
                bibendum pharetra vitae odio posuere.
            </p>
            
            <button class="w-full bg-red-600 text-white py-3 rounded-full font-semibold hover:bg-red-700 transition duration-300">
                Add to Cart
            </button>
        </div>
    </div>

    
</main>