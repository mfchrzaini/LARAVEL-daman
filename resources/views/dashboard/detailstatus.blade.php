@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Status Pengajuan</h1>

        <div class="mx-10 mt-8">
            @foreach ($data as $item)
                <div class="bg-white2 shadow-lg rounded-lg border">
                    <div class="border border-primary rounded mx-8 my-8">
                        <div class="mx-5 my-4">
                            <div class="">
                                <h1 class="text-primary font-bold">{{ $item->jenis_berkas }}</h1>
                                <h5 class="mb-10 text-sm text-[#EB8093]"></h5>
                                @if ($item->status === 'proses')
                                    <a href="" class="bg-[#EA906C] px-7 py-2 rounded text-white pointer-events-none">
                                        Dalam Proses
                                    </a>
                                @endif
                                @if ($item->status === 'selesai')
                                    <a href=""
                                        class="bg-[#1CBE8E] px-14 py-2 rounded text-white pointer-events-none">
                                        Selesai
                                    </a>
                                @endif

                                @if ($item->status === 'ditolak')
                                    <a href=""
                                        class="bg-primary px-12 py-2 rounded text-white pointer-events-none">
                                        Ditolak
                                    </a>
                                @endif


                                <div class="mt-6 w-[40%]">
                                    <div class="text-sm text-gray-600 font-semibold">Tanggal Pembuatan
                                        <span class="float-right ml-1">{{ $item->created_at }}</span>
                                        <span class="float-right"><img src="/img/calender.png" alt=""></span>
                                        <hr class="my-2">
                                    </div>
                                    <div class="text-sm text-gray-600 font-semibold">Estimasi Selesai
                                        <span class="float-right ml-1">{{ $item->estimasi }}</span>
                                        <span class="float-right"><img src="/img/calender.png" alt=""></span>
                                        <hr class="my-2">
                                    </div>
                                </div>

                                @isset($item->pesan)
                                    <p class="mt-5 text-red-600 font-semibold text-sm">PESAN</p>
                                    <p class="my-3 text-slate-500 text-sm">{{ $item->pesan }}
                                    </p>
                                @endisset

                                @if ($item->status === 'selesai')
                                    @foreach ($berkas as $b)
                                        <a href="{{ '/downloadberkas/' . $b->id }}">
                                            <button
                                                class="bg-primary w-full py-2 rounded text-white font-semibold hover:bg-white hover:text-primary hover:border hover:border-primary my-5">
                                                Unduh Berkas
                                            </button>
                                        </a>
                                    @endforeach
                                @endif

                                @if ($item->status === 'ditolak')
                                    <a href="" class="pointer-events-none">
                                        <button
                                            class="bg-gray-600 opacity-25 w-full py-2 border rounded text-white font-semibold my-5 ">
                                            Unduh Berkas
                                        </button>
                                    </a>
                                @endif
                                @if ($item->status === 'proses')
                                    <a href="" class="pointer-events-none">
                                        <button
                                            class="bg-gray-600 opacity-25 w-full py-2 border rounded text-white font-semibold my-5 ">
                                            Unduh Berkas
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

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
        </div>
    </main>
@endsection
