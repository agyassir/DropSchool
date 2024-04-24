<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://sdk.videosdk.live/js-sdk/0.0.83/videosdk.js"></script>
</head>

<body>

    <div class="flex h-screen bg-[#0A0526]">

        <!-- sidebar -->
        <div class="hidden md:flex flex-col w-64 bg-indigo-900">
        <a href="#">
            <div class="flex items-center justify-start h-16 bg-indigo-900">
            <img src="{{asset('image/ds.jpg')}}" class="w-16 rounded-full mr-3">
                <span class="text-white font-bold uppercase">DropSchool</span>
            </div></a>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-indigo-900">
                    <a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Dashboard
                    </a>

                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-indigo-900 border-b border-gray-200">
                <div class="flex items-center px-4">


                </div>
                <div class="flex items-center pr-4">

                    <span class="relative inline-block">
                        <img src="https://randomuser.me/api/portraits/women/50.jpg" class="object-cover w-12 h-12 rounded-full " />
                    </span>
                </div>
            </div>
            <div id="video-container"></div>
        </div>

    </div>
    <script>
        // Initialize Video SDK
        const videoSDK = new VideoSDK({
            apiKey: '1092aab3-4fdf-40b3-aa93-0d06a2c47bf7',
            // Other configuration options
        });

        // Example: Load a video
        videoSDK.loadVideo('VIDEO_ID', 'video-container');
    </script>
    
</body>

</html>