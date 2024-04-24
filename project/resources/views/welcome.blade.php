@include('includes.header')
<div class="w-full h-[500px] bg-center bg-cover"
    style="background-image: url(https://images.unsplash.com/photo-1462536943532-57a629f6cc60?q=80&w=1773&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); background-size:100% 100%;">
    <div class="flex items-end justify-center w-full h-full bg-gray-900 bg-opacity-50 py-12">
      <div class="text-center">
        <div class="container px-4 mx-auto">
          <div class="max-w-4xl w-xl mx-auto text-center">
            <a class="inline-block w-[900px] rounded-3xl mb-4 md:mr-6 py-5 px-8 text-sm font-bold uppercase border-xl border-transparent bg-gray-700/30 backdrop-blur-sm rounded   transition duration-200"
              href="{{route('index')}}"><span class="text-white text-4xl">DropSchool</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="flex justify-center bg-gray-900  min-w-lg mb-9">
    <div class="w-[250px] bg-[#110555] rounded-xl p-4 text-center text-xl text-white font-bold  absolute top-[650px] ">
<span>Explore all courses</span>
    </div>
</div>
<section class=" p-6 space-y-3 bg-gray-900 mb-5 w-full ">

    <h4 class="text-xl font-bold text-gray-300 capitalize  md:text-3xl text-center">choose a subject area</h4>


    <div class="flex items-center justify-center">
        <div class="grid gap-8 my-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- cards -->
@foreach ( $subjects as $subject)

            <div class="w-full max-w-xs text-center">
    

                <a href="{{route('SA',$subject->id)}}" >
                    <div
                        class="object-cover object-center w-full h-48 mx-auto rounded-lg bg-blue-100 border-4 border-blue-200">
                        <div class="py-16 px-4">
                            <h5 class="text-lg font-bold t">{{$subject->name}}</h5>
                            <span class="mt-1 font-medium ">{{$subject->level->level}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
            
    </div>
</section>
<section class=" p-6 space-y-3 bg-gray-900 mb-5 w-full h-[350px]">
<h4 class="text-xl font-bold text-gray-300 capitalize  md:text-3xl text-center mb-5"> featured course</h4>

<div class="max-w-3xl h-full mx-auto bg-white rounded-xl shadow-md  ">
    
    <div class="flex w-full">
        <div class="shrink-0">
            <img class="h-[302px] w-full object-cover md:w-48" src="https://loremflickr.com/g/320/240/team">
        </div>
        <div class="p-8">
            <a href="{{route('course',$course->id)}}" class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$course->title}}</a>
            <a href="{{route('prof',$user->id)}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline capitalize">{{$user->Firstname}} {{$user->lastname}}
            </a>
            <p class="mt-2 text-slate-500">{{$course->description}}
            </p>
        </div>
    </div>
</div>
</section>


<section class="flex flex-col justify-center max-w-6xl min-h-screen px-4 py-10 mx-auto sm:px-6">
    <div class="flex flex-wrap items-center justify-between mb-8">
        <h2 class="mr-10 text-4xl font-bold leading-none capitalize md:text-5xl text-gray-300">
        NEW LICENSE PROGRAMS
        </h2>
        <a href="/license   "
            class="block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">
            explore more
        </a>
    </div>

    <div class="flex flex-wrap -mx-4">
        @foreach ($certificates as $certif)
            
        <div class="w-full max-w-full mb-8 sm:w-1/2 px-4 lg:w-1/3 flex flex-col">
            <img src="https://source.unsplash.com/Lki74Jj7H-U/400x300" alt="Card img" class="object-cover object-center w-full h-48" />
            <div class="flex flex-grow">
                <div class="triangle"></div>
                <div class="flex flex-col justify-between px-4 py-6 bg-white border border-gray-400 text">
                    <div>
                        <a href="#"
                            class="inline-block mb-4 text-xs font-bold capitalize border-b-2 border-blue-600 hover:text-blue-600">{{$certif->school->name}}</a>
                        <a href="{{route('license',$certif->id)}}"
                            class="block mb-4 text-2xl font-black leading-tight hover:underline hover:text-blue-600">
                            {{$certif->title}}
                        </a>
                        <p class="mb-4">
                           {{$certif->description}}
                        </p>
                    </div>
                    <div>
                        <a href="{{route('license',$certif->id)}}"
                            class="inline-block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">Read
                            More -></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

      
    </div>
</section>

<div
    class="relative w-full bg-white px-6 pt-10 pb-8 mt-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10">
    <div class="mx-auto px-5">
        <div class="flex flex-col items-center">
            <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-5xl">FAQ</h2>
            <p class="mt-3 text-lg text-neutral-500 md:text-xl">Frequenty asked questions

            </p>
        </div>
        <div class="mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200">
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> How does the billing work?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                        billing options, including monthly and annual subscription plans, as well as pay-as-you-go
                        pricing for certain services. Payment is typically made through a credit card or other
                        secure online payment method.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Can I get a refund for my subscription?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                        guarantee for most of its subscription plans. If you are not satisfied with your
                        subscription within the first 30 days, you can request a full refund. Refunds for
                        subscriptions that have been active for longer than 30 days may be considered on a
                        case-by-case basis.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> How do I cancel my subscription?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To cancel your subscription, you can
                        log in to your account and navigate to the subscription management page. From there, you
                        should be able to cancel your subscription and stop future billing.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Is there a free trial?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a free trial of our software
                        for a limited time. During the trial period, you will have access to a limited set of
                        features and functionality, but you will not be charged.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> How do I contact support?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our platform or
                        have any other questions, you can contact the company's support team by submitting a support
                        request through the website or by emailing support@ourwebsite.com.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Do you offer any discounts or promotions?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We may offer discounts or promotions
                        from time to time. To stay up-to-date on the latest deals and special offers, you can sign
                        up for the company's newsletter or follow it on social media.
                    </p>
                </details>
            </div>
        </div>
    </div>
</div>


<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

  body {
    font-family: 'Montserrat', sans-serif;
  }
</style>
@if (session('success'))
    
<script>
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "{{ session('success') }}",
  showConfirmButton: false,
  timer: 1000
});
</script>
@endif
    

@include('includes.footer')