<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daniel Valencia Marin | Portfolio</title>
        <!-- SEO -->
        <meta name="description" content="Daniel Valencia Marin | Portfolio">
        <meta name="keywords" content="Daniel Valencia Marin, Daniel Valencia, Daniel, Valencia, Marin, Portfolio, CV,
        Curriculum, Curriculum Vitae, Software Engineer, Software, Engineer, FullStack, FullStack Developer, DevOps" />
        <meta name="author" content="Daniel Valencia Marin">
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
        <meta name="language" content="English" />
        <meta name="generator" content="Laravel" />

        <!-- icons -->
        <link  rel="shortcut icon" href="{{ url('/images/nebula.svg') }}">

        <!-- Fonts -->
        @vite('resources/css/app.css')

    </head>

    <body class="antialiased font-poppins flex flex-col m-0 p-0 w-full justify-center align-middle items-center bg-slate-950 text-white">

        <section class="md:max-w-2xl mx-10">

            @include('components.description')

            @include('components.workexperience')

            @include('components.projects')

            @include('components.links')

        </section>

    </body>

    @vite('resources/js/app.js')

</html>
