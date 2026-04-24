<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog — @yield('title', 'Accueil')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">

    <nav class="bg-white shadow-sm py-4 px-6 flex justify-between items-center">
        <a href="{{ route('articles.index') }}" class="text-xl font-bold text-indigo-600">MonBlog</a>
        {{-- <div class="flex gap-4 items-center">
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 hover:text-indigo-600">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">Connexion</a>
            @endauth
        </div> --}}
    </nav>

    <main class="max-w-4xl mx-auto py-8 px-4">
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>