<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Post a new thread</title>
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
            <a href="{{url('/')}}" class="ml-2">Login/Register</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="flex flex-row w-full">

        <div class="flex flex-col lg:w-full items-center justify-center mx-auto md:h-screen lg:py-0">
          <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Post a new thread
              </h1>
                @if($errors->count() > 0)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        @foreach ($errors->all() as $error)
                            <span class="font-medium">{{ $error }}
                            </span>
                        @endforeach
                    </div>
                @endif
              <form class="space-y-4 md:space-y-6" action="{{route('create-thread')}}" method="post">
                  @csrf
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="title" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Thread title" required="" />
                </div>

                <div>
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                    <textarea name="body" id="body" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Thread body" required=""></textarea>
                </div>

                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit post</button>
              </form>
            </div>
          </div>
        </div>
    </div>



  </div>
  <script src="./assets/scripts/script.js"></script>
</body>

</html>
