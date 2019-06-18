<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue-router</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="container mx-auto bg-grey">
                <header class="mb-6 py-6">
                    <h1>Laracasts</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <ul>
                            <li class="mb-5"><router-link style="border: 1px solid black; border-radius: 30%; padding: 4%;" to="/">Home</router-link></li>
                            <li><router-link style="border: 1px solid black; border-radius: 30%; padding: 4%;" :to="{ name: 'about' }">About</router-link></li>
                        </ul>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
