<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg flex h-150 w-full max-w-4xl">
        <div class="bg-green-950 text-white p-8 md:w-1/2 rounded-t-lg md:rounded-l-lg md:rounded-t-none items-center justify-center">
            <div class="flex flex-col items-center mt-20">
                <h2 class="text-2xl font-bold mb-6">
                    Create a new Account
                </h2>
                <form>
                    <input class="w-full bg-white p-3 mb-4 rounded text-gray-900" placeholder="First Name" type="text" />
                    <input class="w-full bg-white p-3 mb-4 rounded text-gray-900" placeholder="Username" type="text" />
                    <input class="w-full bg-white p-3 mb-4 rounded text-gray-900" placeholder="E-mail Address" type="email" />
                    <input class="w-full bg-white p-3 mb-6 rounded text-gray-900" placeholder="Password" type="password" />
                    <button class="w-full bg-black text-white p-3 rounded">
                        Register
                    </button>
                </form>
            </div>
        </div>
        <!-- SIGN IN Section-->
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
                <button class="bg-black text-white py-2 px-6 rounded-lg font-[DM Sans]">
                    SIGN IN
                </button>
            </div>
        </div>
    </div>
</body>
</html>

</body>
</html>
