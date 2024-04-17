@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <div class="mx-10 mt-8">
            <div class="bg-white shadow-lg rounded-lg border">
                @foreach ($user as $item)
                    <div class="mx-7 mt-5">
                        <h1 class="font-bold">Selamat datang {{ $item->nama_lengkap }}</h1>
                        <p class="font-semibold mt-3">Layanan <span class="text-primary">terpercaya</span> untuk <span
                                class="text-primary">mempermudah</span> anda dalam proses pengurusan berkas kependudukan</p>
                    </div>
                @endforeach

                <div class="grid grid-cols-3 my-14">
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10">
                        <a href="/public/layanan/pembuatan-berkas.html"
                            class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/pendaftaran.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Pendaftaran Penduduk</span>
                        </a>
                    </div>
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10">
                        <a href="/public/layanan/pembuatan-berkas.html"
                            class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/pencatatan-sipil.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Pencatatan Sipil</span>
                        </a>
                    </div>
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10">
                        <a href="/public/formulir.html" class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/formulir.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Formulir</span>
                        </a>
                    </div>
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10 mt-10">
                        <a href="" class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/data-dukung.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Data Dukung</span>
                        </a>
                    </div>
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10 mt-10">
                        <a href="" class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/status.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Status Pengajuan</span>
                        </a>
                    </div>
                    <div class="bg-white border shadow-lg rounded-xl items-center mx-10 mt-10">
                        <a href="" class="p-5 flex flex-col items-center pointer-events-none">
                            <img src="/img/home/bantuan.png" alt="" class="mx-auto"><br>
                            <span class="text-center font-bold">Bantuan</span>
                        </a>
                    </div>
                </div>
            </div>


            <footer>
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
