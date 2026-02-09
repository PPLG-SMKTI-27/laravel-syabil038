<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">
                    
                    <p>
                        {{ __("You're logged in!") }}
                    </p>

                    <!-- Tombol kembali ke halaman portofolio -->
                    <a href="{{ url('/') }}"
                       class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                        ⬅ Kembali ke Portofolio
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>