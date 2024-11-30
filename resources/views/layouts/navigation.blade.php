<div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
    <div class="px-4">
        <!-- Enlaces de Login y Register -->
        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('login')">
                {{ __('Iniciar sesión') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('register')">
                {{ __('Registrarse') }}
            </x-responsive-nav-link>
        </div>
    </div>
</div>
