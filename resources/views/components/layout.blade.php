<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="w-full bg-stone-800 h-12">

        <nav class="grid grid-cols-3 items-center h-full max-w-[1200px] m-auto">
            <div>
                <x-nav-link :linkUrl=" '/' " :label="'Logo'" />
            </div>
            <div>
                <x-nav-item />
            </div>
            <div class="flex justify-center gap-8 justify-self-end">
                @guest
                    <x-nav-link :linkUrl=" '/login-form' " :label="'Login'" :type="'button'" />
                    <x-nav-link :linkUrl=" '/register' " :label="'sign up'" :type="'button'" />
                @endguest

                @auth
                <x-nav-link :linkUrl=" '/logout' " :label="'Logout'" :type="'button'" />
                @endauth

            </div>

        </nav>

    </header>
    <main class="max-w-[1000px] m-auto">
        <section>
            {{$slot}}
        </section>
    </main>
</body>

</html>