<nav class="bg-white dark:bg-gray-950 shadow print:hidden" x-data="{ mobileMenuOpen: false }">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="flex items-center justify-start sm:items-stretch">
                <div class="hidden lg:flex space-x-8" id="navigation-menu-items">
                    @php
                        $routeStyle = function (string $routePrefix) {
                            $current = 'border-indigo-500 text-gray-900 dark:text-gray-200';
                            $default = 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300';
                            return str(request()->route()->getName())->startsWith($routePrefix) ? $current : $default;
                        };
                    @endphp
                    <a wire:navigate.hover href="{{ route('foo') }}" tabindex="-1" class="inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium {{ $routeStyle('foo') }}">Foo</a>
                    <a wire:navigate.hover href="{{ route('bar') }}" tabindex="-1" class="inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium {{ $routeStyle('bar') }}">Bar</a>
                </div>
            </div>

            <div class="flex flex-1 items-center justify-end sm:items-stretch">
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = ! mobileMenuOpen" type="button" :class="mobileMenuOpen ? 'bg-gray-50 dark:bg-gray-800' : ''" tabindex="-1" class="lg:hidden inline-flex items-center justify-center rounded-md p-2 px-3 my-2 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-500 dark:hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                </div>
            </div>
        </div>
    </div>

    <div x-cloak :class="mobileMenuOpen ? 'block' : 'hidden'" class="lg:hidden" id="mobile-menu">
        <div class="space-y-1 pt-2 pb-4">
            @php
                $mobileRouteStyle = function (string $routePrefix) {
                    $current = 'border-indigo-500 bg-indigo-50 text-indigo-700 dark:bg-indigo-950 dark:text-indigo-500';
                    $default = 'border-transparent text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-600 dark:hover:bg-gray-950 dark:hover:text-gray-500';
                    return str(request()->route()->getName())->startsWith($routePrefix) ? $current : $default;
                };
            @endphp
            <a wire:navigate href="{{ route('foo') }}" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium {{ $mobileRouteStyle('foo') }}">Foo</a>
            <a wire:navigate href="{{ route('bar') }}" class="block border-l-4 py-2 pl-3 pr-4 text-base font-medium {{ $mobileRouteStyle('bar') }}">Bar</a>
        </div>
    </div>
</nav>
