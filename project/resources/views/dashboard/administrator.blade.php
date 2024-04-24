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
        <div class="grid grid-cols-2 w-[700px] gap-2 max-[500px]:grid-cols-1 px-3 m-3">
            <div class=" group w-full rounded-lg bg-[#673ab7] p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#2196f3]">
                <p class="text-white text-2xl">{{$subs}}</p>
                
                <p class="text-white text-sm">subscribers</p>
                <svg fill="#ffffff" class="w-[36px] h-[36px] group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path d="M327.023,144.166h-65.723c-5.624,0-10.428,3.527-12.347,8.48h-36.787c-1.921-4.954-6.725-8.48-12.347-8.48h-65.723 c-7.307,0-13.251,5.944-13.251,13.25v44.522c0,7.307,5.944,13.251,13.251,13.251h65.723c7.306,0,13.249-5.944,13.249-13.251 v-33.391h34.981v33.391c0,7.307,5.944,13.251,13.251,13.251h65.723c7.307,0,13.251-5.944,13.251-13.251v-44.522 C340.274,150.109,334.33,144.166,327.023,144.166z M197.168,199.288h-60.422v-39.221h60.422V199.288z M324.373,199.288h-60.422 v-39.221h60.422V199.288z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M400.166,220.489c-4.392,0-7.95,3.56-7.95,7.95v12.721c0,4.391,3.559,7.95,7.95,7.95c4.392,0,7.95-3.56,7.95-7.95v-12.721 C408.116,224.048,404.558,220.489,400.166,220.489z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M421.367,245.93c-4.392,0-7.95,3.56-7.95,7.95v12.72c0,4.391,3.559,7.95,7.95,7.95c4.392,0,7.95-3.56,7.95-7.95v-12.72 C429.317,249.489,425.759,245.93,421.367,245.93z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M378.965,245.93c-4.392,0-7.95,3.56-7.95,7.95v12.72c0,4.391,3.559,7.95,7.95,7.95c4.392,0,7.95-3.56,7.95-7.95v-12.72 C386.915,249.489,383.357,245.93,378.965,245.93z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M230.559,473.141c-4.391,0-7.95,3.56-7.95,7.95v5.154c0,4.391,3.56,7.95,7.95,7.95s7.95-3.56,7.95-7.95v-5.154 C238.51,476.701,234.95,473.141,230.559,473.141z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M315.363,428.257h-33.921c-4.392,0-7.95,3.56-7.95,7.95s3.559,7.95,7.95,7.95h33.921c4.392,0,7.95-3.56,7.95-7.95 S319.754,428.257,315.363,428.257z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M262.362,227.91c-2.632-3.513-7.616-4.227-11.13-1.593c-8,5.997-16.385,6.892-20.672,6.892 c-10.01,0-17.244-4.313-20.663-6.885c-3.51-2.637-8.495-1.931-11.133,1.577c-2.638,3.51-1.931,8.494,1.577,11.133 c5.007,3.763,15.588,10.076,30.219,10.076c6.265,0,18.52-1.308,30.209-10.069C264.281,236.407,264.996,231.424,262.362,227.91z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M171.197,169.607h-8.48c-4.391,0-7.95,3.56-7.95,7.95s3.56,7.95,7.95,7.95h8.48c4.391,0,7.95-3.56,7.95-7.95 S175.588,169.607,171.197,169.607z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M298.402,169.607h-8.48c-4.392,0-7.95,3.56-7.95,7.95s3.559,7.95,7.95,7.95h8.48c4.392,0,7.95-3.56,7.95-7.95 S302.794,169.607,298.402,169.607z"></path>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M468.009,408.116c4.392,0,7.95-3.56,7.95-7.95v-23.321c0-25.058-18.402-45.894-42.402-49.718v-31.375h9.01 c4.392,0,7.95-3.56,7.95-7.95s-3.559-7.95-7.95-7.95h-84.803c-4.392,0-7.95,3.56-7.95,7.95s3.559,7.95,7.95,7.95h9.01v14.617 c-9.095-8.526-21.274-13.557-34.451-13.557h-58.317c32.668-11.527,59.437-35.664,74.418-66.544 c3.993,3.359,9.73,1.912,12.19-2.467c21.763-1.471,39.021-19.634,39.021-41.763c0-13.304-6.401-25.778-16.963-33.619 c0-0.1,0.002-0.203,0.002-0.302C382.675,68.239,314.436,0,230.559,0H43.992c-2.502,0-4.857,1.178-6.359,3.178 c-1.502,2.001-1.974,4.592-1.275,6.994c0.24,0.823,23.446,80.566,41.637,142.566c-10.309,7.856-16.512,20.101-16.512,33.299 c0,22.129,17.26,40.293,39.023,41.763c2.319,4.484,8.31,5.731,12.189,2.467c14.982,30.879,41.749,55.016,74.418,66.543h-58.318 c-27.764,0.001-50.352,22.589-50.352,50.353V504.05c0,4.391,3.56,7.95,7.95,7.95h288.331c2.88,0,5.393-1.536,6.788-3.828 c4.254,2.431,9.172,3.828,14.412,3.828h8.48c16.073,0,29.151-13.077,29.151-29.151V468.9c19.126-3.318,36.279-18.18,40.897-36.546 c1.071-4.258-1.514-8.579-5.771-9.65c-4.261-1.067-8.579,1.514-9.65,5.771c-3.497,13.909-18.492,25.223-33.427,25.223h-63.602 c-7.307,0-13.251-5.944-13.251-13.251v-4.797c0.176,0.012,0.351,0.026,0.53,0.026h42.402c4.392,0,7.95-3.56,7.95-7.95 c0-4.391-3.559-7.95-7.95-7.95h-42.402c-0.179,0-0.354,0.015-0.53,0.026v-13.834c0.176,0.012,0.351,0.026,0.53,0.026h42.402 c4.392,0,7.95-3.56,7.95-7.95s-3.559-7.95-7.95-7.95h-42.402c-0.179,0-0.354,0.015-0.53,0.027v-13.834 c0.176,0.012,0.351,0.026,0.53,0.026h42.402c4.392,0,7.95-3.56,7.95-7.95s-3.559-7.95-7.95-7.95h-42.402 c-0.179,0-0.354,0.015-0.53,0.026v-4.797c0-7.307,5.944-13.251,13.251-13.251h63.602c18.997,0,34.451,15.455,34.451,34.451v23.321 C460.058,404.556,463.617,408.116,468.009,408.116z M382.675,469.598h34.981v13.251c0,7.307-5.944,13.25-13.25,13.25h-8.48 c-7.307,0-13.251-5.944-13.251-13.25V469.598z M299.58,312.712l-36.093,48.727l-3.422-10.266l10.488-38.46H299.58z M380.649,173.822c1.983,3.707,3.087,7.889,3.087,12.216c0,9.944-5.621,18.597-13.852,22.959 C374.26,198.782,378.325,186.776,380.649,173.822z M77.383,186.037c0-5.978,2.048-11.645,5.645-16.167 c5.209,17.709,9.242,31.341,12.066,40.783C84.812,207.194,77.383,197.47,77.383,186.037z M100.485,140.08 c-0.553,1.105-0.841,2.32-0.841,3.555v26.375c-1.475-5.009-3.052-10.376-4.732-16.096c-0.002-0.005-0.003-0.012-0.005-0.017 c-0.005-0.019-0.012-0.039-0.017-0.058C80.266,104.028,61.707,40.346,54.587,15.901h175.972 c75.109,0,136.215,61.106,136.215,136.215c0,1.235-0.031,2.558-0.099,4.16c-0.435,10.303-2.444,20.303-5.202,29.492v-42.132 c0-1.235-0.287-2.451-0.84-3.555l-25.441-50.882c-1.763-3.528-5.989-5.248-9.718-3.955l-94.916,33.015l-91.344-31.775l-3.572-1.24 c-3.775-1.308-7.932,0.383-9.717,3.955L100.485,140.08z M115.545,173.317v-27.804l21.479-42.956l90.924,31.627 c1.692,0.589,3.532,0.589,5.224,0l90.924-31.627l21.479,42.956v27.804c0,63.419-51.595,115.014-115.014,115.014 S115.545,236.736,115.545,173.317z M245.688,343.453h-30.257l-8.384-30.741h47.024L245.688,343.453z M251.927,377.044 l-21.367,28.846l-21.367-28.846l5.897-17.69h30.94L251.927,377.044z M190.566,312.712l10.489,38.461l-3.422,10.265l-36.094-48.727 H190.566z M332.853,355.644v84.803c0,16.074,13.078,29.151,29.151,29.151h4.77v26.501H94.344V347.164 c0-18.996,15.455-34.451,34.451-34.451h12.956l80.858,109.159v35.661c0,4.391,3.56,7.95,7.95,7.95s7.95-3.56,7.95-7.95v-35.661 l80.858-109.159h12.956c11.172,0,21.284,5.292,27.643,13.86C344.84,327.623,332.853,340.256,332.853,355.644z M417.657,326.493 h-34.981v-30.741h34.981V326.493z"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="group w-full rounded-lg bg-[rgb(41,49,79)] p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_rgb(244,67,54)]">
            @foreach ($user as $certif)
            <p class="text-white text-2xl">{{$certif->school->certificates->count()}}</p>
            @endforeach
                <p class="text-white text-sm">certificats</p>

                <svg fill="#ffffff" height="36px" width="36px" class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 465 465" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 465 465">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="m457.5,59.295h-450c-4.143,0-7.5,3.357-7.5,7.5v331.41c0,4.143 3.357,7.5 7.5,7.5h450c4.143,0 7.5-3.357 7.5-7.5v-331.41c0-4.143-3.357-7.5-7.5-7.5zm-7.5,331.41h-435v-316.41h435v316.41z"></path>
                            <path d="m37.5,338.463c16.399,0 29.742,13.343 29.742,29.742 0,4.143 3.357,7.5 7.5,7.5h255.517c4.143,0 7.5-3.357 7.5-7.5 0-4.143-3.357-7.5-7.5-7.5h-248.646c-3.165-18.673-17.94-33.448-36.613-36.613v-183.185c18.673-3.165 33.448-17.939 36.613-36.612h301.774c3.165,18.673 17.939,33.447 36.612,36.612v183.185c-18.673,3.165-33.447,17.94-36.612,36.613h-23.129c-4.143,0-7.5,3.357-7.5,7.5 0,4.143 3.357,7.5 7.5,7.5h30c4.143,0 7.5-3.357 7.5-7.5 0-16.399 13.342-29.742 29.741-29.742 4.143,0 7.5-3.357 7.5-7.5v-196.927c0-4.143-3.357-7.5-7.5-7.5-16.399,0-29.741-13.342-29.741-29.741 0-4.143-3.357-7.5-7.5-7.5h-315.516c-4.143,0-7.5,3.357-7.5,7.5 0,16.399-13.343,29.741-29.742,29.741-4.143,0-7.5,3.357-7.5,7.5v196.927c0,4.142 3.357,7.5 7.5,7.5z"></path>
                            <path d="m180.609,192.255c1.415,1.912 3.652,3.04 6.03,3.04s4.615-1.128 6.03-3.04l16.897-22.848 16.898,22.848c1.415,1.912 3.652,3.04 6.03,3.04s4.615-1.128 6.03-3.04l16.899-22.849 16.902,22.849c1.414,1.912 3.651,3.04 6.029,3.04s4.615-1.128 6.029-3.04l22.932-31c2.464-3.33 1.761-8.026-1.569-10.489-3.33-2.466-8.026-1.761-10.489,1.569l-16.902,22.849-16.903-22.849c-1.414-1.912-3.651-3.04-6.029-3.04-2.379,0-4.615,1.128-6.03,3.04l-16.898,22.848-16.898-22.848c-1.415-1.912-3.652-3.04-6.03-3.04s-4.616,1.128-6.03,3.04l-16.897,22.848-16.898-22.848c-2.465-3.332-7.159-4.03-10.49-1.57-3.33,2.464-4.033,7.16-1.57,10.49l22.927,31z"></path>
                            <path d="m375.098,257.795c0-4.143-3.357-7.5-7.5-7.5h-270.195c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5 7.5,7.5h270.194c4.143,0 7.501-3.357 7.501-7.5z"></path>
                            <path d="m280.021,300.705h-95.04c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5 7.5,7.5h95.04c4.143,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z"></path>
                            <path d="m97.403,235.295h270.194c4.143,0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-270.194c-4.143,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5z"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

        <div class="flex justify-between ">
        @foreach ($user as $certif)
            <h1 class="text-white font-bold text-3xl capitalize mt-3">certifs for {{$certif->school->name}}</h1>
            @endforeach
            <button class="h-10 w-10 text-white bg-cyan-600 rounded rounded-lg m-5" data-modal-target="ajouter" data-modal-toggle="ajouter">+</button>
        </div>
        <table class="min-w-full border-x border-gray-200 ml-1">
            <thead>

                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">certificat</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">school</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">subscribers</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody class="bg-gray-700 ">
                @foreach ($user as $certif)
                @foreach ($certif->school->certificates as $certife)


                <tr>
                    <td class="px-6 py-4 whitespace-nowrap border border-gray-200 text-white">{{$certife->title}}</td>
                    <td class="px-6 py-4 whitespace-nowrap border border-gray-200 text-white">{{$certif->school->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap border border-gray-200 text-white">{{$certife->subscribers->count()}}</td>
                    <td class="px-6 py-4 whitespace-wrap border border-gray-200  overflow-wrap break-word text-white">{{$certife->description}}</td>
                    <td class="px-6 py-4 whitespace-nowrap border border-gray-200 text-white">{{$certife->prix}}$</td>

                    <td class="px-4 py-4 whitespace-nowrap border border-gray-200">
                        <button data-modal-target="edit{{$certife->id}}" data-modal-toggle="edit{{$certife->id}}" class="p-2 mx-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">Edit</button>
                        <a type="button" href="{{route('detail',$certife->id)}}" class="p-2 mx-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">Details</a>
                        <a type="button" href="" class="p-2 mx-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endforeach


            </tbody>
        </table>

    </div>
</div>

@include('modals.adminstraion')