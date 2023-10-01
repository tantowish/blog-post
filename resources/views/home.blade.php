@extends('layouts.main')

@section('container')

<section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
    <div data-aos="fade-up" data-aos-duration="500" class="py-16 px-8 mx-auto max-w-screen-xl text-center lg:py-36 relative">
        <a href="\posts" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">New article has been added</span> 
            <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </a>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Discovering the Digital World</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200"> Dive into a treasure trove of informative and engaging stories that illuminate the digital landscape.</p>
        <form data-aos="zoom-in" data-aos-duration="500" data-aos-delay="300" class="w-full max-w-md mx-auto" method="get" action="{{ route('register.home') }}">
            @csrf   
            <label for="default-email"  class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                </div>
                <input type="email" id="email" name="email" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email here...">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
            </div>
        </form>
    </div>
</section>

<section class="bg-blue-50 px-8 py-12 mx-auto lg:py-16">
    <h1  data-aos="fade-up" data-aos-duration="500"data-aos-delay="100" class="w-full text-center font-bold text-blue-950 text-lg lg:text-xl mb-5 lg:mb-8">Supported by</h1>
    <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="100"  class="flex flex-wrap justify-center max-w-5xl mx-auto items-center gap-8">
        <img class="w-1/4 max-w-full h-auto" src="{{ asset('img/support/narasi.png') }}" alt="">
        <img class="w-1/3 max-w-full h-auto" src="{{ asset('img/support/detikNews.png') }}" alt="">
        <img class="w-1/4 max-w-full h-auto" src="{{ asset('img/support/liputan6.svg') }}" alt="">
    </div>
</section>



<section class="py-8 px-8 lg:px-36 lg:py-24 lg:mt-4">
    <div class="flex flex-wrap justify-center max-w-6xl mx-auto mb-10 lg:mb-16">
        <div data-aos="fade-up-left" data-aos-duration="500"  class="w-full md:px-16 lg:px-0 lg:w-1/2 lg:order-2">
            <img src="{{ asset('img/home/about.svg') }}" alt="">
        </div>
        <div data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200" class="w-full px-4 lg:px-8 lg:w-1/2 text-center lg:flex lg:flex-col lg:text-start justify-center -mt-4 mb-3 lg:mb-5">
            <h1 class="text-xl font-bold mb-3 lg:text-2xl lg:mb-5 text-blue-950">About <span class="text-blue-500">Us</span></h1>
            <p class="text-justify text-base md:px-8 lg:px-0  md:text-lg text-blue-900 mb-3 lg:mb-5">We're passionate about navigating the ever-evolving digital landscape and sharing our discoveries with you. Our team of tech enthusiasts, creatives, and storytellers is dedicated to providing insightful content that empowers you in the online world.</p>
            <a class="" href="\about">
                <button type="button" class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-3xl text-sm px-5 py-2.5 text-center mr-2 mb-2">Learn More</button>
            </a>
        </div>
    </div>
    <div class="flex flex-wrap justify-center max-w-6xl mx-auto">
        <div data-aos="fade-up-right" data-aos-duration="500" class="w-full md:px-16 lg:px-0 lg:w-1/2">
            <img src="{{ asset('img/home/categories.svg') }}" alt="">
        </div>
        <div data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="200" class="w-full px-4 lg:px-8 lg:w-1/2 text-center lg:flex lg:flex-col lg:text-start justify-center mb-3 lg:mb-5">
            <h1 class="text-xl font-bold mb-3 lg:text-2xl lg:mb-5 text-blue-500">Our <span class="text-blue-950">Categories</span></h1>
            <p class="text-justify text-base md:px-8 lg:px-0 md:text-lg text-blue-900 mb-3 lg:mb-5">Categories play a pivotal role in organizing and navigating the content of a blog. They serve as a structured system for classifying blog posts into distinct topics or subjects. </p>
            <a href="\categories">
                <button type="button" class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-3xl text-sm px-5 py-2.5 text-center mr-2 mb-2">Check Categories</button>
            </a>
        </div>
    </div>
</section>


<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="px-16 mx-auto max-w-screen-xl text-center py-20 lg:py-48">
        <h1 class="mb-8 lg:mb-12 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Start Blogging now</h1>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="\register" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="\posts" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Read blog
            </a>  
        </div>
    </div>
</section>

<script>
    AOS.init();
</script>



@endsection