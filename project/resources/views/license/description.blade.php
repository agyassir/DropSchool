@include('includes.header')

<h3 class="text-2xl font-bold text-gray-300 capitalize  md:text-4xl text-center my-9">Learn <span style="background: linear-gradient(90deg, #38bdf8, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> {{$course->title}} </span> by {{$course->abs->Firstname}} {{$course->abs->lastname}}</h3>
<p class="text-xl  text-gray-300 text-center w-[50%] mx-auto">{{$course->description}}</p>

<section class="w-full h-full mx-auto ">
    <div class="self-stretch mt-5 w-full mx-2">
        <div class="flex gap-10  ">
            <div class="flex flex-col w-1/2 max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow mt-1.5 max-md:mt-8">
                    <div class="flex gap-2 px-3 py-3.5 text-sm font-medium text-white rounded bg-stone-900">
                        <svg class="h-8 w-8 fill-rose-500" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M24.325 8.309s-2.655-.334-8.357-.334c-5.517 0-8.294.334-8.294.334A2.675 2.675 0 0 0 5 10.984v10.034a2.675 2.675 0 0 0 2.674 2.676s2.582.332 8.294.332c5.709 0 8.357-.332 8.357-.332A2.673 2.673 0 0 0 27 21.018V10.982a2.673 2.673 0 0 0-2.675-2.673zM13.061 19.975V12.03L20.195 16l-7.134 3.975z"></path>
                            </g>
                        </svg>
                        <div class="flex-auto my-auto">Get 16 lessons in 3 hours</div>
                    </div>
                    <div class="flex gap-1.5 p-2.5 mt-3 text-sm font-medium text-white rounded bg-stone-900">
                        <svg viewBox="0 0 24 24" class="w-8 h-8 fill-blue-600" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M19 1C19 0.447715 19.4477 0 20 0C20.5523 0 21 0.447715 21 1V1.58582L22.2709 0.314894C22.6614 -0.0756305 23.2946 -0.0756294 23.6851 0.314895C24.0757 0.705419 24.0757 1.33858 23.6851 1.72911L22.4142 3H23C23.5523 3 24 3.44772 24 4C24 4.55228 23.5523 5 23 5H20.4142L12.7017 12.7125C12.3112 13.103 11.678 13.103 11.2875 12.7125C10.897 12.322 10.897 11.6888 11.2875 11.2983L19 3.58582V1Z" class="fill-blue-600"></path>
                                <path d="M17.3924 3.78908C17.834 3.3475 17.7677 2.61075 17.2182 2.31408C15.6655 1.47581 13.8883 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 10.1154 22.5261 8.34153 21.6909 6.79102C21.3946 6.24091 20.6574 6.17424 20.2155 6.61606L20.1856 6.64598C19.8554 6.97615 19.8032 7.48834 20.016 7.90397C20.6451 9.1326 21 10.5249 21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C13.4782 3 14.8732 3.35638 16.1037 3.98791C16.5195 4.20129 17.0322 4.14929 17.3627 3.81884L17.3924 3.78908Z" class="fill-blue-600"></path>
                                <path d="M14.3899 6.79159C14.8625 6.31902 14.7436 5.52327 14.1062 5.32241C13.4415 5.11295 12.7339 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.866 19 19 15.866 19 12C19 11.2702 18.8883 10.5664 18.6811 9.9049C18.4811 9.26659 17.6846 9.14697 17.2117 9.61995L17.1194 9.71224C16.8382 9.99337 16.7595 10.4124 16.8547 10.7984C16.9496 11.1833 17 11.5858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C12.4172 7 12.8225 7.0511 13.21 7.1474C13.5965 7.24347 14.0166 7.16496 14.2982 6.88331L14.3899 6.79159Z" class="fill-blue-600"></path>
                                <path d="M11.078 9.15136C11.4874 9.01484 11.6934 9.48809 11.3882 9.79329L10.5827 10.5989C9.80254 11.379 9.80254 12.6438 10.5827 13.4239C11.3628 14.204 12.6276 14.204 13.4077 13.4239L14.2031 12.6285C14.5089 12.3227 14.9822 12.5301 14.8429 12.9397C14.441 14.1209 13.3135 15 12 15C10.3431 15 9 13.6569 9 12C9 10.6796 9.88827 9.54802 11.078 9.15136Z"></path>
                            </g>
                        </svg>
                        <div class="flex-auto my-auto">Daily guided exercises</div>
                    </div>
                    <div class="flex gap-2.5 px-2.5 py-3.5 mt-3 text-sm font-medium text-white rounded bg-stone-900">
                        <svg class="w-8 h-8" viewBox="-3.2 -3.2 38.40 38.40" xmlns="http://www.w3.org/2000/svg" fill="#fbda37" stroke="#fbda37">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="3.84">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #fbda37;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <title></title>
                                <g data-name="79-users" id="_79-users">
                                    <circle class="cls-1" cx="16" cy="13" r="5"></circle>
                                    <path class="cls-1" d="M23,28A7,7,0,0,0,9,28Z"></path>
                                    <path class="cls-1" d="M24,14a5,5,0,1,0-4-8"></path>
                                    <path class="cls-1" d="M25,24h6a7,7,0,0,0-7-7"></path>
                                    <path class="cls-1" d="M12,6a5,5,0,1,0-4,8"></path>
                                    <path class="cls-1" d="M8,17a7,7,0,0,0-7,7H7"></path>
                                </g>
                            </g>
                            <g id="SVGRepo_iconCarrier">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #fbda37;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <title></title>
                                <g data-name="79-users" id="_79-users">
                                    <circle class="cls-1" cx="16" cy="13" r="5"></circle>
                                    <path class="cls-1" d="M23,28A7,7,0,0,0,9,28Z"></path>
                                    <path class="cls-1" d="M24,14a5,5,0,1,0-4-8"></path>
                                    <path class="cls-1" d="M25,24h6a7,7,0,0,0-7-7"></path>
                                    <path class="cls-1" d="M12,6a5,5,0,1,0-4,8"></path>
                                    <path class="cls-1" d="M8,17a7,7,0,0,0-7,7H7"></path>
                                </g>
                            </g>
                        </svg>
                        <div class="flex-auto">Access to 50k+ community</div>
                    </div>
                    <div class="flex gap-3 px-2.5 py-3.5 mt-3 text-sm font-medium text-white rounded bg-stone-900">
                        <svg class="h-8 w-8" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#00ff00" transform="rotate(0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M10.75 2.44995C11.44 1.85995 12.57 1.85995 13.27 2.44995L14.85 3.81005C15.15 4.07005 15.71 4.28002 16.11 4.28002H17.81C18.87 4.28002 19.74 5.14996 19.74 6.20996V7.91003C19.74 8.30003 19.95 8.87004 20.21 9.17004L21.57 10.75C22.16 11.44 22.16 12.57 21.57 13.27L20.21 14.85C19.95 15.15 19.74 15.71 19.74 16.11V17.8101C19.74 18.8701 18.87 19.74 17.81 19.74H16.11C15.72 19.74 15.15 19.95 14.85 20.21L13.27 21.5699C12.58 22.1599 11.45 22.1599 10.75 21.5699L9.17002 20.21C8.87002 19.95 8.31001 19.74 7.91001 19.74H6.18C5.12 19.74 4.25 18.8701 4.25 17.8101V16.1C4.25 15.71 4.04001 15.15 3.79001 14.85L2.44 13.26C1.86 12.57 1.86 11.45 2.44 10.76L3.79001 9.17004C4.04001 8.87004 4.25 8.31004 4.25 7.92004V6.20996C4.25 5.14996 5.12 4.28002 6.18 4.28002H7.91001C8.30001 4.28002 8.87002 4.07005 9.17002 3.81005L10.75 2.44995Z" stroke="#00ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.89001 14.82L11.34 15.94C11.53 16.13 11.95 16.22 12.23 16.22H14C14.56 16.22 15.17 15.8 15.31 15.24L16.43 11.82C16.66 11.17 16.24 10.6 15.54 10.6H13.67C13.39 10.6 13.16 10.3701 13.2 10.0401L13.43 8.54008C13.52 8.12008 13.24 7.65005 12.82 7.51005C12.45 7.37005 11.98 7.56 11.79 7.84L9.87 10.69" stroke="#00ff00" stroke-width="1.5" stroke-miterlimit="10"></path>
                                <path d="M7.5 14.8199V10.24C7.5 9.57999 7.78 9.34998 8.44 9.34998H8.91C9.56 9.34998 9.85001 9.57999 9.85001 10.24V14.8199C9.85001 15.4699 9.57 15.71 8.91 15.71H8.44C7.78 15.71 7.5 15.4799 7.5 14.8199Z" stroke="#00ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <div class="flex-auto">Regular expert feedback</div>
                    </div>
                    <div class="flex flex-col px-2.5 py-3.5 mt-[4.1rem] text-sm font-medium text-white rounded bg-stone-900">
                        <div class="flex flex-col items-start pt-6 pr-12 pb-3.5 pl-4 w-full rounded bg-stone-900 max-md:pr-5">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="shrink-0 rounded-full w-[52px]" />
                                <div class="flex flex-col my-auto">
                                    <div class="text-base font-bold bg-clip-text capitalize">{{$course->abs->Firstname}} {{$course->abs->lastname}}</div>
                                    <div class="mt-2.5 text-sm text-white">Web Designer</div>
                                </div>
                            </div>
                            <div class="flex gap-1.5 mt-2.5 text-sm text-neutral-400">
                                <div class="flex -space-x-2">
                                    <img class="z-40 inline-block border border-cyan-500 h-8 w-8 rounded-full ring-2 ring-white ring-opacity-50" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <img class="z-30 inline-block border border-cyan-500 h-8 w-8 rounded-full ring-2 ring-white ring-opacity-50" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <img class="z-20 inline-block border border-cyan-500 h-8 w-8 rounded-full ring-2 ring-white ring-opacity-50" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    <img class="z-10 inline-block border border-cyan-500 h-8 w-8 rounded-full ring-2 ring-white ring-opacity-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                </div>
                                <div class="flex items-center">
                                    <span class="font-bold text-rose-500 ">3200098</span>
                                    people have joined already
                                </div>

                            </div>

                        </div>
                        <a href="#" type="button" class="flex gap-2 px-20 py-2 text-base text-white rounded-none bg-neutral-700 max-md:px-5">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1c0145774f65cb66e5f2d1c7ee806c67ec5126619756f7a9b392a3e0b358fa56?" class="shrink-0 w-6 aspect-square" />
                            <div class="my-auto">Watch Trailer</div>
                        </a>
                    </div>

                </div>

                <div class="absolute top-[635px]  z-10 flex justify-center items-center self-center px-3.5 mt-12 w-10 h-10 text-base text-white whitespace-nowrap rounded-full bg-[linear-gradient(44deg,#5057FC_15.75%,#86B1E4_84.63%)] max-md:mt-10">
                    By
                </div>

            </div>
            <div class="flex flex-col  w-3/5 ">
                <div class="flex flex-col max-md:mt-7 max-md:max-w-full">
                    <div class="flex flex-col justify-center p-1 rounded-xl   bg-gradient-to-r from-pink-500 to-yellow-500 max-w-3xl">
                        <img src="https://img.freepik.com/free-vector/online-tutorials-concept_52683-37480.jpg?size=626&ext=jpg&ga=GA1.1.1813095641.1698406728&semt=ais" class="w-full border border-black border-solid h-full rounded-xl" />
                    </div>
                    <div class="mt-6 text-base font-medium text-center text-white max-md:max-w-full">
                        Meet your guru, <span class="capitalize" style="background: linear-gradient(90deg, #38bdf8, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">{{$course->abs->Firstname}} {{$course->abs->lastname}}!</span>
                        <br />
                        Complete Web Design: from Figma to Webflow to Freelancing
                    </div>
                    <button class="justify-center items-center bg-gradient-to-r from-blue-500 to-cyan-500 px-16 py-5 mt-10 text-lg font-extrabold text-center text-white rounded-lg max-md:px-5 max-w-3xl">
                        Enroll Now for {{$course->price}}$ 
                        <span class="text-base line-through">{{$course->price+10}}$</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



@include('includes.footer')