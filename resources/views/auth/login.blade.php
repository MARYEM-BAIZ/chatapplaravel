<x-guest-layout>
    
        <!-- <x-slot name="logo">
            
        </x-slot> -->



         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />



        
        <div style="margin-top: 100px;width: 500px;" class="card border-0 shadow rounded-3 mx-auto">
          <div style="padding:40px;">
            <h5 style="text-align:center;font-size: 20px"  class=" my-5  ">Se connecter</h5>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div style="margin-bottom: 30px;">
                <x-label class="mb-2" for="email" :value="__('Email')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div >
                <x-label class="mb-2" for="password" :value="__('Password')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="password" class="block mt-1 w-full"  type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-3">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                <div class="flex items-center justify-end mt-5 ">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div>

            </div>

            <div class=" mt-4">
               

                <x-button style=" border-radius: 30px; padding: 15px; width:100%; " >
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>
        
  
</x-guest-layout>
