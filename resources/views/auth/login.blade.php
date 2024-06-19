@include('layouts.main')

<div class="flex items-center justify-center w-full h-full overflow-hidden bg-purple-400">

    <div class="px-12 py-12 overflow-hidden bg-white shadow-xl rounded-2xl">
        <div>
            <h1 class="mb-4 text-3xl font-bold text-center cursor-pointer">Login to Account</h1>
            <p class="mb-2 text-sm font-semibold tracking-wide text-center text-gray-700 cursor-pointer w-80">Lorem ipsum
                dolor, sit amet consectetur adipisicing elit. </p>
        </div>

        <form action="{{ route('login.action') }}" method="POST" class="space-y-4 overflow-hidden ">
            @csrf


            <div>
                <input name="email" type="email" placeholder="Enter Email Address"
                    class="block w-full px-4 py-3 text-sm border rounded-lg outline-purple-500" />

            </div>
            <div x-data="{ showen: true }">


                <div x-show="showen">
                    <div class="space-y-2 text-gray-700" x-data="{ isshow: false }">

                        <div class="relative focus-within:text-gray-900 dark:focus-within:text-gray-800 ">

                            <input class="block w-full px-4 py-3 text-sm border rounded-lg outline-purple-500"
                                id="password" x-bind:type="isshow ? 'text' : 'password'" name="password" required
                                autocomplete="new-password" placeholder="Enter Password" type="password">


                            <div class="absolute right-0 z-30 flex items-center px-4 inset-y-1 ">
                                <button type="button" @click="isshow=!isshow" class="z-30 ">
                                    <svg x-show="!isshow" aria-hidden="true" class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg> <svg x-show="isshow" aria-hidden="true" class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" style="display: none;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                        </path>
                                    </svg> </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="mt-6 text-center">
                <button
                    class="w-full py-2 text-xl text-white transition-all bg-purple-400 rounded-lg hover:bg-purple-500">Login</button>
                <p class="mt-4 text-gray-700 text-md">Don't have an account? <a href="{{ route('register') }}"
                        class="font-bold text-gray-800 underline cursor-pointer">
                        Register</a>
                </p>
            </div>
        </form>


    </div>
</div>
