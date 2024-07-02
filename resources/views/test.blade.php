<html>

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ env('APP_NAME') }} - {{ $title ?? ' ' }}</title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')

    <style>
        .glass-effect {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body>

    @if ($errors->any())
        <x-alert-box :colour="'red'">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </x-alert-box>
    @endif
    <!-- Background Image -->
    <div class="absolute w-full h-screen inset-00">
        <img src="{{ asset('assets\images\home-background.png') }}" alt="Background"
            class="object-cover w-full h-full opacity-25">
    </div>

    <div class="relative z-20 max-h-screen bg-transparent dark:bg-slate-900">
        <!-- Nav -->
        <header>
            <nav class="bg-transparent border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
                <div class="items-center max-w-screen-xl mx-auto">
                    <a href="/" class="flex items-center justify-center order-2">
                        <img src="{{ asset('assets/images/landing/company-logo.png') }}" class="h-24 mr-3"
                            alt="Company Logo" />
                    </a>
                </div>
            </nav>
        </header>

        <!-- Content -->


        <section class="bg-transparent dark:bg-gray-900">
            <div class="grid max-w-screen-xl gap-8 px-4 py-4 mx-auto xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-6 text-4xl font-extrabold leading-none tracking-tight text-center text-gray-900 md:text-5xl xl:text-6xl dark:text-white lg:text-left">
                        Unlock Your Adventure with <span
                            class="text-teal-600 transition duration-200 ease-in-out text-slate-600 dark:text-slate-500 hover:text-slate-700">Ceylon
                            Wander. </span></h1>
                    <p
                        class="max-w-2xl mb-6 font-light text-center text-gray-500 lg:mb-10 md:text-lg lg:text-xl dark:text-gray-400 lg:text-left">
                        Enhance Your Travel Experience and Discover Sri Lanka with Ceylon Wander, Your All-in-One Travel
                        Companion. Start Exploring with Us Now!
                    </p>



                    <div class="flex items-start gap-4 mx-auto mt-8">
                        <a href="#" title=""
                            class="inline-flex items-center justify-center w-full px-2 py-3 text-left text-white bg-gray-900 rounded-lg sm:px-4 sm:w-auto hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                            role="button">
                            <svg aria-hidden="true" class="w-8 h-8 sm:w-10 sm:h-10" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z">
                                </path>
                            </svg>

                            <div class="ml-2.5">
                                <span class="block text-xs font-normal leading-none">
                                    Coming soon
                                </span>
                                <span class="block text-lg font-bold leading-tight">
                                    AppStore
                                </span>
                            </div>
                        </a>

                        <a href="#" title=""
                            class="inline-flex items-center justify-center w-full px-2 py-3 text-left text-white bg-gray-900 rounded-lg sm:px-4 sm:w-auto hover:bg-gray-800 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                            role="button">
                            <svg aria-hidden="true" class="w-8 h-8 sm:w-10 sm:h-10" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="m12.954 11.616 2.957-2.957L6.36 3.291c-.633-.342-1.226-.39-1.746-.016l8.34 8.341zm3.461 3.462 3.074-1.729c.6-.336.929-.812.929-1.34 0-.527-.329-1.004-.928-1.34l-2.783-1.563-3.133 3.132 2.841 2.84zM4.1 4.002c-.064.197-.1.417-.1.658v14.705c0 .381.084.709.236.97l8.097-8.098L4.1 4.002zm8.854 8.855L4.902 20.91c.154.059.32.09.495.09.312 0 .637-.092.968-.276l9.255-5.197-2.666-2.67z">
                                </path>
                            </svg>

                            <div class="ml-2.5">
                                <span class="block text-xs font-normal leading-none">
                                    Coming soon
                                </span>
                                <span class="block text-lg font-bold leading-tight">
                                    Google Play
                                </span>
                            </div>
                        </a>
                    </div>



                </div>

                <div class="glass-effect lg:col-span-5">
                    <div class="p-2 transition duration-700 ease-in-out rounded-lg shadow-lg lg:flex hover:shadow-2xl">
                        <div class="w-full px-8 py-4 border rounded-lg border-slate-200">
                            <div class="items-center">
                                <a href="/" class="flex items-center justify-center order-2">
                                    <img src="{{ asset('assets/images/landing/company-logo.png') }}" class="h-20 mr-3"
                                        alt="Company Logo" />
                                </a>
                            </div>

                            <!-- Login Form -->
                            <form id="login-form" class="mt-4 space-y-4" action="#" method="POST"
                                action="{{ route('login') }}">
                                @csrf
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox"
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-slate-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-slate-600 dark:ring-offset-gray-800">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="remember"
                                                class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="ml-auto text-sm text-slate-700 hover:underline dark:text-slate-500">Lost
                                        Password?</a>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-2 text-center dark:bg-slate-600 dark:hover:bg-slate-500 dark:focus:ring-slate-700">
                                    Login to your account
                                </button>

                                <div class="flex items-center">
                                    <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                                    <div class="flex text-center text-gray-600 cursor-pointer dark:text-gray-400"
                                        id="show-register-form">

                                        <p class="mt-4 text-gray-700 text-md">Don't have an account?
                                            <button class="font-bold text-gray-800 underline cursor-pointer "
                                                id="show-register-form">
                                                Register</button>
                                        </p>
                                    </div>
                                    <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                                </div>
                            </form>

                            <!-- Register Form -->
                            <form id="register-form" class="hidden mt-4 space-y-6" action="#" method="POST"
                                action="{{ route('register') }}">
                                @csrf
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        name</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Your Name" required="">
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required="">
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                        password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required="">
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-slate-600 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-500 dark:focus:ring-slate-700">
                                    Create your account
                                </button>

                                <div class="flex items-center">
                                    <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                                    <div class="flex px-5 text-center text-gray-600 cursor-pointer dark:text-gray-400"
                                        id="show-login-form">
                                        Login
                                    </div>
                                    <div class="w-full h-0.5 bg-gray-200 dark:bg-gray-700"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </section>

        <!-- Footer -->

        <footer class="p-4 bg-transparent md:p-6 lg:p-4 dark:bg-gray-800">
            <div class="flex flex-row justify-between max-w-screen-xl mx-auto text-center justify-items-center">
                <span class="block text-sm text-gray-500 dark:text-gray-400">© {{ now()->format('Y') }} <a
                        href="/" class="hover:underline">{{ env('APP_NAME') }}</a>. All Rights
                    Reserved.


                </span>

                <ul class="text-center">
                    <li
                        class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-neutral-600">
                        <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 hover:underline dark:text-neutral-500 dark:hover:text-neutral-200"
                            href="#">
                            About
                        </a>
                    </li>
                    <li
                        class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-neutral-600">
                        <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 hover:underline dark:text-neutral-500 dark:hover:text-neutral-200"
                            href="#">
                            Privacy Policy
                        </a>
                    </li>
                    <li
                        class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 dark:before:text-neutral-600">
                        <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 hover:underline dark:text-neutral-500 dark:hover:text-neutral-200"
                            href="#">
                            Blog
                        </a>
                    </li>
                </ul>
                <!-- End Col -->

                <span class="block text-sm text-gray-700 dark:text-gray-400"> Carefully handcrafted by
                    <a href="#" target="blank" class="hover:underline">Ceylon Lab</a>.</span>

            </div>
        </footer>
    </div>

    <!-- Scripts -->
    @stack('script')
    <!-- JavaScript -->
    <script>
        document.getElementById('show-register-form').addEventListener('click', function() {
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.remove('hidden');
        });

        document.getElementById('show-login-form').addEventListener('click', function() {
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
        });
    </script>



</body>

</html>
