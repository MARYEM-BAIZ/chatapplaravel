<x-guest-layout>
    
        <!-- <x-slot name="logo">
           
        </x-slot> -->

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />



        <div style="margin-top: 100px;width: 500px;" class="card border-0 shadow rounded-3 mx-auto">
          <div style="padding:40px;">
            <h5 style="text-align:center;font-size: 20px"  class=" mb-5  ">S'inscrire</h5>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div style="margin-bottom: 30px;">
                <x-label class="mb-2" for="name" :value="__('Name')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- type d'utilisateur -->
            <div style="margin-bottom: 30px;">
            <x-label class="mb-2" for="typeuser" :value="__('Type utilisateur')" />
            <select name="typeutilisateur" style=" border-radius: 30px; border-color:gray; width:100%;padding: 10px;" class="form-select" aria-label="Default select example">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>

            <!-- groupe -->
            <div style="margin-bottom: 30px;">
            <x-label class="mb-2" for="groupe" :value="__('Groupe')" />
            <select name="groupe" style=" border-radius: 30px; border-color:gray; width:100%;padding: 10px;" class="form-select" aria-label="Default select example">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>

            


            <!-- phtoto du profile -->
            <div style="margin-bottom: 30px;">
            <x-label class="mb-2" for="phtoto du profile" :value="__('Phtoto du profile')" />
            
            <x-input type="file" class="form-control " name="photoduprofile" :value="old('photoduprofile')" />
            </div>

            <!-- Email Address -->
            <div style="margin-bottom: 30px;">
                <x-label class="mb-2" for="email" :value="__('Email')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            

            <!-- Password -->
            <div style="margin-bottom: 30px;">
                <x-label class="mb-2" for="password" :value="__('Password')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div >
                <x-label class="mb-2" for="password_confirmation" :value="__('Confirm Password')" />

                <x-input style=" border-radius: 30px; padding: 10px;" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button style=" border-radius: 30px; padding: 15px; " class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>


    
</x-guest-layout>
