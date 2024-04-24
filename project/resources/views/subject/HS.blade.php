@include('includes.header')
<section class=" p-6 space-y-3 bg-gray-900 mb-5 w-full h-[350px]">
    <h4 class="text-xl font-bold text-gray-300 capitalize  md:text-3xl text-center mb-5"> heure supplementaire pour {{$subject->name}}</h4>
    @foreach ($classes as $classe)

    <div class="max-w-3xl h-full mx-auto bg-white rounded-xl shadow-md  ">

        <div class="flex w-full">
            <div class="shrink-0">
                <img class="h-[290px] w-full object-cover md:w-48" src="https://loremflickr.com/g/320/240/team">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-xl text-indigo-500 font-bold">Prof : {{$classe->user->Firstname}} {{$classe->user->lastname}}</div>
                <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline capitalize">Matiere: {{$classe->subject->name}}
                </a>
                <p class="mt-2 text-slate-500">Niveu: {{$classe->subject->level->level}}
                </p>
                <p class="mt-2 text-gray-500 font-bold">Price: {{$classe->price}} DH
                </p>
                <p class="mt-2 text-gray-500 font-bold">{{$classe->Emplois->count()}} times a week
                </p>
                @auth
                @if(!$enrolled)
                <a href="{{ route('Enroll', $classe->id) }}" type="button" class="mt-4 border text-gray-50 duration-300 relative group cursor-pointer overflow-hidden h-16 w-48 rounded-md bg-neutral-800 p-2 font-extrabold hover:bg-sky-700">
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150 duration-700 right-12 top-12 bg-yellow-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-12 h-12 rounded-full group-hover:scale-150 duration-700 right-20 -top-6 bg-orange-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-8 h-8 rounded-full group-hover:scale-150 duration-700 right-32 top-6 bg-pink-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-4 h-4 rounded-full group-hover:scale-150 duration-700 right-2 top-12 bg-red-600"></div>
                    <p class="z-10 absolute bottom-2 left-2">Enroll</p>
                </a>
                @else
                <a href="{{ route('unEnroll', $classe->id) }}" type="button" class="mt-4 border text-gray-50 duration-300 relative group cursor-pointer overflow-hidden h-16 w-48 rounded-md bg-neutral-800 p-2 font-extrabold hover:bg-sky-700">
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150 duration-700 right-12 top-12 bg-yellow-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-12 h-12 rounded-full group-hover:scale-150 duration-700 right-20 -top-6 bg-orange-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-8 h-8 rounded-full group-hover:scale-150 duration-700 right-32 top-6 bg-pink-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-4 h-4 rounded-full group-hover:scale-150 duration-700 right-2 top-12 bg-red-600"></div>
                    <p class="z-10 absolute bottom-2 left-2">Quit</p>
                </a>
                @endif
                @else
                <a href="{{ route('Enroll', $classe->id) }}" type="button" class="mt-4 border text-gray-50 duration-300 relative group cursor-pointer overflow-hidden h-16 w-48 rounded-md bg-neutral-800 p-2 font-extrabold hover:bg-sky-700">
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150 duration-700 right-12 top-12 bg-yellow-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-12 h-12 rounded-full group-hover:scale-150 duration-700 right-20 -top-6 bg-orange-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-8 h-8 rounded-full group-hover:scale-150 duration-700 right-32 top-6 bg-pink-500"></div>
                    <div class="absolute group-hover:-top-1 group-hover:-right-2 z-10 w-4 h-4 rounded-full group-hover:scale-150 duration-700 right-2 top-12 bg-red-600"></div>
                    <p class="z-10 absolute bottom-2 left-2">Enroll</p>
                </a>
                @endauth


            </div>
        </div>
    </div>
    @endforeach
</section>
@include('includes.footer')