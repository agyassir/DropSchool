@include('includes.header')
<!-- component -->
<main class="flex w-full h-full shadow-lg rounded-3xl bg-gray-900">

  <section class="flex flex-col gap-3 pt-3 w-1/2 h-auto bg-gray-800 h-full overflow-y-scroll">
    <label class="px-3">
      <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full" placeholder="Search for student..." />
    </label>

    <ul class="mt-6 ">
      @foreach ($classe->enrolleds as $class)
      <li class="py-8 px-8 max-w-sm mx-auto my-3 bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
        <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="https://tailwindcss.com/img/erin-lindford.jpg" alt="Woman's Face">
        <div class="text-center space-y-2 sm:text-left">
          <div class="space-y-0.5">
            <p class="text-lg text-black font-semibold">
              {{$class->user->Firstname}} {{$class->user->lastname}}
            </p>
            <p class="text-slate-500 font-medium">
              {{$class->user->rol->type}}
            </p>
          </div>
          <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Contact</button>
        </div>
      </li>
      @endforeach
    </ul>
  </section>
  <section class="w-1/2 px-4 flex flex-wrap gap-3 bg-gray-800 rounded-r-3xl">
    <div class="flex mb-4 justify-end w-full">
      <button class="bg-gray-600 rounded-full w-10 h-10 text-white font-semibold " data-modal-target="static-modal" data-modal-toggle="static-modal">
        <div class="flex gap-3 justify-center items-center">
          <span>
            <svg viewBox="0 0 24 24" class="w-8 h-8 fill-white"  xmlns="http://www.w3.org/2000/svg">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M23 12C23 12.3545 22.9832 12.7051 22.9504 13.051C22.3838 12.4841 21.7204 12.014 20.9871 11.6675C20.8122 6.85477 16.8555 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12C3.00683 16.8555 6.85477 20.8122 11.6675 20.9871C12.014 21.7204 12.4841 22.3838 13.051 22.9504C12.7051 22.9832 12.3545 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" fill="#fff"></path>
                <path d="M13 11.8812L13.8426 12.3677C13.2847 12.7802 12.7902 13.2737 12.3766 13.8307L11.5174 13.3346C11.3437 13.2343 11.2115 13.0898 11.1267 12.9235C11 12.7274 11 12.4667 11 12.4667V6C11 5.44771 11.4477 5 12 5C12.5523 5 13 5.44772 13 6V11.8812Z" fill="#fff"></path>
                <path d="M18 15C17.4477 15 17 15.4477 17 16V17H16C15.4477 17 15 17.4477 15 18C15 18.5523 15.4477 19 16 19H17V20C17 20.5523 17.4477 21 18 21C18.5523 21 19 20.5523 19 20V19H20C20.5523 19 21 18.5523 21 18C21 17.4477 20.5523 17 20 17H19V16C19 15.4477 18.5523 15 18 15Z" fill="#fff"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 24C21.3137 24 24 21.3137 24 18C24 14.6863 21.3137 12 18 12C14.6863 12 12 14.6863 12 18C12 21.3137 14.6863 24 18 24ZM18 22.0181C15.7809 22.0181 13.9819 20.2191 13.9819 18C13.9819 15.7809 15.7809 13.9819 18 13.9819C20.2191 13.9819 22.0181 15.7809 22.0181 18C22.0181 20.2191 20.2191 22.0181 18 22.0181Z" fill="#fff"></path>
              </g>
            </svg>
          </span>
        </div>
      </button>
    </div>
    @foreach ($classe->emplois as $emploi)
    <div class=" flex rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg mb-3 ">
      <div class="block rounded-t overflow-hidden  text-center ">
        <div class="bg-blue-500 text-white py-1 font-bold text-xl flex justify-between ">
          Classe
          <a href="{{route('Edelete',$emploi->id)}}">
          <svg class="h-5 w-5 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#ff0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          </a>
        </div>
        <div class="pt-1 border-l border-r border-white bg-white">
          <span class="text-3xl font-bold leading-tight capitalize">
            {{$emploi->date->day}}
          </span>
        </div>
        <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">

        </div>
        <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
          <span class="text-xl leading-normal">
            {{$emploi->begin}} to {{$emploi->end}}
          </span>
        </div>
      </div>
    </div>
    @endforeach



  </section>
</main>
@include('modals.class')
@include('includes.footer')