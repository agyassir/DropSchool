@include('includes.header')
<main class="bg-gray-900 bg-opacity-25 text-white">

    <div class="lg:w-8/12 lg:mx-auto mb-8">

        <header class="flex flex-wrap items-center p-4 md:py-8">

            <div class="md:w-3/12 md:ml-16">
                <!-- profile image -->
                <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                   border-4 border-white" src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" alt="profile">
            </div>

            <!-- profile meta -->
            <div class="w-8/12 md:w-7/12 ml-4">
                <div class="md:flex md:flex-wrap md:items-center mb-4">
                    <h2 class="text-3xl font-bold  inline-block  md:mr-2 mb-2 sm:mb-0 capitalize">
                        {{Auth::user()->Firstname}} {{Auth::user()->lastname}}
                    </h2>
                    <!-- badge -->
                    <span class="inline-block fas fa-certificate fa-lg text-blue-500 
                             relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
                        <i class="fas fa-check text-white text-xs absolute inset-x-0
                             ml-1 mt-px"></i>
                    </span>

                </div>



                <!-- user meta form medium screens -->
                <div class="hidden md:block">
                    <h1 class="font-semibold">
                        {{Auth::user()->email}}
                    </h1>
                    <span>
                        {{Auth::user()->rol->type}}
                    </span>

                </div>


                <!-- follow button -->
                <a href="#" class="bg-blue-500 px-2 py-1 
                      text-white font-semibold text-sm rounded block text-center 
                      sm:inline-block block mt-4">update</a>
            </div>

            <!-- user meta form small screens -->
            <div class="md:hidden text-sm my-2 ">
                <h1 class="font-semibold capitalize my-2"> {{Auth::user()->Firstname}} {{Auth::user()->lastname}}
                </h1>
                <span class="capitalize my-2"> {{Auth::user()->email}}</span>
                <p class="capitalize my-2"> {{Auth::user()->rol->type}}</p>

            </div>

        </header>



    </div>

    <section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6 mt-10">


        <div class="flex flex-wrap -mx-4">
            <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
                <img src="https://source.unsplash.com/Lki74Jj7H-U/400x300" alt="Card img" class="object-cover object-center w-full h-48" />
                <div class="flex flex-grow">
                    <div class="triangle"></div>
                    <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                        <div>
                            <a href="#" class="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600">Reliable
                                Schemas</a>
                            <a href="#" class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600">
                                What Zombies Can Teach You About Food
                            </a>
                            <p class="mb-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus corporis commodi
                                aperiam, amet cupiditate?
                            </p>
                        </div>
                        <div>
                            <a href="#" class="inline-block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">Read
                                More -></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>
@include('includes.footer')