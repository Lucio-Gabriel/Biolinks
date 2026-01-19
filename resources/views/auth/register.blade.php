<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />

                <x-input name="email" placeholder="Email" value="{{ old('email') }}" />

                <x-input name="email_confirmation" placeholder="Email confirmation" />

                <x-input type="password" name="password" placeholder="Email confirmation" />
            </x-form>

            <x-slot:actions>
                <x-button type="submit" form="register-form">Registrar</x-button>
            </x-slot>
        </x-card>
    </x-container>
</x-layout.app>