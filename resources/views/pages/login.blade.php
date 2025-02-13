<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg flex h-150 w-full max-w-4xl">
            <!-- Sign In Section -->
            <div class="w-1/2 bg-green-950 text-white p-10 rounded-l-lg flex flex-col justify-center">
                <div class="flex flex-col items-center">
                    <svg width="70" height="70" aria-hidden="true" class="e-font-icon-svg e-fas-user-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z" fill="white"></path>
                    </svg>

                    <h2 class=" mt-5 text-2xl font-bold mb-6">
                        Sign in to an existing Account
                    </h2>
                    <div>
                        <form class="space-y-4">
                            <input class="w-full p-3 mb-4 rounded bg-white text-black" placeholder="Username or E-mail" type="text" />
                            <input class="w-full p-3 mb-4 rounded bg-white text-black" placeholder="Password" type="password" />
                            <div class="flex items-center mb-4">
                                <input class="mr-2" id="remember" type="checkbox" />
                                <label class="text-sm" for="remember">
                                    Keep me signed in
                                </label>
                            </div>
                            <button class="w-full bg-black text-white p-3 rounded" type="submit">
                                Login
                            </button>
                        </form>
                    </div>
                    <a class="text-sm mt-4" href="#">
                        Forgot your password?
                    </a>
                </div>
            </div>
            <!-- Sign Up Section -->
            <div class="text-center w-1/2 bg-lime-50 text-black rounded-r-lg flex flex-col items-center justify-center">
                <img alt="Boom Laptop logo" class="mb-4" height="100" src="\assets\boom-logo.png" width="300" />
                <div class="flex flex-col items-start">
                    <h1 class="text-3xl font-semibold mb-2">
                        Welcome in
                        <span class="text-green-800 font-bold">
                            Boom Laptop
                        </span>
                    </h1>
                    <p class="mb-6">
                        Don't have an account yet ?
                    </p>
                    <button class="bg-black text-white py-2 px-6 rounded-lg">
                        SIGN UP
                    </button>
                </div>
            </div>
        </div>
</body>
</html>
