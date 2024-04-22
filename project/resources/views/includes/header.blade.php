<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-900">

<header class="bg-white dark:bg-gray-900">
    <nav class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center p-6 mx-auto">
            <a href="#" class="mx-auto ">
                <img class="h-20 rounded-[100%]" src="{{asset('image/ds.jpg')}}" alt="sds">
            </a>

            <div class="flex items-center justify-center mt-6 text-gray-600 capitalize dark:text-gray-300">
                <a href="/" class="mx-2 text-gray-800  dark:text-gray-200 sm:mx-6">home</a>

                <a href="{{route('courses')}}" class="mx-2 border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 sm:mx-6">courses</a>

                <a href="{{route('licenses')}}" class="mx-2 border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 sm:mx-6">license</a>

                <a href="#" class="mx-2 border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 sm:mx-6">about us</a>
                @auth
                

<div class="h-10 w-10 overflow-hidden rounded-full" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" >
    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
        class="h-10 w-10  text-white bg-gray-500 stroke-current">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
    </svg>
</div>
<!-- Dropdown menu -->
<div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
      <div>{{Auth::user()->Firstname}} {{Auth::user()->lastname}}</div>
      <div class="font-medium truncate">{{Auth::user()->email}}</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
      <li>
        <a href="{{route('student', Auth::id())}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">profil</a>
      </li>
@if (Auth::user()->role==2)
<li>
        <a href="{{route('PDashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Schedule
        </a>
      </li>

@elseif(Auth::user()->role==1)
<li>
        <a href="{{route('Dashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard
        </a>
      </li>
      @endif
      
      <li>
        <button data-modal-target="ajouter" data-modal-toggle="ajouter" class="block px-4 py-2 w-full text-start hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">add school
        </button>
      </li>
    </ul>
    <div class="py-1">
      <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>

                    @else
                    <a href="{{route('login')}}" type="button" class="mx-2 border-b-2 bg-bleu-500 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 sm:mx-6">
                   login
                </a>
                @endauth
                
             </div>
        </div>
    </nav>
    @include('modals.Aschool')
</header>