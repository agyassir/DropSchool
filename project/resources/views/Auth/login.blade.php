<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 ">
    <header class="bg-white dark:bg-gray-900 mt-9">
        <nav class="bg-white dark:bg-gray-900">
            <div class="container flex flex-col items-center p-6 mx-auto">
                <a href="#" class="mx-auto ">
                    <svg fill="#ffffff" class="w-12 h-12 hover:fill-blue-800" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M7.713 4.552c0.573-0.333 1.167-0.631 1.787-0.891 1.307-0.557 2.656-0.875 4.047-1.016l1.5 1.699-0.697 1.755c-1.36 0.261-2.641 0.761-3.839 1.485l-0.26 0.156-0.235-2.313-2.303-0.88zM7.063 4.964l2.385 0.921 0.249 2.281c-1.291 0.948-2.301 2.161-3.020 3.64-0.068 0.131-0.131 0.261-0.188 0.396l-1.677-2.036-2.739 0.579c0.681-1.475 1.604-2.787 2.749-3.948 0.688-0.693 1.428-1.303 2.224-1.833zM22.771 21.036c0.26-0.432 0.469-0.869 0.641-1.323l2.583 3.136 4.339-0.937c-0.251 0.687-0.541 1.353-0.88 2.009-0.896 1.724-2.073 3.215-3.532 4.48-1.484 1.287-3.161 2.224-5.031 2.812-0.036 0.011-0.073 0.021-0.109 0.032l-3.213-2.719 0.839-3.699 0.067-0.025c1.839-0.803 3.276-2.043 4.297-3.781zM28.203 6.407c0.267 0.364 0.511 0.744 0.751 1.14 0.989 1.661 1.672 3.443 2.052 5.339 0.364 1.88 0.421 3.771 0.161 5.667-0.14 0.912-0.339 1.803-0.62 2.672l-4.339 0.932-2.599-3.145c0.303-1.156 0.339-2.36 0.079-3.609-0.303-1.484-0.959-2.756-1.939-3.803l4.677-0.557 1.745-4.635zM1.787 11.448l2.797-0.593 1.651 2.009c-0.527 1.448-0.641 2.948-0.38 4.505 0.057 0.448 0.156 0.876 0.276 1.292l-2.959-0.672-2.12 2.511c-0.255-1.115-0.375-2.249-0.375-3.407 0-1.937 0.359-3.801 1.072-5.599l0.021-0.052zM6.375 19.36c0.423 1.124 1.047 2.151 1.876 3.088 0.619 0.713 1.323 1.297 2.088 1.755l-2.937 1.683 0.161 3.817c-0.969-0.599-1.86-1.317-2.667-2.14-1.36-1.401-2.401-2.995-3.12-4.797-0.197-0.5-0.36-1-0.5-1.5l2.183-2.563 2.957 0.683zM10.973 24.552c0.631 0.317 1.308 0.557 2.027 0.719 1.609 0.375 3.183 0.313 4.703-0.188l-0.833 3.677 3.183 2.693c-1.588 0.416-3.213 0.593-4.875 0.536-1.943-0.063-3.808-0.473-5.589-1.235-0.479-0.203-0.937-0.427-1.385-0.676l-0.161-3.844zM27.755 5.817l-1.749 4.652-4.823 0.577c-0.141-0.12-0.281-0.24-0.433-0.339-1.583-1.203-3.364-1.901-5.337-2.104-0.464-0.036-0.901-0.036-1.324-0.036l1.683-4.303-3.635-4.14c1.099-0.12 2.181-0.136 3.276-0.12 0.656 0.021 1.301 0.068 1.948 0.151 0.905 0.12 1.796 0.317 2.681 0.563 1.876 0.532 3.584 1.375 5.125 2.573 0.973 0.744 1.833 1.588 2.588 2.525z"></path>
                        </g>
                    </svg> </a>
            </div>
        </nav>
    </header>
    <div class="w-full max-w-sm p-6 m-auto mx-auto rounded-lg shadow-md bg-gray-800">

    @if(session('error'))
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3">
        {{ session('error') }}
    </div>
@endif
        <form class="mt-6" action="{{route('login')}}" method="post">
            @csrf
            <div>
                <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Email')}}</label>
                <input type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mt-4">
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Password')}}</label>
                    <a href="{{route('password.request')}}" class="text-xs text-gray-600 dark:text-gray-400 hover:underline">Forget Password?</a>
                </div>

                <input type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full px-6 py-2.5 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    Sign In
                </button>
            </div>
        </form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/5"></span>

            <a href="#" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">
                or login with Social Media
            </a>

            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/5"></span>
        </div>

        <div class="flex items-center mt-6 -mx-2">
            <button type="button" class="flex items-center justify-center w-full px-6 py-2 mx-2 text-sm font-medium text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">
                <svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
                    <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z">
                    </path>
                </svg>

                <span class="hidden mx-2 sm:inline">Sign in with Google</span>
            </button>

            <a href="#" class="p-2 mx-2 text-sm font-medium text-gray-500 transition-colors duration-300 transform bg-gray-300 rounded-lg hover:bg-gray-200">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                    <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z">
                    </path>
                </svg>
            </a>
        </div>

        <p class="mt-8 text-xs font-light text-center text-gray-400"> Don't have an account? <a href="{{route('signup')}}" class="font-medium text-gray-700 dark:text-gray-200 hover:underline">Create One</a></p>
    </div>
    </main>
</body>

</html>