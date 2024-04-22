@if(\Str::contains(\Route::currentRouteAction(), 'ProfController@dash'))

<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add a Course
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{route('Cpost')}}" method="post">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Title')}}</label>
                        <input type="text" name="title" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Description')}}</label>
                        <textarea name="desc" placeholder="dexcription" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"></textarea>
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Categorie')}}</label>
                        <select id="selectOption" name="categorie" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @foreach ($categories as $cat )
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                        <option value="custom">Custom...</option>
                        </select>
                    </div>
                    <div id="customInputContainer" class="block text-sm text-gray-800 dark:text-gray-200 mt-2" style="display: none;">
                        <label for="customInput">Custom Category:</label>
                        <input type="text" id="customInput" name="customCategory" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Price')}}</label>
                        <input type="number" name="price" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>



            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
            </form>

        </div>
    </div>
</div>
<script>
    document.getElementById("selectOption").addEventListener("change", function() {
        var customInputContainer = document.getElementById("customInputContainer");
        if (this.value === "custom") {
            customInputContainer.style.display = "block";
        } else {
            customInputContainer.style.display = "none";
        }
    });
</script>
@elseif (\Str::contains(\Route::currentRouteAction(), 'ProfController@class'))
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add a Course
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{route('Clpost')}}" method="post">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Subject')}}</label>
                        <select id="selectOption" name="subject" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @foreach ($subjects as $cat )
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                        <option value="custom">Custom...</option>
                        </select>
                    </div>
                    <div id="customInputContainer" class="block text-sm text-gray-800 dark:text-gray-200 mt-2" style="display: none;">
                        <label for="customInput">Custom Subject:</label>
                        <input type="text" id="customInput" name="customSubject" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Level')}}</label>
                        <select id="selectOption" name="level" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                        @foreach ($levels as $cat )
                        <option value="{{$cat->id}}">{{$cat->level}} {{$cat->branche->name}}</option>
                        @endforeach
                        
                        </select>
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-800 dark:text-gray-200">{{__('Price')}}</label>
                        <input type="number" name="price" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>



            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
            </form>

        </div>
    </div>
</div>
<script>
    document.getElementById("selectOption").addEventListener("change", function() {
        var customInputContainer = document.getElementById("customInputContainer");
        if (this.value === "custom") {
            customInputContainer.style.display = "block";
        } else {
            customInputContainer.style.display = "none";
        }
    });

    var sessionCount = 1;

    function addSession() {
        sessionCount++;
        var sessionsContainer = document.getElementById("sessionsContainer");
        
        // Create a new select element
        var newSelect = document.createElement("select");
        newSelect.name = "Session_" + sessionCount;
        newSelect.className = "block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40";
        // Copy options from the original select element
        var originalSelect = document.getElementById("selectOptio");
        originalSelect.querySelectorAll("option").forEach(function(option) {
            var newOption = document.createElement("option");
            newOption.value = option.value;
            newOption.textContent = option.textContent;
            newSelect.appendChild(newOption);
        });

        sessionsContainer.appendChild(newSelect);
    }
</script>
@endif