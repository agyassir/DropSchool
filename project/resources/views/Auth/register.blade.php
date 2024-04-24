<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">

<main>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Display validation errors if they exist -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="bg-white dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
            <div class="container flex flex-col items-center p-6 mx-auto">
            <a href="/" class="mx-auto ">
            <svg fill="#ffffff" class="w-12 h-12 hover:fill-blue-800 " viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
    <g id="SVGRepo_iconCarrier">
        <path d="M7.713 4.552c0.573-0.333 1.167-0.631 1.787-0.891 1.307-0.557 2.656-0.875 4.047-1.016l1.5 1.699-0.697 1.755c-1.36 0.261-2.641 0.761-3.839 1.485l-0.26 0.156-0.235-2.313-2.303-0.88zM7.063 4.964l2.385 0.921 0.249 2.281c-1.291 0.948-2.301 2.161-3.020 3.64-0.068 0.131-0.131 0.261-0.188 0.396l-1.677-2.036-2.739 0.579c0.681-1.475 1.604-2.787 2.749-3.948 0.688-0.693 1.428-1.303 2.224-1.833zM22.771 21.036c0.26-0.432 0.469-0.869 0.641-1.323l2.583 3.136 4.339-0.937c-0.251 0.687-0.541 1.353-0.88 2.009-0.896 1.724-2.073 3.215-3.532 4.48-1.484 1.287-3.161 2.224-5.031 2.812-0.036 0.011-0.073 0.021-0.109 0.032l-3.213-2.719 0.839-3.699 0.067-0.025c1.839-0.803 3.276-2.043 4.297-3.781zM28.203 6.407c0.267 0.364 0.511 0.744 0.751 1.14 0.989 1.661 1.672 3.443 2.052 5.339 0.364 1.88 0.421 3.771 0.161 5.667-0.14 0.912-0.339 1.803-0.62 2.672l-4.339 0.932-2.599-3.145c0.303-1.156 0.339-2.36 0.079-3.609-0.303-1.484-0.959-2.756-1.939-3.803l4.677-0.557 1.745-4.635zM1.787 11.448l2.797-0.593 1.651 2.009c-0.527 1.448-0.641 2.948-0.38 4.505 0.057 0.448 0.156 0.876 0.276 1.292l-2.959-0.672-2.12 2.511c-0.255-1.115-0.375-2.249-0.375-3.407 0-1.937 0.359-3.801 1.072-5.599l0.021-0.052zM6.375 19.36c0.423 1.124 1.047 2.151 1.876 3.088 0.619 0.713 1.323 1.297 2.088 1.755l-2.937 1.683 0.161 3.817c-0.969-0.599-1.86-1.317-2.667-2.14-1.36-1.401-2.401-2.995-3.12-4.797-0.197-0.5-0.36-1-0.5-1.5l2.183-2.563 2.957 0.683zM10.973 24.552c0.631 0.317 1.308 0.557 2.027 0.719 1.609 0.375 3.183 0.313 4.703-0.188l-0.833 3.677 3.183 2.693c-1.588 0.416-3.213 0.593-4.875 0.536-1.943-0.063-3.808-0.473-5.589-1.235-0.479-0.203-0.937-0.427-1.385-0.676l-0.161-3.844zM27.755 5.817l-1.749 4.652-4.823 0.577c-0.141-0.12-0.281-0.24-0.433-0.339-1.583-1.203-3.364-1.901-5.337-2.104-0.464-0.036-0.901-0.036-1.324-0.036l1.683-4.303-3.635-4.14c1.099-0.12 2.181-0.136 3.276-0.12 0.656 0.021 1.301 0.068 1.948 0.151 0.905 0.12 1.796 0.317 2.681 0.563 1.876 0.532 3.584 1.375 5.125 2.573 0.973 0.744 1.833 1.588 2.588 2.525z"></path>
    </g>
</svg> 
            </a>
        </div> 
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Get your free account now.
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                </p>


                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" action="{{route('register')}}" method="post" onsubmit="return validateForm()" >
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"> FirstName</label>
                        <input type="text" name="fname" id="name" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"> LastName</label>
                        <input type="text" name="lname" id="name" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                        <input type="email" name="email" id="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <button type="submit"
                        class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign Up </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</main>
<script>
    function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirme = document.getElementById('password_confirmation').value;
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            alert('nom est non corect');
            return false;
        }
        var emailRegex = /^\S+@\S+\.\S+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return false;
        }
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        if (!passwordRegex.test(password)) {
            alert('Please enter a valid password ');
            return false;
        }
        if (password.trim() !== confirmPassword.trim()) {
    alert('Passwords do not match. Please enter matching passwords.');
    return false;
}

        return true;
    }
</script>
</body>
</html>