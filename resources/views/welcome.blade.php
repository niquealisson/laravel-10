<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-10</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados aqui */
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <script>
        // Função para gerar uma cor aleatória em formato hexadecimal
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Aplica uma cor aleatória ao fundo da página
        document.body.style.backgroundColor = getRandomColor();
        
        // Aplica uma cor aleatória ao texto dos links
        const links = document.querySelectorAll('a');
        links.forEach(link => {
            link.style.color = getRandomColor();
        });
    </script>
    
    <div class="min-h-screen flex items-center justify-center">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div id="random-background" class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg custom-card">
            <h1 class="text-3xl font-semibold">Bem-vindo ao Laravel-10</h1>
            <p class="mt-4">Este é um exemplo de página web usando Laravel.</p>
        </div>        
    </div>
</body>
</html>
