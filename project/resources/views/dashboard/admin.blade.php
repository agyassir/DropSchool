@include('includes.Dheader')



<div class="flex h-screen bg-gray-100"> 

    <!-- sidebar -->
    @include('includes.components.sideBar')

    <!-- Main content -->
    <div class="flex flex-col flex-1 overflow-y-auto ">
        <div class="flex items-center justify-between h-16   bg-gray-700 ">
            <div class="flex items-center ">
                <input class="mx-4 w-full border rounded-md px-4 py-2" type="text" placeholder="Search">
            </div>
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
        <div class="bg-gray-700 p-4 min-h-screen">
  <div aria-hidden="true" class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-20">
    <div class="blur-[106px] h-56 bg-gradient-to-br  to-purple-400 from-blue-700"></div>
    <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400  to-indigo-600"></div>
  </div>
  <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
    <div class="md:w-2/3 lg:w-1/2 mt-12 text-gray-100">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-secondary">
        <path fill-rule="evenodd"
          d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
          clip-rule="evenodd"></path>
      </svg>
      <h2 class="my-8 text-2xl font-bold text-white md:text-4xl capitalize">welcome back,{{Auth::user()->Firstname}}</h2>
    </div>
    <div
      class="mt-16 grid divide-x divide-y  divide-gray-700 overflow-hidden  rounded-3xl border text-gray-600 border-gray-700 sm:grid-cols-2 lg:grid-cols-4  lg:divide-y-0 xl:grid-cols-4">
      <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl  hover:shadow-gray-600/10">
        <div class="relative space-y-8 py-12 p-8">
          <img src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent">
          <div class="space-y-2">
            <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Schools</h5>
            <p class="text-gray-300">{{$school}}</p>
          </div>
        </div>
      </div>
      <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
        <div class="relative space-y-8 py-12 p-8">
          <img src="https://www.svgrepo.com/show/120853/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent" >
          <div class="space-y-2">
            <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">classes</h5>
            <p class="text-gray-300">{{$class}}</p>
          </div>
        </div>
      </div>
      <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
        <div class="relative space-y-8 py-12 p-8">
          <img src="https://www.svgrepo.com/show/120852/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent" >
          <div class="space-y-2">
            <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">certificats</h5>
            <p class="text-gray-300">{{$certif}}</p>
          </div>
        </div>
      </div>
      <div class="group relative bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
        <div class="relative space-y-8 py-12 p-8">
          <img src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy" width="200" height="200"class="w-12 h-12 rounded-full" style="color:transparent">
          <div class="space-y-2">
            <h5 class="text-xl font-semibold text-white transition group-hover:text-secondary">Profs</h5>
            <p class="text-gray-300">{{$profs}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>

</div>
</body>

</html>