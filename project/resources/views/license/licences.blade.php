@include('includes.header')

<h4 class="text-xl font-bold text-gray-300 capitalize  md:text-3xl text-center my-9">Les diplômes/certificats disponible</h4>


<form class="max-w-lg mx-auto">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
            Branch
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                @foreach ($categories as $categorie)                    
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$categorie->name}}</button>
                </li>
                @endforeach
            </ul>
        </div>
        <button id="dropdown-button" data-dropdown-toggle="dropdownz" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300  hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
            School
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg></button>
        <div id="dropdownz" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                @foreach ($schools as $school)
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$school->name}}</button>
                </li> 
                @endforeach
                
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Course, license, school..." required />
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>




<section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6 mt-10">


    <div class="flex flex-wrap -mx-4">
        @foreach ($licenses as $license)
            
        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            <img src="https://source.unsplash.com/Lki74Jj7H-U/400x300" alt="Card img" class="object-cover object-center w-full h-48" />
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>
                        <a href="#"
                            class="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600">{{$license->school->name}}</a>
                        <a href="#"
                            class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600 capitalize">
                            {{$license->title}}
                        </a>
                        <p class="mb-4 ">
                            {{$license->description}}
                        </p>
                    </div>
                    <div>
                        <a href="{{route('license',$license->id)}}"
                            class="inline-block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">Read
                            More -></a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach      
    </div>
</section>



@include('includes.footer')