<div id="subscribe" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
 
            <!-- Modal body -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transition-transform transform hover:scale-105">
                <div class="p-1 bg-green-200"></div>
                <div class="p-8">
                    <div class="flex justify-between">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Pro Plan</h2>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="subscribe">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </div>
                    <p class="text-gray-600 mb-6">Perfect for growing businesses</p>
                    <p class="text-4xl font-bold text-gray-800 mb-6">{{$license->prix}} DH</p>
                    <ul class="text-sm text-gray-600 mb-6">
                        <li class="mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-4 h-4 mr-2 text-green-500">
                                <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            25 Users
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-4 h-4 mr-2 text-green-500">
                                <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            Advanced Features
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" class="w-4 h-4 mr-2 text-green-500">
                                <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            24/7 Support
                        </li>
                    </ul>
                </div>
                <div class="p-4">
                    @if (!$subed)
                    <form action="{{route('Subscribe',$license->id)}}" method="post">
                        @csrf
                    <button type="submit" class="w-full bg-green-500 text-white rounded-full px-4 py-2 hover:bg-green-700 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                        subscribe
                    </button>
                    </form>
                    @else
                    <form action="{{route('Unsubscribe',$license->id)}}" method="post">
                        @csrf
                    <button type="submit" class="w-full bg-green-500 text-white rounded-full px-4 py-2 hover:bg-green-700 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                        Unsubscribe
                    </button>
                    </form>
                    @endif
                    
                </div>
            </div>

            <!-- Modal footer -->
            </form>

        </div>
    </div>
</div>