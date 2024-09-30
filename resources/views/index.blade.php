@extends('layouts.app')

@section('title', 'Jollibee')

@section('content')
    <!-- Header Section -->
    <header class="bg-red-600 shadow">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10">
            <h1 class="text-2xl font-bold text-white">Jollibee</h1>
        </div>

        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-6 text-white">

                <!-- Home Page Link -->
                <li><a href="#" class="hover:text-amber-100">Home Page</a></li>

                <!-- Contact Us Link -->
                <li><a href="#" class="hover:text-amber-100">Contact Us</a></li>

                <!-- About Us Link -->
                <li><a href="#" class="hover:text-amber-100">About Us</a></li>

                <!-- Projects Dropdown -->
                <li class="relative">
                    <a href="#" onclick="toggleDropdown('projectsDropdown')" class="hover:text-amber-100">Projects</a>
                    <ul id="projectsDropdown" class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded shadow-lg hidden">
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Web Development</a></li>
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Mobile Apps</a></li>
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Machine Learning</a></li>
                    </ul>
                </li>

                <!-- Clients Dropdown -->
                <li class="relative">
                    <a href="#" onclick="toggleDropdown('clientsDropdown')" class="hover:text-amber-100">Clients</a>
                    <ul id="clientsDropdown" class="absolute left-0 mt-2 w-48 bg-white text-gray-700 rounded shadow-lg hidden">
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Client A</a></li>
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Client B</a></li>
                        <li class="px-4 py-2 hover:bg-gray-200"><a href="#">Client C</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        </div>
    </header>

    <!-- Main content -->
    <main class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold">Welcome {{ $name }}  to Jollibee!</h2>
        <p class="mt-4">This is where your content goes.</p>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
        &copy; 2024 My Website. All rights reserved.
        </div>
    </footer>
@endsection
