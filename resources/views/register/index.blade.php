<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/style.css" />
    <link rel="icon" href="/img/damai_1.ico" />
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <style>
        .select2-results__option {
            background-color: white !important;
            color: black !important;
            border-color: #9e100f !important;
        }

        .select2-results__option:hover {
            background-color: #9e100f !important;
            color: white !important;
        }
    </style>

    <title>Daman | Register</title>
</head>

<body class="bg-barnRed">
    <main class="bg-white mx-10 my-10 rounded-xl shadow-lg backdrop-blur-lg">
        <div class="flex items-center justify-center pt-7 pb-4">
            <img src="/img/damai_1.png" alt="" class="scale-75" />
            <span class="text-primary font-bold text-xl ml-6">DAMAN</span>
        </div>

        <form action="/register" method="POST" class="pb-10">
            @csrf
            <div class="grid grid-cols-2 gap-5 px-5 mb-8">
                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder="Nomor Induk Kependudukan" name="nik" type="number" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Nomor Induk Kependuduka
                        @error('nik')
                            <strong>&nbsp; Nomor Induk Kependudukan Harus Berjumlah 16 Karakter!
                            </strong>
                        @enderror
                    </label>
                </div>

                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder="Nomor Kartu Keluarga" name="no_kk" type="number" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Nomor Kartu Keluarga
                        @error('no_kk')
                            <strong>&nbsp; Nomor Kartu Keluarga Harus Berjumlah 16 Karakter!
                            </strong>
                        @enderror
                    </label>
                </div>

                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder="Nama Lengkap" name="nama_lengkap"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Nama Lengkap
                        @error('nama_lengkap')
                            <strong>&nbsp; Nama Lengkap Wajib di Isi!
                            </strong>
                        @enderror
                    </label>
                </div>

                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder="Nomor Telepon" name="telepon" type="number" pattern="[0-9]*"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Nomor Telepon
                        @error('telepon')
                            <strong>&nbsp; Nomor Telepon Minimal 12 Karakter!
                            </strong>
                        @enderror
                    </label>
                </div>

                <div class="relative h-11 w-full min-w-[200px] mt-5">
                    <select id="domisili" name="domisili"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100">
                        @isset($city)
                            <option value="" disabled selected>Domisili</option>
                            @foreach ($city as $c)
                                <option value="{{ $c->kota }}">{{ $c->kota }}</option>
                            @endforeach
                        @endisset
                    </select>
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Domisili
                        @error('domisili')
                            <strong>&nbsp; Domisili Wajib di Isi!
                            </strong>
                        @enderror
                    </label>
                </div>

                <div class="relative h-11 w-full min-w-[200px]">
                    <input placeholder="Email" name="email"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100"/>
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Email
                        @error('email')
                            <strong>&nbsp; Email Wajib di Isi!
                            </strong>
                        @enderror
                        @if (session('email'))
                            <strong>&nbsp;{{ session('email') }}
                            </strong>
                        @endif
                    </label>
                </div>

                <div x-data="{ showPassword: false }" class="relative h-11 w-full min-w-[200px] flex items-center">
                    <input x-bind:type="showPassword ? 'text' : 'password'" placeholder="Password" name="password"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 pr-8 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" required/>
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Password
                        @error('password')
                            <strong>&nbsp; Password Minimal 8 Karakter!
                            </strong>
                        @enderror
                    </label>

                    <div class="absolute right-2 cursor-pointer" @click="showPassword = !showPassword">
                        <svg x-show="!showPassword" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <svg x-show="showPassword" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21.35 8C20.12 5.64 16.65 4 12 4C7.35 4 3.88 5.64 2.65 8"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 22.5l1.5-1.5">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l-2 2">
                            </path>
                        </svg>
                    </div>
                </div>


                <div x-data="{ showPassword: false }" class="relative h-11 w-full min-w-[200px] flex items-center">
                    <input x-bind:type="showPassword ? 'text' : 'password'" placeholder="Konfirmasi Password"
                        name="confirmpass"
                        class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 pr-8 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" required/>
                    <label
                        class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Konfirmasi Password
                        @error('confirmpass')
                            <strong>&nbsp; Konfirmasi Password Tidak Sama!
                            </strong>
                        @enderror
                    </label>

                    <div class="absolute right-2 cursor-pointer" @click="showPassword = !showPassword">
                        <svg x-show="!showPassword" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <svg x-show="showPassword" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21.35 8C20.12 5.64 16.65 4 12 4C7.35 4 3.88 5.64 2.65 8"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 22.5l1.5-1.5"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l-2 2">
                            </path>
                        </svg>
                    </div>
                </div>

            </div>

            <div class="flex justify-center mt-10">
                <button
                    class="bg-primary rounded-lg px-36 py-3 text-white font-medium hover:scale-[.95]">Daftar</button>
            </div>

            <div class="text-center text-sm mt-5 font-semibold">Sudah punya akun?
                <a href="/login" class="text-amber-500 hover:underline">Masuk Disini!</a>
            </div>
        </form>
    </main>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#domisili').select2();
        });
    </script>
</body>

</html>
