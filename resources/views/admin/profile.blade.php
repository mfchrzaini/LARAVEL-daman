@extends('admin.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Profil</h1>

        <section class="p-5 mx-10 flex items-center border rounded-lg relative shadow-md">
            <img src="/img/profile-circle.png" alt="" height="60" width="60">
            <div class="ml-5 flex-grow">
                <span class="text-slate-500 font-semibold">Unggah Foto Profil Baru</span><br>
                <span class="text-sm">Tipe file yang dapat anda unggah berupa png, jpg, dan jpeg</span>
            </div>

            <a href="" class="flex-shrink-0">
                <button
                    class="bg-primary text-white font-semibold py-2 px-8 rounded hover:border hover:border-primary hover:bg-white hover:text-primary">
                    Sunting
                </button>
            </a>
        </section>

        @foreach ($user as $u)
            <section class="p-5 mx-10 my-7 items-center border rounded-lg relative shadow-md">
                <h1>Ubah Informasi Pengguna</h1>

                <form action="{{ '/update/' . $u->nik }}" method="post"" class="pb-10 mt-8">
                    @csrf
                    <div class="grid grid-cols-2 gap-5 px-5 mb-8">
                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Nomor Induk Kependudukan" type="number" pattern="[0-9]*" readonly
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ $u->nik }}"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Nomor Induk Kependudukan
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Nomor Kartu Keluarga" type="number" pattern="[0-9]*" readonly
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ $u->no_kk }}"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Nomor Kartu Keluarga
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Nama Lengkap" value="{{ $u->nama_lengkap }}" name="nama_lengkap"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Nama Lengkap
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Nomor Telepon" type="number" pattern="[0-9]*" name="telepon"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ $u->telepon }}"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Nomor Telepon
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px] mt-5">
                            <select id="domisili" name="domisili"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100">
                                @isset($city)
                                    <option value="{{ $u->domisili }}" selected>{{ $u->domisili }}</option>
                                    @foreach ($city as $c)
                                        <option value="{{ $c->kota }}">{{ $c->kota }}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <label
                                class="-mt-2 after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Domisili
                                @error('domisili')
                                    <strong>&nbsp;({{ $message }})
                                    </strong>
                                @enderror
                            </label>
                        </div>

                        <div class="relative h-11 w-full min-w-[200px]">
                            <input placeholder="Email" value="{{ $u->email }}" name="email"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Email
                            </label>
                        </div>

                        <div x-data="{ showPassword: false }" class="relative h-11 w-full min-w-[200px] flex items-center">
                            <input type="password" placeholder="Password" name="password"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 pr-8 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Password Baru
                            </label>
                        </div>

                        <div x-data="{ showPassword: false }" class="relative h-11 w-full min-w-[200px] flex items-center">
                            <input type="password" placeholder="Konfirmasi Password" name="confirmpass"
                                class="peer h-full w-full border-b border-gray-500 bg-transparent pt-4 pb-1.5 pr-8 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-500 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 placeholder:opacity-0 focus:placeholder:opacity-100" />
                            <label
                                class="after:content[''] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-1.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.25] peer-placeholder-shown:text-blue-gray-500 peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Konfirmasi Password Baru
                                @error('confirmpass')
                                    <strong>&nbsp;(Konfirmasi password tidak sama)</strong>
                                @enderror
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-center mt-10">
                        <button
                            class="bg-white border border-primary hover:bg-primary hover:text-white rounded-lg px-16 py-2 text-primary font-medium">Perbarui
                            Informasi</button>
                    </div>
                </form>
                <hr>
                <hr>
                <hr>
                <div class="flex justify-left mt-10">
                    <form action="{{ '/delete/' . $u->nik }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button
                            class="bg-white border border-primary hover:bg-primary hover:text-white rounded-lg px-16 py-2 text-primary font-medium">Hapus
                            Akun</button>
                    </form>
                </div>

            </section>
        @endforeach


        <footer class="mx-10">
            <hr class="space-y-2 border-t border-black mt-10">

            <div class="flex items-center justify-between mt-5 pb-20">
                <span class="text-gray-700 font-normal">
                    Copyright © 2023 DAMAN.
                    <span class="border-l border-l-gray-700 ml-3"></span>
                    <a href="" class="ml-4 text-gray-700 hover:text-gray-500">Trademark Policy</a>
                </span>
                <span>
                    <img src="/img/daman_sm.png" alt="" class="scale-75">
                </span>
            </div>
        </footer>

    </main>
@endsection
