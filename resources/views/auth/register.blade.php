<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" >
                    <span class="text-gray-700 dark:text-gray-400">{{ _("name") }}</span>
                    <x-input id="name" class="block w-full mt-1"  placeholder="{{ _('Name') }}" type="text" name="name" :value="old('name')" />
                </x-label>
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" >
                    <span class="text-gray-700 dark:text-gray-400">{{ _("Email") }}</span>
                    <x-input id="email" class="block w-full mt-1"  placeholder="{{ _('Email') }}" type="email" name="email" :value="old('email')" />
                </x-label>
            </div>
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
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" >
                    <span class="text-gray-700 dark:text-gray-400">{{ _("Confirm Password") }}</span>
                    <x-input id="password_confirmation" class="block w-full mt-1"
                    type="password"
                    name="password_confirmation"
                    placeholder="**************"
                    required autocomplete="current-password" />
                </x-label>
            </div>
            <x-button>
                {{ __('Login') }}
            </x-button>    
        </form>
        <hr class="my-8" />          
        <x-admin.login-social />
        <p class="mt-1">
            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('login') }}">
            {{ __('Login account?') }}
            </a>
        </p>
    </x-auth-card>
</x-guest-layout>
