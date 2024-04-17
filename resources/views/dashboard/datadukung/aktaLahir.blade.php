@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Data Dukung</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Kutipan Akta Kelahiran
        </section>

        <div class="mx-10 mt-8">
            <div class="bg-white2 shadow-lg rounded-lg border pl-5 py-5 -tracking-tight">
                <div class="">
                    <h1 class="text-slate-500 font-semibold">Pencatatan Kelahiran WNI Dalam Wilayah NKRI</h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">a. Surat keterangan kelahiran yaitu dari rumah sakit/Puskesmas/ fasilitas
                            kesehatan/dokter/bidan atau surat keterangan kelahiran dari nakhoda kapal laut/kapten pesawat
                            terbang, atau dari kepala desa/lurah jika lahir di rumah/ tempat lain, antara lain: kebun,
                            sawah, angkutan umum</p>
                        <p class="mb-2">b. Buku nikah/kutipan akta perkawinan / bukti lain yang sah</p>
                        <p class="mb-2">c. Kartu Keluarga dimana penduduk terdaftar atau akan didaftarkan sebagai anggota
                            keluarga</p>
                        <p class="mb-2">d. Berita acara dari kepolisian bagi anak yang tidak diketahui asal
                            usulnya/keberadaan orang tuanya atau SPTJM dari orangtua / Pengurus Panti Asuhan yang mau
                            mengasuh anak tersebut</p>
                        <p class="mb-2">e. Penduduk dapat membuat SPTJM kebenaran data kelahiran dengan 2 (dua) orang
                            saksi, jika tidak memenuhi persyaratan sebagaimana huruf a</p>
                        <p class="mb-2">f. Penduduk dapat membuat SPTJM kebenaran sebagai pasangan suami istri dan 2 (dua)
                            orang saksi, jika tidak memenuhi persyaratatan sebagaimana huruf b (khusus kelahiran sebelum
                            tahun 1975)</p>
                        <p class="mb-2">g. Surat Pernyataan Jarak Kelahiran dari perkawinan atau jarak anak sebelumnya
                            lebih dari 10 (sepuluh) tahun, bermaterai Rp.10.000,- diketahui RT/RW</p>
                        <p class="mb-2">h. Surat Pernyataan Anak Ibu, bermaterai Rp.10.000,- apabila anak lahir diluar
                            nikah</p>
                    </section>
                </div>

                <div class="mt-14">
                    <h1 class="text-slate-500 font-semibold">Pencatatan Kelahiran OA</h1>
                    <section class="mt-7 text-slate-500">
                        <p class="mb-2">a. Surat keterangan kelahiran yaitu dari rumah sakit/Puskesmas/fasilitas
                            kesehatan/dokter/bidan, surat keterangan kelahiran dari nakhoda kapal laut/kapten pesawat
                            terbang, atau dari kepala desa/lurah jika lahir di rumah/ tempat lain, antara lain: kebun,
                            sawah, angkutan umum</p>
                        <p class="mb-2">b. Buku nikah/kutipan akta perkawinan/bukti lain yang sah</p>
                        <p class="mb-2">c. Dokumen Perjalanan</p>
                        <p class="mb-2">d. KTP-el orang tua atau kartu izin tinggal tetap atau kartu izin tinggal terbatas
                            atau visa kunjungan</p>
                        <p class="mb-2">e. OA dapat membuat SPTJM kebenaran data kelahiran dengan 2 (dua) orang saksi,
                            jika tidak memenuhi persyaratan sebagaimana huruf a</p>
                        <p class="mb-2">f. OA dapat membuat SPTJM kebenaran sebagai pasangan suami istri dengan 2 (dua)
                            orang saksi, jika tidak memenuhi persyaratan sebagaimana huruf b.</p>
                    </section>
                </div>

                <div class="mt-10 text-slate-500 font-semibold">
                    *Catatan: Untuk pelayanan online/Daring, persyaratan yang discan/difoto untuk diunggah harus aslinya!
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
