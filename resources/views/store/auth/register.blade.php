<x-guest-layout>

    <form method="POST" action="{{ route('store.register') }}">
        @csrf
        <!-- Name -->
        <div style="border-bottom: solid 0.5px black;">
            <x-input-label for="name" :value="__()" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="&#xf007;  Username"
                :value="old('name')" required autofocus style="border: none; font-family:FontAwesome;" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4" style="border-bottom: solid 0.5px black;">
            <x-input-label for="email" :value="__()" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="&#xf0e0;  Email"
                :value="old('email')" required style="border: none; font-family:FontAwesome;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="border-bottom: solid 0.5px black;">
            <x-input-label for="password" :value="__()" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="&#xf023;  Password" style="border: none; font-family:FontAwesome;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-primary-button class="ml-4" style="background-color: green; margin-left:80%; ">
                {{ __('登録') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
