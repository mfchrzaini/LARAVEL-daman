<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/img/damai_1.ico">
    <link rel="stylesheet" href="/src/style.css" />

    <title>Daman | Login</title>

</head>

<body class="overflow-hidden">
    <div class="flex">
        <div class="w-2/5">
            <div class="flex ml-10 mt-[50px] w-28">
                <img src="/img/damai_1.png" alt="icon damai" height="10%"
                    class="animate-bounce hover:animate-none hover:scale-[.85] hover:-translate-y-5 " />
                <span class="ml-5 my-9 mt-4 font-jktSans text-2xl font-bold text-primary ">DAMAN</span>
            </div>

            <div class="text-[40px] font-jktSans font-medium mx-10 mt-16">
                <p class="text-secondaryMd">
                    Data <span class="text-primary font-semibold">aman</span>, pelayanan
                    dengan <span class="text-primary font-semibold">nyaman</span> dari
                    kami
                    <span class="text-primary font-semibold">DAMAN</span>
                </p>
            </div>

            <div class="mt-10">
                <img src="/img/icon_1.png" alt="" class="hidden md:block" />
            </div>
        </div>

        <div class="w-3/5 font-jktSans bg-barnRed">
            <p class="mt-[52px] text-4xl font-semibold px-20 text-white">
                Selamat datang di DAMAN
            </p>
            <p class="text-amber-500 text-4xl font-bold px-20 pt-2">Masuk</p>

            <form action="/login" method="POST" class="px-20 mt-10 group" novalidate>
                @csrf
                <div class="bg-white rounded-lg px-6 py-[15px] shadow-xl">
                    @if (session('message'))
                        <strong><span class="text-primary font-semibold">{{ session('message') }}!</span></strong>
                        <br><br>
                    @endif
                    <label for="email" class="">
                        <span class="text-primary font-semibold">Email</span>
                        <input type="email" name="email" id="email"
                            class=" w-full rounded-md py-2 px-3 mt-1 mb-5 border outline-none invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500 peer"
                            placeholder=" " pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                        <span
                            class="-mt-3 hidden text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block pb-4">
                            Tolong masukkan Email yang valid!
                        </span>
                    </label>

                    <label for="password" class="">
                        <span class="text-primary font-semibold">Password</span>
                        <a href="#"
                            class="float-right text-primary font-semibold hover:underline hover:text-red-900 ">Lupa
                            Password?</a>
                        <input type="password" name="password" id="password"
                            class=" w-full rounded-md py-2 px-3 mt-1 border outline-none invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500 peer"
                            placeholder=" " {{-- pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" --}} pattern=".{8,}" required>
                        <span
                            class="mt-2 hidden text-sm text-red-500 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                            Password minimal 8 karakter!
                        </span>
                    </label>

                    <div class="mt-3">
                        <div>
                            <input type="checkbox" />
                            <span class="text-sm">Saya setuju dengan
                                <span class="text-amber-600 font-semibold">syarat</span>
                                <span>dan</span>
                                <span class="text-amber-600 font-semibold">ketentuan</span>
                                yang berlaku
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col items-center ">
                        <button
                            class="bg-primary p-4 w-full rounded-md text-white mt-5 hover:bg-primary_hover font-medium group-invalid:pointer-events-none group-invalid:opacity-30 group-valid:cursor-pointer group-valid:opacity-100 active:scale-[.98] active:duration-75 transition-all hover:scale-[.98] text-center">
                            Masuk
                        </button>

                        <div class="flex justify-center items-center gap-1 pt-4">
                            <button class="">
                                <a href="" class="hover:opacity-80">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                        height="30" viewBox="0 0 32 32"
                                        class="rounded-full border border-black text-white">
                                        <path
                                            d="M 16.003906 14.0625 L 16.003906 18.265625 L 21.992188 18.265625 C 21.210938 20.8125 19.082031 22.636719 16.003906 22.636719 C 12.339844 22.636719 9.367188 19.664063 9.367188 16 C 9.367188 12.335938 12.335938 9.363281 16.003906 9.363281 C 17.652344 9.363281 19.15625 9.96875 20.316406 10.964844 L 23.410156 7.867188 C 21.457031 6.085938 18.855469 5 16.003906 5 C 9.925781 5 5 9.925781 5 16 C 5 22.074219 9.925781 27 16.003906 27 C 25.238281 27 27.277344 18.363281 26.371094 14.078125 Z">
                                        </path>
                                    </svg>
                                </a>
                            </button>

                            <button>
                                <a href="" class="hover:opacity-80">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                        height="30" viewBox="0 0 30 30" class="rounded-full border border-black">
                                        <path
                                            d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z">
                                        </path>
                                    </svg>
                                </a>
                            </button>

                            <button>
                                <a href="" class="hover:opacity-80">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40"
                                        height="30" viewBox="0 0 30 30" class="rounded-full border border-black">
                                        <path
                                            d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z">
                                        </path>
                                    </svg>
                                </a>
                            </button>
                        </div>

                        <span class="mt-5 mb-3 font-medium flex items-center text-sm">
                            <span class="opacity-75">Tidak mempunyai akun?</span>
                            <a href="/register"
                                class="text-red-700 font-semibold hover:underline hover:text-red-900 ml-1">Daftar
                                disini!</a>
                        </span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>
