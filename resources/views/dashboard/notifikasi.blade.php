@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="mx-10 my-10 text-primary font-bold text-lg">Notifikasi</h1>
        <div class="mx-10 rounded-lg shadow-lg mb-5">
            <div class="p-5 flex mx-5">
                <img src="/img/Avatar.png" alt="" width="" height="" class="object-none">
                <div class="ml-5">
                    <h3 class="text-lg font-bold">Admin</h3>
                    <p class="text-gray-600 -mt-1">8 jam lalu</p>
                    <p class="text-gray-600">Berkas anda sudah selesai, silahkan buka halaman Status Berkas untuk mengunduh
                        berkas</p>
                </div>
            </div>
        </div>
        <div class="mx-10 rounded-lg shadow-lg">
            <div class="p-5 flex mx-5">
                <img src="/img/Avatar.png" alt="" width="" height="" class="object-none">
                <div class="ml-5">
                    <h3 class="text-lg font-bold">Admin</h3>
                    <p class="text-gray-600 -mt-1">8 jam lalu</p>
                    <p class="text-gray-600">Berkas yang anda kirimkan tidak terlihat dengan jelas, silahkan unggah ulang
                        berkas</p>
                </div>
            </div>
        </div>

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
