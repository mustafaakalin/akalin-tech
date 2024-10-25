<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Akalan Tech</title>

    <!-- Fonts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-base-100 text-base-content">

    <!-- Navbar -->
    <header class="sticky top-0  z-50  bg-opacity-80 backdrop-blur-lg shadow-lg">
        <div class="navbar  container mx-auto px-4 rounded-b-lg shadow-md">
            <!-- Logo -->
            <div class="flex-1">
                <a href="/" class="btn btn-ghost normal-case text-xl font-bold tracking-wider">
                    Akalan<span class="text-primary">Tech</span>
                </a>
            </div>


            <!-- Desktop Menu -->
            <div class="hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/services" class="hover:text-primary">Services</a></li>
                    <li><a href="/projects" class="hover:text-primary">Projects</a></li>
                    <li><a href="/blog" class="hover:text-primary">Blog</a></li>
                    <li><a href="/contact" class="hover:text-primary">Contact</a></li>
                </ul>
            </div>

            <!-- Theme Selector Dropdown -->
            <div class="flex-none">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn m-1">
                        Theme
                        <svg width="12px" height="12px" class="inline-block h-2 w-2 fill-current opacity-60"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                            <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl">
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Light"
                                value="light" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dark"
                                value="dark" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Cupcake" value="cupcake" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Bumblebee" value="bumblebee" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Emerald" value="emerald" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Corporate" value="corporate" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Synthwave" value="synthwave" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Retro"
                                value="retro" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Cyberpunk" value="cyberpunk" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Valentine" value="valentine" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Halloween" value="halloween" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Garden" value="garden" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Forest" value="forest" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Aqua"
                                value="aqua" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Lofi"
                                value="lofi" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Pastel" value="pastel" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Fantasy" value="fantasy" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Wireframe" value="wireframe" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Black"
                                value="black" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Luxury" value="luxury" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Dracula" value="dracula" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="CMYK"
                                value="cmyk" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Autumn" value="autumn" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Business" value="business" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Acid"
                                value="acid" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Lemonade" value="lemonade" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Night"
                                value="night" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Coffee" value="coffee" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Winter" value="winter" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dim"
                                value="dim" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Nord"
                                value="nord" />
                        </li>
                        <li>
                            <input type="radio" name="theme-dropdown"
                                class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                                aria-label="Sunset" value="sunset" />
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="h-screen bg-white flex items-center justify-center text-center">
        <div>
            <h1 class="text-4xl font-bold">Akalın Tech</h1>
            <p class="mt-4 text-lg">Your trusted software & cybersecurity partner</p>
            <div class="mt-6">
                <a href="/services" class="btn btn-primary">Our Services</a>
                <a href="/contact" class="btn btn-secondary ml-4">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title">Service 1</h3>
                        <p>Short description of service 1.</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title">Service 2</h3>
                        <p>Short description of service 2.</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title">Service 3</h3>
                        <p>Short description of service 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center">Our Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title">Project 1</h3>
                        <p>Short description of project 1.</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h3 class="card-title">Project 2</h3>
                        <p>Short description of project 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center">Contact Us</h2>
            <form action="/contact" method="POST" class="max-w-lg mx-auto mt-8">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium">Name</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="email" name="email" class="input input-bordered w-full" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium">Message</label>
                    <textarea id="message" name="message" class="textarea textarea-bordered w-full" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-full">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-base-200 py-8 mt-12">
        <div class="container mx-auto text-center">
            <p class="text-base-content">© 2024 Akalan Tech - All Rights Reserved</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // LocalStorage'de kayıtlı tema varsa onu uygula
        document.addEventListener('DOMContentLoaded', function () {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                document.documentElement.setAttribute('data-theme', savedTheme);
                const radios = document.querySelectorAll('.theme-controller');
                radios.forEach(radio => {
                    if (radio.value === savedTheme) {
                        radio.checked = true;
                    }
                });
            }

            // Tema değiştiğinde localStorage'a kaydet
            const radios = document.querySelectorAll('.theme-controller');
            radios.forEach(radio => {
                radio.addEventListener('change', function () {
                    const selectedTheme = this.value;
                    document.documentElement.setAttribute('data-theme', selectedTheme);
                    localStorage.setItem('theme', selectedTheme);
                });
            });
        });
    </script>

    @stack('scripts')
</body>

</html>