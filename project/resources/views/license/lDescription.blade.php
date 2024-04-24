@include('includes.header')

<body class="bg-gradient-to-br from-gray-900 to-black-200">
    <div class="text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
        

    <div class="h-32 md:h-40"></div>
<div class="flex justify-between">
        <p class="font-sans text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl capitalize">
            {{$license->title}}
        </p>
        <button  data-modal-target="subscribe" data-modal-toggle="subscribe" class="group capitalize text-xl group-hover:before:duration-500 group-hover:after:duration-500 after:duration-500 hover:border-rose-300 hover:before:[box-shadow:_20px_20px_20px_30px_#a21caf] duration-500 before:duration-500 hover:duration-500 underline underline-offset-2 hover:after:-right-8 hover:before:right-12 hover:before:-bottom-8 hover:before:blur hover:underline hover:underline-offset-4  origin-left hover:decoration-2 hover:text-rose-300 relative bg-neutral-800 h-16 w-64 border text-left p-3 text-gray-50 text-base font-bold rounded-lg  overflow-hidden  before:absolute before:w-12 before:h-12 before:content[''] before:right-1 before:top-1 before:z-10 before:bg-violet-500 before:rounded-full before:blur-lg  after:absolute after:z-10 after:w-20 after:h-20 after:content['']  after:bg-rose-300 after:right-8 after:top-3 after:rounded-full after:blur-lg">
  subscribe
</button>
    </div>
        <div class="h-10"></div>
        <p class="max-w-2xl font-serif text-xl text-gray-400 md:text-2xl">
            Imagine being able to spent less time in learning something that it becomes your passion...
        </p>

        <div class="h-32 md:h-40"></div>

        <div class="grid gap-8 md:grid-cols-2">
            <div class="flex flex-col justify-center">
                <p
                    class="self-start inline font-sans font-bold text-2xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600 capitalize">
                    provided by: {{$license->school->name}}
                </p>
                <h2 class="text-4xl font-bold">Made for you</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    {{$license->description}}
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Made with love</p>
                        <div class="h-4"></div>
                        
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96"></div>
            </div>
        </div>

        <div class="h-32 md:h-40"></div>

        <p class="font-serif text-4xl">
            <span class="text-gray-400">If we work all together</span>

            <span class="text-gray-600"
          >.....the hard work become the dream work</span>
        </p>

        

        <div class="h-32 md:h-40"></div>

        <p class="font-serif text-4xl mb-6 capitalize">
            <span class="text-gray-400">you will see in this certificate</span>
        </p>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($license->details as $detail)
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-br from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-green-400 bg-green-800 rounded-full shadow-lg w-14 h-14">
                    
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-xl">{{$detail->steps}}</p>
            </div>  
            @endforeach
            
           
            
        </div>

        <div class="h-40"></div>

        <div class="grid gap-8 md:grid-cols-3">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline font-sans text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-teal-400 to-teal-600">
                    We are the future
                </p>
                <h2 class="text-4xl font-bold">{{$license->school->name}}</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    {{$license->school->description}}
                </p>
                <div class="h-8"></div>
                <div class="grid gap-6 pt-8 border-t border-gray-800 lg:grid-cols-3">
                    
                   
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96">
                </div>
            </div>
        </div>

        <div class="h-10 md:h-40"></div>

        @include('includes.footer')


        @include('modals.license')