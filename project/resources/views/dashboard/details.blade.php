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



        <h1 class="text-white text-3xl my-4 text-center font-bold underline">Certificat details</h1>
        <div class="flex gap-3 flex-wrap justify-center mx-3">
            @foreach ($details as $detail )


            <div class="w-60 bg-gradient-to-l from-slate-300 to-slate-100 text-slate-600 border border-slate-300 grid grid-col-2 justify-center p-4 gap-4 rounded-lg shadow-md">
                <div class="col-span-2 text-lg font-bold capitalize rounded-md">
                    stepping stone
                </div>
                <div class="col-span-2 rounded-md " id="text">
                    {{$detail->steps}}
                </div>
                <div class="col-span-1">
                    <button class="rounded-md bg-slate-300 hover:bg-slate-600 hover:text-slate-200 duration-300 p-2" id="this" data-modal-target="edit{{$detail->id}}" data-modal-toggle="edit{{$detail->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </button>
                </div>


            </div>
            @endforeach
            <div class="w-60 bg-gradient-to-l from-slate-300 to-slate-100 text-slate-600 border border-slate-300 flex flex-wrap justify-center p-4 gap-4 rounded-lg shadow-md">
                <div class="w-full text-lg font-bold capitalize rounded-md">
                    card title
                </div>
                <div class=" rounded-md">
                    <button title="Add New"  class="group cursor-pointer outline-none hover:rotate-90 duration-300" data-modal-target="ajouter" data-modal-toggle="ajouter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-zinc-400 fill-none group-hover:fill-zinc-800 group-active:stroke-zinc-200 group-active:fill-zinc-600 group-active:duration-0 duration-300">
                            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke-width="1.5"></path>
                            <path d="M8 12H16" stroke-width="1.5"></path>
                            <path d="M12 16V8" stroke-width="1.5"></path>
                        </svg>
                    </button>

                </div>



            </div>
        </div>


@include('modals.adminstraion')