<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-extrabold text-slate-900">Create Account</h2>
        <p class="text-sm text-slate-600 mt-2">Dapatkan akses ke konten eksklusif Membership Tipe A secara gratis.</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" class="font-semibold text-slate-700" />
            <x-text-input id="name" class="block mt-1 w-full border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-slate-700" />
            <x-text-input id="email" class="block mt-1 w-full border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-slate-700" />
            <x-text-input id="password" class="block mt-1 w-full border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold text-slate-700" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-slate-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300">
                {{ __('Register') }}
            </button>
        </div>
    </form>

    <div class="relative flex items-center py-6">
        <div class="flex-grow border-t border-slate-200"></div>
        <span class="flex-shrink mx-4 text-slate-400 text-xs font-bold uppercase tracking-wider">Or register with</span>
        <div class="flex-grow border-t border-slate-200"></div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <a href="{{ route('social.login', 'google') }}" 
           class="flex items-center justify-center px-4 py-2.5 border border-slate-200 shadow-sm text-sm font-bold rounded-xl text-slate-700 bg-white hover:bg-slate-50 transition-all duration-300">
           <img class="h-5 w-5 mr-2" src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
           Google
        </a>

        <a href="{{ route('social.login', 'facebook') }}" 
           class="flex items-center justify-center px-4 py-2.5 border border-slate-200 shadow-sm text-sm font-bold rounded-xl text-slate-700 bg-white hover:bg-slate-50 transition-all duration-300">
           <img class="h-5 w-5 mr-2" src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Facebook">
           Facebook
        </a>
    </div>

    <p class="mt-8 text-center text-sm text-slate-600">
        Sudah punya akun? 
        <a href="{{ route('login') }}" class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">Log in</a>
    </p>
</x-guest-layout>