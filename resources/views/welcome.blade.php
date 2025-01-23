@extends('layouts.master')
@section('content')
    <!-- Home Section -->
    <section class="container pt-16 mx-auto home" id="home">
        <div class="bg-blue-500">
            {{-- Hero Section --}}
            <div class="flex justify-center max-w-screen-xl py-12 mx-auto md:py-28">
                <div class="flex flex-col justify-center mx-12 md:w-3/5 md:ms-20 md:mx-0">
                    <h1 class="mb-8 text-4xl font-extrabold text-center text-white md:text-start font-car md:text-7xl">
                        <span class="text-yellow-300">EASY</span> AND FAST WAY TO RENT YOUR CAR
                    </h1>
                    <div class="md:w-3/5 md:hidden">
                        <img loading="lazy" src="{{ asset('img/eyr.jpg') }}" alt="Ford Mustang car image" class="rounded-lg shadow-2xl transform hover:scale-110 transition duration-300">
                    </div>
                    <p class="mx-8 text-justify md:mx-0 text-white opacity-80 leading-relaxed">
                        Whether you're planning a weekend getaway or a cross-district adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.
                    </p>
                    <div class="flex justify-center mt-12 md:justify-start md:w-2/3 me-12 md:-ms-12">
                        <a href="{{ route('car') }}">
                            <button class="w-40 py-3 px-5 font-bold text-white bg-gradient-to-r from-teal-400 to-teal-600 rounded-lg shadow-md hover:bg-teal-700 transition duration-300 transform hover:scale-105">Browse Cars</button>
                        </a>
                        <a href="{{ route('contact') }}">
                            <button class="w-40 py-3 px-5 text-teal-500 border-2 border-teal-500 rounded-lg shadow-md hover:bg-teal-500 hover:text-white transition duration-300 transform hover:scale-105 ml-4">Contact Us</button>
                        </a>
                    </div>
                </div>
                <div class="hidden md:w-3/5 md:block">
                    <img loading="lazy" src="{{ asset('img/eyr.jpg') }}" class="rounded-lg shadow-2xl w-full h-auto mx-6 transform hover:scale-110 transition duration-300" alt="Ford Mustang">
                </div>
            </div>
        </div>
    </section>

    <!-- Sales Section -->
    <section class="container p-8 mx-auto sales" id="sales">
        <div class="flex justify-center align-middle mb-12">
            <hr class="mt-8 h-0.5 w-1/5 bg-yellow-500">
            <p class="px-4 mx-8 text-lg font-semibold text-teal-600">What We Offer</p>
            <hr class="mt-8 h-0.5 w-1/5 bg-yellow-500">
        </div>
        <div class="grid gap-8 md:grid-cols-3">
            <!-- Box 1 -->
            <div class="p-6 transition-transform transform border rounded-lg shadow-lg hover:scale-105 hover:shadow-2xl hover:bg-teal-50">
                <img src="{{ asset('img/DCT.jpg') }}" alt="Dreams Come True" class="rounded-lg mb-4 shadow-md hover:scale-105 transform transition duration-300">
                <h3 class="mb-2 text-2xl font-semibold text-teal-600">Make Your Dream True</h3>
                <p class="text-gray-700">At SK CAR RENTAL, we believe that every journey begins with a dream...</p>
            </div>
            <!-- Box 2 -->
            <div class="p-6 transition-transform transform border rounded-lg shadow-lg hover:scale-105 hover:shadow-2xl hover:bg-teal-50">
                <img src="{{ asset('img/mem.jpg') }}" alt="Membership" class="rounded-lg mb-4 shadow-md hover:scale-105 transform transition duration-300">
                <h3 class="mb-2 text-2xl font-semibold text-teal-600">Start Your Membership</h3>
                <p class="text-gray-700">Welcome to the next level of car rental experience...</p>
            </div>
            <!-- Box 3 -->
            <div class="p-6 transition-transform transform border rounded-lg shadow-lg hover:scale-105 hover:shadow-2xl hover:bg-teal-50">
                <img src="{{ asset('img/eyr.jpg') }}" alt="Enjoy your ride" class="rounded-lg mb-4 shadow-md hover:scale-105 transform transition duration-300">
                <h3 class="mb-2 text-2xl font-semibold text-teal-600">Enjoy Your Ride</h3>
                <p class="text-gray-700">Every turn, every stop, every mile – they all contribute to the tapestry of memories...</p>
            </div>
        </div>
    </section>

@endsection
