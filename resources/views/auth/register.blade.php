@include('layouts.main')
<div class="flex items-center justify-center w-full h-full overflow-hidden bg-purple-400">

    <div class="px-12 py-12 overflow-hidden bg-white shadow-xl rounded-2xl">
        <div>
            <h1 class="mb-4 text-3xl font-bold text-center cursor-pointer">Create an Account</h1>
            <p class="mb-2 text-sm font-semibold tracking-wide text-center text-gray-700 cursor-pointer w-80">Sign in to
                unlock exclusive travel experiences in Sri Lanka.</p>
        </div>

        <form action="{{ route('register.save') }}" method="POST" method="POST" class="space-y-4 overflow-hidden ">
            @csrf

            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            <div>
                <div class="flex space-x-2">
                    <input name="first_name" type="text" placeholder="First Name"
                        class="@error('first_name') is-invalid @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                    @error('first_name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                    <input name="last_name" type="text" placeholder="Last Name"
                        class="@error('last_name') is-invalid @enderror block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                    @error('last_name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>




            <div>
                <input name="email" type="email" placeholder="Enter Email Address"
                    class="block w-full px-4 py-3 text-sm border rounded-lg outline-purple-500" />
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <input name="password" type="password" placeholder="Enter Password"
                    class="block w-full px-4 py-3 text-sm border rounded-lg outline-purple-500" />
                @error('password')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>

                <input name="password_confirmation" type="password" placeholder="Confirm Password"
                    class="block w-full px-4 py-3 text-sm border rounded-lg outline-purple-500" />
                @error('password_confirmation')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-6 text-center">
                <button
                    class="w-full py-2 text-xl text-white transition-all bg-purple-400 rounded-lg hover:bg-purple-500">Create
                    Account</button>
                <p class="mt-4 text-gray-700 text-md">Already have an account? <a href="{{ route('login') }}"
                        class="font-bold text-gray-800 underline cursor-pointer">
                        Login</a>
                </p>
            </div>
        </form>


    </div>
</div>
