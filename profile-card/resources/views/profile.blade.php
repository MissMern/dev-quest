@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
            <img src="{{ Auth::user()->pic ? asset('storage/' . Auth::user()->pic) : 'https://i.pravatar.cc/300' }}"
                 alt="Profile Picture"
                 class="rounded-full w-32 h-32 object-cover border-4 border-primary">
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">{{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>

            @if(Auth::user()->bio)
                <p class="mt-2 text-gray-600 text-sm">{{ Auth::user()->bio }}</p>
            @else
                <p class="mt-2 text-gray-400 text-sm italic">No bio added yet</p>
            @endif

            @php
    $socialLinks = json_decode(Auth::user()->links, true);
@endphp

<div class="card-actions justify-center mt-4">
    @if(!empty($socialLinks['twitter']))
    <a href="{{ $socialLinks['twitter'] }}" target="_blank" class="btn btn-sm btn-outline" aria-label="X">
        <!-- X (Twitter) SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
  <path d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z"/>
</svg>

    </a>
@endif


    @if(!empty($socialLinks['instagram']))
        <a href="{{ $socialLinks['instagram'] }}" target="_blank" class="btn btn-sm btn-outline" aria-label="Instagram">
            <!-- Instagram SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
  <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"/>
</svg>


        </a>
    @endif

    @if(!empty($socialLinks['facebook']))
        <a href="{{ $socialLinks['facebook'] }}" target="_blank" class="btn btn-sm btn-outline" aria-label="Facebook">
            <!-- Facebook SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50">
  <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z"/>
</svg>

    @endif
</div>

        </div>
    </div>
</div>
@endsection
