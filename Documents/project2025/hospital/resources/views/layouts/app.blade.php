<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .samasante-logo {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            color: #3b82f6; /* blue-500 */
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .samasante-logo:hover {
            color: #2563eb; /* blue-600 */
            transform: scale(1.02);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <div class="fixed top-4 left-4 z-50">
        <a href="{{ route('welcome') }}" class="samasante-logo flex items-center">
            <svg class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2z"/>
                <path d="M9 21V9h6v12"/>
                <path d="M12 9V5"/>
                <path d="M12 21v-4"/>
            </svg>
        </a>
    </div>

    @include('layouts.navigation')

    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <main class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm">
                © {{ date('Y') }} Sama Santé. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>