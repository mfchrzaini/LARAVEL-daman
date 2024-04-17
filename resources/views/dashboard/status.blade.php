@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Status Pengajuan</h1>

        <div class="mx-10 mt-8">
            @foreach ($permohonan as $item)
                <div class="bg-white2 shadow-lg rounded-lg border mt-5">
                    <div class="border border-primary rounded mx-8 my-8">
                        <div class="mx-5 my-4">
                            <h1 class="text-primary font-bold mb-6">{{ $item->jenis_berkas }}</h1>
                            <div class="text-sm font-semibold text-slate-500 tracking-wide">
                                Tanggal Pengajuan
                                <span class="float-right ml-1">{{ $item->created_at }}</span>
                                <span class="float-right">
                                    <img src="/img/calender.png" alt="">
                                </span>
                            </div>

                            @if ($item->status === 'ditolak')
                                <div class="w-full bg-gray-300 rounded-full h-1.5 my-8">
                                    <div class="bg-green-600 bg-opacity-50 h-1.5 rounded-full" style="width: 5%"></div>
                                </div>
                            @endif

                            @if ($item->status === 'proses')
                                <div class="w-full bg-gray-300 rounded-full h-1.5 my-8">
                                    <div class="bg-green-600 bg-opacity-50 h-1.5 rounded-full" style="width: 50%"></div>
                                </div>
                            @endif

                            @if ($item->status === 'selesai')
                                <div class="w-full bg-gray-300 rounded-full h-1.5 my-8">
                                    <div class="bg-green-600 bg-opacity-50 h-1.5 rounded-full" style="width: 100%"></div>
                                </div>
                            @endif

                            <div class="flex justify-center">
                                <a href="{{ '/detailstatus/' . $item->id }}"
                                    class="bg-primary mb-3 px-16 py-1 rounded text-white hover:opacity-90">
                                    Cek Lebih Lanjut
                                </a>
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
