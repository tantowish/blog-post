<nav class="bg-white max-w-6xl lg:px-8 mx-auto dark:bg-gray-900 w-full shadow-sm z-[999]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="\" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Blog<span class="text-blue-500">post</span></span>
        </a>
        <div class="flex  md:order-2">
            @auth
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="cursor-pointer text-base font-medium">welcome, <span class="cursor-pointer text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br mr-3">{{ auth()->user()->name }}</span></button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                      <li>
                        <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <form action="/logout" method="post" >
                            @csrf
                            <button type="submit" class="w-full text-start block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" >Logout</button>
                        </form>
                      </li>
                    </ul>
                </div>
                
            @else
            <a href="\login">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2 text-center mr-2 ">Login</button>
            </a>
            @endauth
            <span class="sr-only">Open main menu</span>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-8 h-8 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a id="navbar" href="/" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
            </li>
            <li>
            <a id="navbar" href="/about" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
            <a id="navbar" href="/posts" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
            </li>
            <li>
            <a id="navbar" href="/categories" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Category</a>
            </li>
        </ul>
        </div>
    </div>
  </nav>
  
