<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="rounded-3xl bg-[url(/assets/theme-header.png)]">
        <x-navbar></x-navbar>
        <div class="max-w-screen-xl mx-auto pr-8 pl-8">
            <div class="pb-36">
                <h1 class="font-bold text-[42px]">Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto pr-8 pl-8">
        <div class="pt-6">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <h1 class="pb-12 font-semibold">Contact Details</h1>
                    <div class="flex pb-8">
                        <div class="flex items-center pr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0054e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                <circle cx="12" cy="10" r="3" /></svg>
                        </div>
                        <div class="">
                            <h1 class="font-semibold">Alamat kami</h1>
                            <h1 class="text-gray-600">59FF+X8P, Jl. Imogiri Barat, Salakan, Bangunharjo, Kec. Sewon, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153</h1>
                        </div>
                    </div>
                    <div class="flex pb-8">
                        <div class="flex items-center pr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0054e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" /></svg>
                        </div>
                        <div class="">
                            <h1 class="font-semibold">Hubungi Kami</h1>
                            <h1 class="text-gray-600">+6283840613712</h1>
                        </div>
                    </div>
                    <div class="flex pb-8">
                        <div class="flex items-center pr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0054e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" /></svg>
                        </div>
                        <div class="">
                            <h1 class="font-semibold">Email Kami</h1>
                            <h1 class="text-gray-600">boomlaptopkarangkajen@gmail.com</h1>
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="pb-2 font-semibold">Lokasi Kami</h1>
                    <img src="/assets/map.png" class="h-120" alt="" />
                </div>

            </div>
        </div>
        {{-- Footer --}}
        <div class="pt-12">
            <div class="grid grid-cols-4 gap-4">
                <div class="pr-6">
                    <div class="flex justify-center">
                        <img src="/assets/boom-logo.png" alt="" class="w-32 h-32">
                    </div>
                    <div class="flex h-[12px] justify-center">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                            <linearGradient id="awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1" x1="6.228" x2="42.077" y1="4.896" y2="43.432" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#0d61a9"></stop>
                                <stop offset="1" stop-color="#16528c"></stop>
                            </linearGradient>
                            <path fill="url(#awSgIinfw5_FS5MLHI~A9a_yGcWL8copNNQ_gr1)" d="M42,40c0,1.105-0.895,2-2,2H8c-1.105,0-2-0.895-2-2V8c0-1.105,0.895-2,2-2h32	c1.105,0,2,0.895,2,2V40z"></path>
                            <path d="M25,38V27h-4v-6h4v-2.138c0-5.042,2.666-7.818,7.505-7.818c1.995,0,3.077,0.14,3.598,0.208	l0.858,0.111L37,12.224L37,17h-3.635C32.237,17,32,18.378,32,19.535V21h4.723l-0.928,6H32v11H25z" opacity=".05"></path>
                            <path d="M25.5,37.5v-11h-4v-5h4v-2.638c0-4.788,2.422-7.318,7.005-7.318c1.971,0,3.03,0.138,3.54,0.204	l0.436,0.057l0.02,0.442V16.5h-3.135c-1.623,0-1.865,1.901-1.865,3.035V21.5h4.64l-0.773,5H31.5v11H25.5z" opacity=".07"></path>
                            <path fill="#fff" d="M33.365,16H36v-3.754c-0.492-0.064-1.531-0.203-3.495-0.203c-4.101,0-6.505,2.08-6.505,6.819V22h-4v4	h4v11h5V26h3.938l0.618-4H31v-2.465C31,17.661,31.612,16,33.365,16z"></path>
                        </svg>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                            <path fill="#03a9f4" d="M42,37c0,2.762-2.239,5-5,5H11c-2.762,0-5-2.238-5-5V11c0-2.762,2.238-5,5-5h26c2.761,0,5,2.238,5,5 V37z"></path>
                            <path fill="#fff" d="M36,17.12c-0.882,0.391-1.999,0.758-3,0.88c1.018-0.604,2.633-1.862,3-3 c-0.951,0.559-2.671,1.156-3.793,1.372C31.311,15.422,30.033,15,28.617,15C25.897,15,24,17.305,24,20v2c-4,0-7.9-3.047-10.327-6 c-0.427,0.721-0.667,1.565-0.667,2.457c0,1.819,1.671,3.665,2.994,4.543c-0.807-0.025-2.335-0.641-3-1c0,0.016,0,0.036,0,0.057 c0,2.367,1.661,3.974,3.912,4.422C16.501,26.592,16,27,14.072,27c0.626,1.935,3.773,2.958,5.928,3c-1.686,1.307-4.692,2-7,2 c-0.399,0-0.615,0.022-1-0.023C14.178,33.357,17.22,34,20,34c9.057,0,14-6.918,14-13.37c0-0.212-0.007-0.922-0.018-1.13 C34.95,18.818,35.342,18.104,36,17.12"></path>
                        </svg>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256" style="fill:#228BE6;">
                            <g fill="#228be6" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(4,4)">
                                    <path d="M21.58008,7c-8.039,0 -14.58008,6.54494 -14.58008,14.58594v20.83203c0,8.04 6.54494,14.58203 14.58594,14.58203h20.83203c8.04,0 14.58203,-6.54494 14.58203,-14.58594v-20.83398c0,-8.039 -6.54494,-14.58008 -14.58594,-14.58008zM47,15c1.104,0 2,0.896 2,2c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2c0,-1.104 0.896,-2 2,-2zM32,19c7.17,0 13,5.83 13,13c0,7.17 -5.831,13 -13,13c-7.17,0 -13,-5.831 -13,-13c0,-7.169 5.83,-13 13,-13zM32,23c-4.971,0 -9,4.029 -9,9c0,4.971 4.029,9 9,9c4.971,0 9,-4.029 9,-9c0,-4.971 -4.029,-9 -9,-9z"></path>
                                </g>
                            </g>
                        </svg>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256" style="fill:#228BE6;">
                            <g fill="#228be6" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM17,20v19h-6v-19zM11,14.47c0,-1.4 1.2,-2.47 3,-2.47c1.8,0 2.93,1.07 3,2.47c0,1.4 -1.12,2.53 -3,2.53c-1.8,0 -3,-1.13 -3,-2.53zM39,39h-6c0,0 0,-9.26 0,-10c0,-2 -1,-4 -3.5,-4.04h-0.08c-2.42,0 -3.42,2.06 -3.42,4.04c0,0.91 0,10 0,10h-6v-19h6v2.56c0,0 1.93,-2.56 5.81,-2.56c3.97,0 7.19,2.73 7.19,8.26z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="pb-2 font-semibold">Quick Links</h1>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Beranda
                        </a>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Tentang Kami
                        </a>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Koleksi Produk
                        </a>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
                <div>
                    <h1 class="pb-2 font-semibold">Important Link</h1>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            FAQ
                        </a>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Privacy Policy
                        </a>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-700 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                            Terms & Condition
                        </a>
                    </div>
                </div>
                <div>
                    <h1 class="pb-2 font-semibold">Hubungi Kami Untuk Suku Cadang dan Perbaikan Berkualitas Terbaik</h1>
                    <p class="text-gray-600">Kami siap memberikan solusi terbaik untuk kebutuhan komputer Anda. Dengan suku cadang berkualitas dan layanan perbaikan profesional, kami memastikan perangkat Anda kembali berfungsi optimal. Jangan ragu untuk menghubungi kami dan dapatkan layanan terbaik dari tim ahli kami.</p>
                </div>
            </div>
        </div>
        {{-- Bottom Footer --}}
        <div class="pt-32 pb-12">
            <div class="grid grid-cols-4 gap-4">
                <div>
                    <p class="text-gray-600">Copyright © 2025 Boom Laptop </p>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div>
                        <p class="text-gray-600">Powered by Boom Laptop </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
