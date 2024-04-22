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
        </div>
    </div>
</div>
@endforeach
</section>
@include('includes.footer')