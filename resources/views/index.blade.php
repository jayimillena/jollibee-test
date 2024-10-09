<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JoliBini</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <style type="text/tailwindcss">
        .btn {
            @apply bg-red-500 rounded-md p-2 text-white w-full hover:bg-yellow-600;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-red-500 p-4">
        <nav class="container mx-auto flex justify-between items-center">
            <!-- Logo on the left -->
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
            </div>
            <!-- Navigation Links on the right -->
            <ul class="flex space-x-6 text-white">
                <li><a href="" class="hover:underline">Home</a></li>
                <li><a href="" class="hover:underline">About us</a></li>
                <li><a href="" class="hover:underline">Site map</a></li>
                <!-- Our Projects with Dropdown -->
                <li class="relative group">
                    <a href="#" class="hover:underline">Our projects</a>
                    <!-- Dropdown Menu -->
                    <ul class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">
                                Project 1
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">
                                Project 2
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">
                                Project 3
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main Section -->
    <main class="container mx-auto py-8">
        <div class="grid grid-cols-4 gap-2">
            <div class="card p-4 rounded-md border shadow-lg flex flex-col gap-2 justify-center items-center">
                <img src="{{ asset('images/1pc-chickenjoy-solo.png') }}" alt="">
                <h1 class="text-3xl font-bold text-center">1 pcs chicken</h1>
                <p class=" text-center">Chicken with gravy.</p>
                <div class="w-full">
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="card p-4 rounded-md border shadow-lg flex flex-col gap-2 justify-center items-center">
                <img src="{{ asset('images/yum.png') }}" alt="">
                <h1 class="text-3xl font-bold text-center">Yumberger</h1>
                <p class=" text-center">Langhap sarap.</p>
                <div class="w-full">
                    <button class="btn">Order</button>
                </div>
            </div>
            <div class="card p-4 rounded-md border shadow-lg flex flex-col gap-2 justify-center items-center">
                <img src="{{ asset('images/fries.png') }}" alt="">
                <h1 class="text-3xl font-bold text-center">Fries</h1>
                <p class=" text-center">French fries.</p>
                <div class="w-full">
                    <button class="btn">Order</button>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-red-500 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>123 Main Street, Anytown, Country</p>
            <p>Copyright &copy; 2024 JoliBini. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
