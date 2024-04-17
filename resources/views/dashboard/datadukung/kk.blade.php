@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Data Dukung</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">
            Kartu Keluarga
        </section>

        <div class="mx-10 mt-8">
            <div class="bg-white2 shadow-lg rounded-lg border pl-5 py-5 -tracking-tight">
                <div class="">
                    <h1 class="text-slate-500 font-semibold">
                        Penerbitan Kartu Keluarga Baru Karena Membentuk Keluarga Baru
                    </h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">
                            a. Kartu Keluarga
                        </p>
                        <p class="mb-2">
                            b. Buku nikah/kutipan akta perkawinan atau kutipan akta perceraian; dan
                        </p>
                        <p class="mb-2">c. SPTJM (Surat Pernyataan Tanggung Jawab Mutlak) perkawinan/perceraian belum
                            tercatat (F-1.05), jika tidak dapat melampirkan kutipan akta perkawinan atau perceraian.</p>
                        <p class="mt-8">Apabila istri lebih dari satu ada surat persetujuaan dari istri sebelumnya.</p>
                    </section>
                </div>

                <div class="mt-14">
                    <h1 class="text-slate-500 font-semibold">
                        Penerbitan Kartu Keluarga Baru Karena Penggantian Kepala Keluarga (kematian kepala keluarga)
                    </h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">
                            a. KK lama; dan
                        </p>
                        <p class="mb-2">
                            b. Berumur sekurang-kurangnya 17 (tujuh belas) tahun atau sudah kawin atau pernah kawin yang
                            dibuktikan dengan kepemilikan KTP-el.
                        </p>
                    </section>
                </div>

                <div class="mt-10">
                    <h1 class="text-slate-500 font-semibold">
                        Penerbitan Kartu Keluarga Karena Perubahan Data
                    </h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">
                            a. KK lama; dan
                        </p>
                        <p class="mb-2">
                            b. Surat keterangan/bukti perubahan Peristiwa Kependudukan (cth: Paspor, SKPWNI) dan Peristiwa
                            Penting
                        </p>
                    </section>
                </div>

                <div class="mt-10">
                    <h1 class="text-slate-500 font-semibold">
                        Penerbitan Kartu Keluarga Karena Hilang/Rusak
                    </h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">
                            a. Surat keterangan hilang dari kepolisian atau KK yang rusak;
                        </p>
                        <p class="mb-2">
                            b. KTP-el; dan
                        </p>
                        <p class="mb-2">
                            c. Kartu izin tinggal tetap (KITAP untuk Orang Asing).
                        </p>
                    </section>
                </div>

                <div class="mt-10 text-slate-500 font-semibold">
                    Catatan: Untuk pelayanan online/Daring, persyaratan yang discan/difoto untuk diunggah harus aslinya
                </div>
            </div>
        </div>

        <footer class="mx-10">
            <hr class="space-y-2 border-t border-black mt-10" />

            <div class="flex items-center justify-between mt-5 pb-20">
                <span class="text-gray-700 font-normal">
                    Copyright © 2023 DAMAN.
                    <span class="border-l border-l-gray-700 ml-3"></span>
                    <a href="" class="ml-4 text-gray-700 hover:text-gray-500">Trademark Policy</a>
                </span>
                <span>
                    <img src="/img/daman_sm.png" alt="" class="scale-75" />
                </span>
            </div>
        </footer>
    </main>
@endsection
