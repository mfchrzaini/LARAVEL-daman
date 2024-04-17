@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Data Dukung</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Kutipan Akta Kematian
        </section>

        <div class="mx-10 mt-8">
            <div class="bg-white2 shadow-lg rounded-lg border pl-5 py-5 -tracking-tight">
                <div class="">
                    <h1 class="text-slate-500 font-semibold">Pencatatan Kematian WNI Dalam Wilayah NKRI</h1>
                    <section class="mt-7 text-[15px] text-slate-500">
                        <p class="mb-2">a. Surat kematian dari dokter atau kepala desa/lurah atau yang disebut dengan nama
                            lain, atau surat keterangan kepolisian bagi kematian seseorang yang tidak jelas identitasnya,
                            atau salinan penetapan pengadilan bagi seseorang yang tidak jelas keberadaannya karena hilang
                            atau mati tetapi tidak ditemukan jenazahnya, atau surat pernyataan kematian dari maskapai
                            penerbangan bagi seseorang yang tidak jelas keberadaannya karena hilang atau mati tetapi tidak
                            ditemukan jenazahnya sesuai dengan ketentuan peraturan perundangundangan, atau surat
                            keteterangan kematian dari Perwakilan RI bagi penduduk yang kematiannya di luar wilayah NKRI;
                        </p>
                        <p class="mb-2">b. Dokumen Perjalanan Republik Indonesia bagi WNI bukan Penduduk atau Dokumen
                            Perjalanan bagi OA.</p>
                        <p class="mb-2">c. KK yang meninggal dunia</p>
                        <p class="mb-2">d. KTP yang meninggal dunia.</p>
                        <p class="mb-2">e. KK pelapor</p>
                        <p class="mb-2">f. KTP pelapor</p>
                        <p class="mb-2">g. Surat Pernyataan Tanggung Jawab Mutlak (SPTJM) bagi yang meninggal lebih dari
                            10 (sepuluh) tahun.</p>
                    </section>
                </div>

                <div class="mt-10 text-slate-500 font-semibold">
                    Catatan :<br>
                    - Pelapor harus ahli waris langsung almarhum usia min 21th /sudah menikah/dikuasakan<br>
                    - Untuk pelayanan online/Daring, persyaratan yang discan/ difoto untuk diunggah harus aslinya.
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
