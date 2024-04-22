@include('includes.header')
<h1 class="text-white font-bold text-2xl capitalize text-center mx-3">all courses</h1>
<div class="grid grid-cols-4 gap-8 p-8 md:p-16 bg-gray-900 ">
@foreach ($courses as $course)
    

    <div
        class="col-span-4 sm:col-span-2 lg:col-span-1 relative px-5 pt-10 pb-2 flex flex-col justify-start items-center border-2 border-gray-300 rounded-xl text-gray-300 hover:bg-gray-800 hover:text-white">
        <span class="absolute -top-6 p-3 border-2 border-gray-300 rounded-full bg-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            aria-hidden="true" class="w-7 h-7 text-yellow-640">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
        </svg>
    </span>
        <h2 class="my-1 gradient-red text-base uppercase tracking-wide">{{$course->title}}</h2>

    </div>

    @endforeach
    


</div>


@include('includes.footer')