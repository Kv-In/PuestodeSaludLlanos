<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Tus Datos') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualice la información del perfil y la dirección de correo electrónico de su cuenta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">Cui</label>
            <input id="cui" name="cui" type="text" 
            class="form-control" value="{{ old('cui', $user->cui) }}" required autofocus autocomplete="cui">
            @error('cui')
            <div class="mt-2 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" 
            class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
            <div class="mt-2 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input id="phone" name="phone" type="text" 
            class="form-control" value="{{ old('phone', $user->phone) }}" required autofocus autocomplete="phone">
            @error('phone')
            <div class="mt-2 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
            <div class="mt-2 text-danger">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                {{ __('Your email address is unverified.') }}

                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Guardar Cambio') }}</button>

            @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ __('Guardar Cambios') }}</p>
            @endif
        </div>
    </form>
</section>
