<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   E-Commerce Product
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
        }
  </style>
 </head>
 <body class="bg-[#f9f5f3] text-[#333]">
  <header class="flex justify-between items-center py-4 px-8">
   <div class="text-2xl font-bold">
    E-Commerce Pruduct
   </div>
   <nav class="flex space-x-8 mx-auto">
    <a class="text-lg" href="{{ route('products.index') }}">
     Products
    </a>
    <a class="text-lg" href="{{ route('about') }}">
     About
    </a>
   </nav>
   <button class="border border-[#e74c3c] text-[#e74c3c] px-4 py-2 rounded">
    Login
   </button>
  </header>
  <main class="flex justify-between items-center px-8 py-16">
   <div class="max-w-lg">
    <h1 class="text-5xl font-bold leading-tight">
     Website untuk
     <span class="text-[#e74c3c]">
      E-Commerce
     </span>
     <span class="text-[#6b46c1]">
      Product
     </span>
    </h1>
    <p class="mt-6 text-lg">
        "Temukan kualitas dan gaya dalam satu produk yang dirancang dengan detail sempurna untuk memenuhi kebutuhan Anda sehari-hari. Dengan kualitas unggulan dan keahlian desain, produk ini memastikan kepuasan dan performa yang tahan lama."
    </p>
    <div class="mt-8 flex space-x-4">
     <button class="bg-[#e74c3c] text-white px-6 py-3 rounded">
      Start Building
     </button>
     <button class="border border-[#333] text-[#333] px-6 py-3 rounded">
      Contact Sales
     </button>
    </div>
   </div>
   </div>
  </main>
 </body>
</html>
