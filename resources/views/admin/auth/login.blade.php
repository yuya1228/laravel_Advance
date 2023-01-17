<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <!-- Email Address -->
        <div style="border-bottom: solid 0.5px black;>
            <x-input-label for="email" :value="__()" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="&#xf0e0;  Email"
            :value="old('email')" required autofocus style="border: none; font-family:FontAwesome;" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="border-bottom: solid 0.5px black;">
            <x-input-label for="password" :value="__()" />

            <x-text-input id="password" class="block mt-1 w-full" placeholder="&#xf023;  Password" type="password"
                name="password" required autocomplete="current-password"
                style="border: none; font-family:FontAwesome;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" style="background-color:red;">
                {{ __('ログイン') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
