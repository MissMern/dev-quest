@extends('layouts.app')
@section('content')


<div
  class="hero min-h-screen"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
>
  <div class="hero-overlay">
    
  </div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
    <h1 class="mb-5 text-5xl font-bold">Karibu Kenya </h1>
    <p class="mb-5">
      Discover the beauty, culture, and adventure that Kenya has to offer. From breathtaking landscapes to vibrant cities, your journey begins here.
    </p>
    <label class="input bg-transparent border border-white/50">
      <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke-width="2.5"
        fill="none"
        stroke="currentColor"
        >
        <circle cx="11" cy="11" r="8"></circle>
        <path d="m21 21-4.3-4.3"></path>
        </g>
      </svg>
      <input type="search" required placeholder="Search" class="bg-transparent text-white placeholder-white/70" />
    </label>
    <button class="btn btn-primary bg-transparent border border-white/50 text-white hover:bg-white/10">Book With Us</button>
    
    </div>
    
  </div>
</div>
<h1 class="mt-10 text-center font-playfairdisplay text-4xl font-bold">Top Destinations</h1>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 my-8">
    @foreach ($destinations as $destination)
        <div class="card bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            
            <!-- Image -->
            <figure class="relative">
                <img src="{{ asset($destination->image) }}" 
                     alt="{{ $destination->title }}" 
                     class="w-full h-56 object-cover">
                <!-- Popularity badge -->
                <span class="absolute top-4 right-4 bg-yellow-500 text-white text-sm font-semibold px-3 py-1 rounded-full shadow">
                    {{ $destination->popularity }}%
                </span>
            </figure>

            <!-- Card Body -->
            <div class="p-6 text-center">
                <h2 class="text-xl font-bold text-gray-800 mb-2">
                    {{ $destination->title }}
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    {{ Str::limit($destination->desc, 100) }}
                </p>

                <!-- Location -->
                <div class="flex items-center justify-center text-gray-500 text-sm mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M17.657 16.657L13.414 20.9a1 1 0 01-1.414 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    {{ $destination->city }}, {{ $destination->country }}
                </div>

                <!-- Buttons -->
                <div class="flex justify-center gap-3">
                    <button class="btn btn-primary btn-sm">
                        Add to Wishlist
                    </button>
                    <button class="btn btn-outline btn-sm">
                        View Details
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!--Testimonials-->
<h1 class="mt-10 text-center font-playfairdisplay text-4xl font-bold">Testimonials</h1>
<div class="flex flex-col md:flex-row justify-center items-stretch gap-8 my-8">
    <div class="card bg-base-100 shadow-sm p-6 w-full md:w-80">
        <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-12 h-12 rounded-full border-2 border-primary" />
            <div>
                <h3 class="font-bold text-lg">Amina N.</h3>
                <span class="text-sm text-gray-500">Nairobi</span>
            </div>
        </div>
        <p class="text-gray-700">"An unforgettable experience! Kenya's landscapes and people are truly amazing. Highly recommend booking with Trvl."</p>
    </div>
    <div class="card bg-base-100 shadow-sm p-6 w-full md:w-80">
        <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-12 h-12 rounded-full border-2 border-primary" />
            <div>
                <h3 class="font-bold text-lg">John K.</h3>
                <span class="text-sm text-gray-500">Mombasa</span>
            </div>
        </div>
        <p class="text-gray-700">"The booking process was smooth and the destinations exceeded my expectations. Will travel again!"</p>
    </div>
    <div class="card bg-base-100 shadow-sm p-6 w-full md:w-80">
        <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-12 h-12 rounded-full border-2 border-primary" />
            <div>
                <h3 class="font-bold text-lg">Grace W.</h3>
                <span class="text-sm text-gray-500">Kisumu</span>
            </div>
        </div>
        <p class="text-gray-700">"Loved every moment! The team was helpful and the adventures were breathtaking."</p>
    </div>
</div>

@endsection