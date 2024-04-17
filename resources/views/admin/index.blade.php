@extends('admin.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Halaman utama</h1>

        @foreach ($user as $item)
            <div class="mx-7 mt-5">
                <h1 class="font-bold">Selamat datang {{ $item->nama_lengkap }}</h1>
                <p class="font-semibold mt-3">Layanan <span class="text-primary">terpercaya</span> untuk <span
                        class="text-primary">mempermudah</span> anda dalam proses pengurusan berkas kependudukan</p>
            </div>
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
