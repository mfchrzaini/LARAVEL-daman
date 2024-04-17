@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Data Dukung</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Kartu Identitas Anak
            (KIA)</section>

        <div class="mx-10 mt-8">
            <div class="bg-white2 shadow-lg rounded-lg border pl-5 py-5 -tracking-tight">
                <div class="">
                    <h1 class="text-slate-500 font-semibold">Penerbitan Kartu Identitas Anak</h1>
                    <p class="mt-2 text-[15px] text-slate-500">
                        a. Kutipan Akta Kelahiran<br>
                        b. Kartu Keluarga (KK) Orang Tua atau Wali<br>
                        c. KTP-el Kedua Orang Tua/Wali<br>
                        d. Pas Foto Anak Berwarna Untuk Anak 5-17 Tahun (Kurang 1 hari)<br>
                    </p>
                </div>

                <div class="mt-7">
                    <h1 class="text-slate-500 font-semibold">Syarat Kondisi Hilang atau Rusak dan Pindah Datang</h1>
                    <p class="mt-2 text-slate-500">
                        a. Surat kehilangan dari kepolisian (Untuk KIA hilang)<br>
                        b. KIA Rusak (Untuk KIA rusak)<br>
                    </p>
                </div>

                <div class="mt-10 text-slate-500 font-semibold">
                    Catatan: Untuk pelayanan online/Daring, persyaratan yang discan/difoto untuk diunggah harus aslinya!
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
