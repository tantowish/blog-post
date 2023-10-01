
@extends('layouts.main')

@section('container')
    
<section class="flex flex-wrap px-8 py-14 mx-auto max-w-6xl lg:py-24 items-center">
    <div data-aos="fade-up-right" data-aos-duration="500" class="w-full lg:w-1/2 text-center md:px-8 lg:px-4 lg:text-start mb-5 lg:mb-0">
        <h4 class="font-semibold text-slate-600 mb-2 lg:mb-0 lg:text-xl ">About Us</h4>
        <h1 class="font-bold text-3xl mb-4 lg:mb-5 lg:text-5xl">Elevating Web <span class="text-blue-500">Blogging </span>Experiences</h1>
        <p class="mb-5 ">Our mission is to elevate web blogging experiences by providing a platform that empowers bloggers to share their stories, insights, and passions with the world. We believe in the power of words to inspire, inform, and connect people, and we're here to support bloggers every step of the way as they craft and share their unique voices on the web.</p>
        <button data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200" type="button" class="w-full lg:w-1/3 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2.5 lg:py-3 text-center mr-2 mb-2">Sing Up for Free</button>
    </div>
    <div data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="200"  class="w-full lg:w-1/2">
        <img src="{{ asset('img/about/main.svg') }}" alt="">
    </div>
</section>

<section class="py-16 px-8  bg-blue-50">
    <div class="flex flex-wrap max-w-6xl lg:p-8 mx-auto text-center lg:text-start">
        <div data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200" class="w-full lg:w-1/2 text-3xl font-bold lg:text-4xl lg:pr-28 mb-5 lg:mb-0 px-4  ">Built for <span class="text-blue-500">bloggers</span>, driven by passion</div>
        <div data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="400" class="w-full lg:w-1/2 md:px-8 lg:px-4">
            <p class="mb-3">We believe in the power of words to inspire, inform, and connect. Our platform is dedicated to elevating web blogging experiences, empowering bloggers to share their unique voices, and fostering a vibrant online community.
            </p>
            <p>We're committed to providing bloggers with the tools and support they need to create meaningful content and engage with their audience effectively.
            </p>
        </div>
    </div>
    <div class="max-w-6xl mx-auto">
        <hr class="h-[1px] my-8 bg-blue-900 border-0 md:mx-8 lg:mx-4 dark:bg-gray-700">
        <div class="flex flex-wrap gap-4 lg:text-start">
            <div data-aos="zoom-in" data-aos-duration="500" class="max-w-[350px] mx-auto px-4 py-8  rounded-xl text-center hover:bg-white group">
                <h1 class="text-3xl font-bold lg:text-5xl mb-3">{{ $countPost }}+</h1>
                <p class="font-semibold text-slate-800">Articles Posted on Our Website for You to Explore!</p>
            </div>
            <div data-aos="zoom-in" data-aos-duration="500" class="max-w-[350px] mx-auto px-4 py-8  rounded-xl text-center hover:bg-white group ">
                <h1 class="text-3xl font-bold lg:text-5xl mb-3">{{ $countUser }}+</h1>
                <p class="font-semibold text-slate-800">Blogger have been registered until this day, we'll wait for you</p>
            </div>
            <div data-aos="zoom-in" data-aos-duration="500" class="max-w-[350px] mx-auto px-4 py-8  rounded-xl text-center hover:bg-white group ">
                <h1 class="text-3xl font-bold lg:text-5xl mb-3">{{ $countCategory }}+</h1>
                <p class="font-semibold text-slate-800">Discover a Variety of Categories Awaiting Your Exploration on Our Website</p>
            </div>
        </div>
        
    </div>

   
</section>

@endsection

