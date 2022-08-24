
            {{-- right --}}
            <x-guest-layout>

            <div class="container-fluid  bg-light px-4 " >
                <div class="row h-100 ">
                    <div class="bg-light col-md-6 d-flex flex-column   ">
                        <div class=" pt-4">
                            <a href="/">
                                <img class="" src="{{ asset('storage/Login-picture/logo.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="h-75 w-100 d-flex pt-5 px-4 align-items-center justify-content-center">
                            <img class="img-fluid"  src="{{ asset('storage/Login-picture/illustration.png') }}" alt="...">
                        </div>
                    </div>
                    <div class="h-100 col-md-6">
                        <x-auth-card>
                            <x-slot name="logo">
                            
                            </x-slot>
                    
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                    
                                <!-- Email Address -->
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                    
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                    
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />
                    
                                    <x-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                </div>
                    
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                    
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                    
                                    <x-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>
                            </form>
                        </x-auth-card>
            </div>
        </div>
    </div>
            </x-guest-layout>
            


