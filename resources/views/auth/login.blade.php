<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <x-label for="email" >
                <span class="text-gray-700 dark:text-gray-400">{{ _("Email") }}</span>
                <x-input id="email" class="block w-full mt-1"  placeholder="{{ _('Email') }}" type="email" name="email" :value="old('email')" />
            </x-label>
        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" >
                <span class="text-gray-700 dark:text-gray-400">{{ _("Password") }}</span>
                <x-input id="password" class="block w-full mt-1"
                type="password"
                name="password"
                placeholder="**************"
                required autocomplete="current-password" />
            </x-label>
        </div>
         <!-- Remember Me -->
         <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <!-- You should use a button here, as the anchor is only used for the example  -->
        <x-button>
            {{ __('Login') }}
        </x-button>    
        </form>
        <hr class="my-8" />          
        <x-admin.login-social />
        @if (Route::has('password.request'))
            <p class="mt-4">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </p>
        @endif
        @if (Route::has('register'))
            <p class="mt-1">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('register') }}">
                {{ __('Create account?') }}
                </a>
            </p>
        @endif
    </x-auth-card>
</x-guest-layout>