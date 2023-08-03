<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <header>

        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <ul>
                            <li class="nav-item">
                                <a href="{{ Route('admin.projects.index') }}" class="nav-link">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-8">

                    </div>
                </div>
            </div>
        </main>
    </html>
