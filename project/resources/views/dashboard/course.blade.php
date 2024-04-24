@include('includes.Dheader')



<div class="flex h-screen bg-gray-900">

    <!-- sidebar -->
    @include('includes.components.sideBar')

    <div class="flex flex-col flex-1 overflow-y-auto ">
        <div class="flex items-center justify-between h-16   bg-gray-700 ">
            <div></div>
            <div class="flex items-center pr-4">

                <div class="h-10 w-10 overflow-hidden rounded-full" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="h-10 w-10  text-white bg-gray-500 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <!-- Dropdown menu -->
                @include('includes.components.dropdown')
            </div>
        </div>
<h1 class="font-bold text-3xl text-center text-white capitalize my-3">all school courses</h1>

<div class="flex gap-5 mx-4">
@foreach ($cours as $cour)
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$cour->title}}</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">{{$cour->subject->name}}</p>
</a>
@endforeach

<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white capitalize">add a course</h5>
<button
  class="group cursor-pointer outline-none hover:rotate-90 duration-300"
  title="Add New"
  data-modal-target="default-modal" data-modal-toggle="default-modal"
>
  <svg
    class="stroke-teal-500 fill-none group-hover:fill-teal-800 group-active:stroke-teal-200 group-active:fill-teal-600 group-active:duration-0 duration-300"
    viewBox="0 0 24 24"
    height="50px"
    width="50px"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      stroke-width="1.5"
      d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
    ></path>
    <path stroke-width="1.5" d="M8 12H16"></path>
    <path stroke-width="1.5" d="M12 16V8"></path>
  </svg>
</button>

</div>

</div>

@include('modals.cours')