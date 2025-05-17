<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Admin Panel')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/admin-panel.css', 'resources/js/admin-panel.js'])
        @stack('styles')
    </head>
    <body class="font-instrument bg-gray-100">
        <header class="bg-gray-800 text-white p-4">
            <nav>
                <ul class="flex space-x-4">
                    <li>
                    	<a href="{{ url('/') }}" class="hover:text-gray-400">
	                    	<x-icon name="user" width="12" height="12" class="text-gray-600" /> Users
	                    </a>
                    </li>
                    <li>
                    	<a href="{{ url('/') }}" class="hover:text-gray-400">
		                    <x-icon name="settings" width="12" height="12" class="text-gray-800" /> Settings
		                </a>
                	</li>
                </ul>
            </nav>
        </header>

        <main class="container mx-auto py-6">
            @yield('content')
        </main>

        <footer class="bg-gray-800 text-white p-4">
            <p>&copy; {{ date('Y') }} PBDAP. All rights reserved.</p>
        </footer>

        @stack('scripts')
    </body>
</html>
