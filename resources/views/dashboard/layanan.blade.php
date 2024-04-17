@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Layanan</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Pembuatan Berkas
        </section>

        <div class="mx-10 mt-8">
            <div class="grid grid-cols-1 bg-white2 shadow-lg rounded-lg border">
                <h1 class="text-primary font-bold mx-5 mt-5">Pendaftaran Penduduk</h1>

                <a href="/kia" class="flex items-center mx-5 mt-5 mb-5 bg-secondary rounded-lg ">
                    <img src="/img//layanan_online/layanan_kia.png" alt="" class="p-3">
                    <span class="text-primary font-bold">Kartu Identitas Anak (KIA)</span>
                </a>

                <a href="/kk" class="flex items-center mx-5 mb-5 bg-secondary rounded-lg">
                    <img src="/img//layanan_online/layanan_kia.png" alt="" class="p-3">
                    <span class="text-primary font-bold">Kartu Keluarga (KK)</span>
                </a>

                <h1 class="text-primary font-bold mx-5 mt-5">Pencatatan Sipil</h1>

                <a href="/aktaLahir"
                    class="flex items-center mx-5 mb-5 mt-5 bg-secondary rounded-lg">
                    <img src="/img//layanan_online/layanan_kia.png" alt="" class="p-3">
                    <span class="text-primary font-bold">Kutipan Akta Kelahiran</span>
                </a>

                <a href="/aktaKematian"
                    class="flex items-center mx-5 mb-5 bg-secondary rounded-lg">
                    <img src="/img//layanan_online/layanan_kia.png" alt="" class="p-3">
                    <span class="text-primary font-bold">Kutipan Akta Kematian</span>
                </a>
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

            <!-- <footer>
            <div class="grid grid-cols-4 mt-32 pb-20">
                <div class="">
                <img src="/img/daman_icon.png" alt="" class="mb-7">
                <span class="text-sm text-slate-600 font-semibold">Pelayanan cepat dalam mengurus berkas kependudukan anda</span>
                </div>

                <div class="text-slate-600 font-semibold">
                Tentang Kami
                </div>

                <div class="text-slate-600 font-semibold">
                Bantuan/FAQ
                </div>

                <div class="text-slate-600 font-semibold">
                <span class="flex gap-6 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                    <path fill="#03A9F4" d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path>
                    </svg>
                </span>
                Temukan Aplikasi Kami
                <span class="flex gap-5 mt-7">
                    <img src="/img/Google Play.png" alt="">
                    <img src="/img/Play Store.png" alt="">
                </span>
                </div>
            </div>

            <div class="text-center text-slate-600 font-semibold text-sm pb-14">All Right Reserved @ DAMAN.co.id</div>
            </footer> -->
    </main>
@endsection