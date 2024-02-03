<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User</title>
  <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="flex flex-no-wrap">
    <div class="min-h-screen border-r border-gray-100 sticky top-0 h-full bg-gray-100 z-20">
      <div class="relative top-0 min-h-screen bottom-0 flex items-center flex-col p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 cursor-pointer mt-4"
          width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#718096" fill="none"
          stroke-linecap="round" stroke-linejoin="round" onclick="sidebarHandler()">
          <path stroke="none" d="M0 0h24v24H0z" />
          <line x1="4" y1="6" x2="20" y2="6" />
          <line x1="4" y1="12" x2="20" y2="12" />
          <line x1="4" y1="18" x2="20" y2="18" />
        </svg>
        <ul aria-orientation="vertical" class="rounded py-8">
          <li
            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-1 hover:text-blue-700 focus:text-blue-700 focus:outline-none">
            <a href="{{url('/')}}">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"></path>
                <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                <rect x="14" y="14" width="6" height="6" rx="1"></rect>
              </svg>
            </a>
          </li>
          <li
            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-1 hover:text-blue-700 focus:text-blue-700 focus:outline-none flex items-center">
            <a href="{{route('login')}}">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <div
        class="absolute top-0 min-h-screen ml-10 flex items-start flex-col bg-gray-100 transition duration-150 ease-in-out hidden"
        id="mobile-nav">
        <svg xmlns="http://www.w3.org/2000/svg"
          class="opacity-0 pointer-events-none icon icon-tabler icon-tabler-menu-2 cursor-pointer mt-8" width="20"
          height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#718096" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <line x1="4" y1="6" x2="20" y2="6" />
          <line x1="4" y1="12" x2="20" y2="12" />
          <line x1="4" y1="18" x2="20" y2="18" />
        </svg>
        <ul aria-orientation="vertical" class="rounded py-8 pl-2 pr-32 whitespace-no-wrap">
          <li
            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-blue-700 focus:text-blue-700 focus:outline-none">
            <a href="{{url('/')}}" class="ml-2">Home</a>
          </li>
          <li
            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-2 hover:text-blue-700 focus:text-blue-700 focus:outline-none flex items-center">
            <a href="{{route('login')}}" class="ml-2">Login/Register</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="w-full">
      <div class="w-full px-6">
        <div class="lg:flex flex-wrap">
          <div class="py-10 lg:w-2/3 w-full sm:pr-6 sm:border-r border-gray-300">
            <a href="{{url('/')}}">
              <div class="flex items-center mb-6">
                <div
                  class="mr-3 w-6 h-6 rounded-full text-gray-500 border border-gray-500 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="18"
                    height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="15 6 9 12 15 18" />
                  </svg>
                </div>
                <h4 class="text-xl text-gray-900">User Details</h4>
              </div>
            </a>

            <div class="relative">
              <img class="h-56 shadow w-full object-cover object-center"
                src="https://tuk-cdn.s3.amazonaws.com/assets/components/grid_cards/gc_29.png" alt="" />
              <div
                class="inset-0 m-auto w-24 h-24 absolute bottom-0 -mb-12 xl:ml-10 rounded-full border-2 shadow border-white">
                <img class="w-full h-full overflow-hidden object-cover rounded-full"
                  src="{{$user['image']}}"
                  alt="" />
              </div>
            </div>
            <div class="flex justify-center xl:justify-end w-full pt-16 xl:pt-5">
              <div class="flex items-center">
                <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star"
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                  <path fill="currentColor"
                    d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                </svg>
                <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star"
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                  <path fill="currentColor"
                    d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                </svg>
                <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star"
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                  <path fill="currentColor"
                    d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                </svg>
                <svg class="w-4 mr-1 text-yellow-400 icon icon-tabler icon-tabler-star"
                  xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                  <path fill="currentColor"
                    d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                </svg>
                <svg class="w-4 text-gray-200 icon icon-tabler icon-tabler-star" xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" fill="none" d="M0 0h24v24H0z" />
                  <path fill="currentColor"
                    d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                </svg>
              </div>
            </div>
            <div class="pt-3 xl:pt-5 flex flex-col xl:flex-row items-start xl:items-center justify-between">
              <div class="xl:pr-6 w-full xl:w-2/3">
                <div
                  class="text-center xl:text-left mb-3 xl:mb-0 flex flex-col xl:flex-row items-center justify-between xl:justify-start">
                  <h2 class="mb-3 xl:mb-0 xl:mr-4 text-2xl text-gray-800 font-medium tracking-normal">
                      {{$user['username']}}
                  </h2>
                  <div class="text-sm bg-blue-500 text-white px-5 py-1 font-normal rounded-full">
                      {{$user['signature']}}
                  </div>
                </div>
                <p class="text-center xl:text-left mt-2 text-sm tracking-normal text-gray-600 leading-5">
                    {{$user['bio']}}
                </p>
              </div>
              <div class="w-full xl:w-1/3 flex-col md:flex-row justify-center xl:justify-end flex xl:pl-6">
                <div class="flex items-center justify-center xl:justify-start mt-1 md:mt-0 mb-5 md:mb-0">
                  <div
                    class="ml-5 rounded-full bg-green-200 text-green-500 text-sm px-6 py-2 flex justify-center items-center">
                    Available
                  </div>
                </div>
                <button
                  class="focus:outline-none ml-0 md:ml-5 bg-white transition duration-150 ease-in-out hover:bg-gray-100 rounded text-gray-800 px-3 md:px-6 py-2 text-sm border border-gray-800">
                  Follow
                </button>
              </div>
            </div>
            <div class="mt-3 sm:flex items-center">
              <p class="py-1 px-2 text-xs text-gray-600 bg-gray-100 sm:mr-3 sm:mt-0 mt-1">
                Investments
              </p>
              <p class="py-1 px-2 text-xs text-gray-600 bg-gray-100 sm:mr-3 sm:mt-0 mt-1">
                Financial Modeling
              </p>
              <p class="py-1 px-2 text-xs text-gray-600 bg-gray-100 sm:mr-3 sm:mt-0 mt-1">
                Budget
              </p>
              <p class="py-1 px-2 text-xs text-gray-600 bg-gray-100 sm:mr-3 sm:mt-0 mt-1">
                Business Strategy
              </p>
              <p class="py-1 px-2 text-xs text-gray-600 bg-gray-100 sm:mt-0 mt-1">
                Audit & Assurance
              </p>
            </div>

            <hr class="mt-4 mb-10 border-t border-gray-300" />

            <h3 class="text-xl text-gray-900 mb-6">
              Recent posts by Marshall Mathers
            </h3>
            <div class="mb-6 bg-white w-full border-r-4 border-blue-500 px-4 pt-5 pb-8 shadow-md">
              <p class="mb-3 text-gray-600 text-sm">Marketing</p>
              <div class="mb-3 sm:flex items-center justify-between">
                <div class="pr-6 w-full md:w-3/5">
                  <h4 class="text-gray-800 font-medium mb-2">
                    Introduction to Consumer Behavior
                  </h4>
                  <p class="text-sm text-gray-600">
                    Explores the introductory areas of investment banking in
                    the modern day and age
                  </p>
                </div>
                <div class="w-full md:w-2/5 sm:mt-0 mt-4">
                  <ul class="flex items-center">
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 icon icon-tabler icon-tabler-clock"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 15 15" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 hours, 30 minutes</p>
                    </li>
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-file-horizontal" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M16 5v4a1 1 0 0 0 1 1h4" />
                        <path d="M3 7v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-7l-5 -5h-11a2 2 0 0 0 -2 2z" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 modules</p>
                    </li>
                  </ul>
                  <ul class="flex items-center mt-3">
                    <li class="text-gray-600 flex items-center text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-calendar-event" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <rect x="4" y="5" width="16" height="16" rx="2" />
                        <line x1="16" y1="3" x2="16" y2="7" />
                        <line x1="8" y1="3" x2="8" y2="7" />
                        <line x1="4" y1="11" x2="20" y2="11" />
                        <rect x="8" y="15" width="2" height="2" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>17 Aug - 19 Sept</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mb-6 bg-white w-full border-r-4 border-blue-500 px-4 pt-5 pb-8 shadow-md">
              <p class="mb-3 text-gray-600 text-sm">Marketing</p>
              <div class="mb-3 sm:flex items-center justify-between">
                <div class="pr-6 w-full md:w-3/5">
                  <h4 class="text-gray-800 font-medium mb-2">
                    Introduction to Consumer Behavior
                  </h4>
                  <p class="text-sm text-gray-600">
                    Explores the introductory areas of investment banking in
                    the modern day and age
                  </p>
                </div>
                <div class="w-full md:w-2/5 sm:mt-0 mt-4">
                  <ul class="flex items-center">
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 icon icon-tabler icon-tabler-clock"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 15 15" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 hours, 30 minutes</p>
                    </li>
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-file-horizontal" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M16 5v4a1 1 0 0 0 1 1h4" />
                        <path d="M3 7v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-7l-5 -5h-11a2 2 0 0 0 -2 2z" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 modules</p>
                    </li>
                  </ul>
                  <ul class="flex items-center mt-3">
                    <li class="text-gray-600 flex items-center text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-calendar-event" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <rect x="4" y="5" width="16" height="16" rx="2" />
                        <line x1="16" y1="3" x2="16" y2="7" />
                        <line x1="8" y1="3" x2="8" y2="7" />
                        <line x1="4" y1="11" x2="20" y2="11" />
                        <rect x="8" y="15" width="2" height="2" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>17 Aug - 19 Sept</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="mb-6 bg-white w-full border-r-4 border-gray-800 px-4 pt-5 pb-8 shadow-md">
              <p class="mb-3 text-gray-600 text-sm">Marketing</p>
              <div class="mb-3 sm:flex items-center justify-between">
                <div class="pr-6 w-full md:w-3/5">
                  <h4 class="text-gray-800 font-medium mb-2">
                    Introduction to Consumer Behavior
                  </h4>
                  <p class="text-sm text-gray-600">
                    Explores the introductory areas of investment banking in
                    the modern day and age
                  </p>
                </div>
                <div class="w-full md:w-2/5 sm:mt-0 mt-4">
                  <ul class="flex items-center">
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 icon icon-tabler icon-tabler-clock"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 15 15" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 hours, 30 minutes</p>
                    </li>
                    <li class="text-gray-600 flex items-center text-xs mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-file-horizontal" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M16 5v4a1 1 0 0 0 1 1h4" />
                        <path d="M3 7v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-7l-5 -5h-11a2 2 0 0 0 -2 2z" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>3 modules</p>
                    </li>
                  </ul>
                  <ul class="flex items-center mt-3">
                    <li class="text-gray-600 flex items-center text-xs">
                      <svg xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 icon icon-tabler icon-tabler-calendar-event" width="20" height="20"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <rect x="4" y="5" width="16" height="16" rx="2" />
                        <line x1="16" y1="3" x2="16" y2="7" />
                        <line x1="8" y1="3" x2="8" y2="7" />
                        <line x1="4" y1="11" x2="20" y2="11" />
                        <rect x="8" y="15" width="2" height="2" />
                      </svg>
                      <span class="mx-2">|</span>
                      <p>17 Aug - 19 Sept</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="py-10 lg:w-1/3 w-full md:pl-6">
            <div class="flex items-center justify-between mb-6">
              <h4 class="text-gray-900 text-xl font-medium">Statistics</h4>
              <a class="text-blue-500 text-sm font-bold cursor-pointer">View All</a>
            </div>
            <div class="mb-6 flex items-center">
              <div>
                <h5 class="mb-3 text-green-500 font-light text-3xl">92%</h5>
                <p class="text-gray-900">Success Rate</p>
              </div>
              <div class="md:ml-16 lg:ml-64 ml-8">
                <h5 class="mb-3 text-green-500 font-light text-3xl">16</h5>
                <p class="text-gray-900">Courses Taught</p>
              </div>
            </div>
            <hr class="my-8 border-t border-gray-300" />
            <div class="flex items-center justify-between mb-6">
              <h4 class="text-gray-900 text-xl font-medium">Education</h4>
              <a class="text-blue-500 text-sm font-bold cursor-pointer">View All</a>
            </div>
            <div class="mb-6 flex items-center">
              <img src="./assets/images/uni.png" />
              <div class="ml-5">
                <h5 class="mb-2 text-gray-800">HND Marketing</h5>
                <p class="text-gray-600">Bethel University</p>
              </div>
            </div>
            <div class="mb-6 flex items-center">
              <img src="./assets/images/uni.png" />
              <div class="ml-5">
                <h5 class="mb-2 text-gray-800">HND Marketing</h5>
                <p class="text-gray-600">Bethel University</p>
              </div>
            </div>
            <div class="mb-6 flex items-center">
              <img src="./assets/images/uni.png" />
              <div class="ml-5">
                <h5 class="mb-2 text-gray-800">HND Marketing</h5>
                <p class="text-gray-600">Bethel University</p>
              </div>
            </div>
            <div class="pt-16">
              <h4 class="mb-5 font-medium text-xl text-gray-900">
                What I do
              </h4>
              <p class="text-sm text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Et quidem faciunt, ut de voluptate ponit, quod summum bonum
                sit aut rerum et quidem
              </p>
            </div>
            <div class="pt-16">
              <h4 class="mb-5 font-medium text-xl text-gray-900">
                Achievements
              </h4>
              <p class="text-sm text-gray-600 mb-4">
                5 years Marketing and Advertising at a Fortune 50 Industrial
                company.
              </p>
              <p class="text-sm text-gray-600 mb-4">
                5 years Marketing and Advertising at a Fortune 50 Industrial
                company.
              </p>
              <p class="text-sm text-gray-600 mb-4">
                5 years Marketing and Advertising at a Fortune 50 Industrial
                company.
              </p>
              <p class="text-sm text-gray-600 mb-4">
                5 years Marketing and Advertising at a Fortune 50 Industrial
                company.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./assets/scripts/script.js"></script>
</body>

</html>
