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

        <!-- main components-->

        <div class="flex justify-between ">
            <h1 class="text-white font-bold text-3xl capitalize mt-3">schools registered</h1>
            <button class="h-10 w-10 text-white bg-cyan-600 rounded rounded-lg m-5" data-modal-target="ajouter" data-modal-toggle="ajouter">+</button>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>

                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">school</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employers</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">certificats</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($schools as $school )

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{$school->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$school->email}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$school->phone}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$school->administrator->count()}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$school->certificates->count()}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button data-modal-target="edit{{$school->id}}" data-modal-toggle="edit{{$school->id}}" class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                        <a type="button" href="{{route('Sdelete',$school->id)}}" class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
</div>

@include('modals.school')