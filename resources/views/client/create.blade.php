<x-guest-layout>
    <form method="POST" action="{{ route('client.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome Completo')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Codigo de Login Ouro -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Cod. Login')" />
            <x-text-input id="login_code" class="block mt-1 w-full" type="text" name="login_code" :value="old('login_code')" required autocomplete="login_code" />
            <x-input-error :messages="$errors->get('login_code')" class="mt-2" />
        </div>
       
        <!-- Data de Nascimento -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required autocomplete="date_of_birth" />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>