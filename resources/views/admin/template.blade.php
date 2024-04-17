@extends('admin.main')


@section('main')
    <main class="w-full mx-10 my-10">

        <div class="flex justify-between">
            <h1 class="mb-8 text-primary font-bold">Unggah Formulir</h1>
            <div class="float-right">
                <span class="text-sm mr-2 font-semibold"> > Unggah Dokumen</span>
                <a href="/uploadtemplate">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 float-right">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                    </svg>
                </a>
            </div>
        </div>
        @foreach ($template as $item)
            <div class="mx-10 mt-8">
                <div class="bg-white2 shadow-lg rounded-lg border">
                    <div class="p-5">
                        <a href="{{ '/edit/template/' . $item->id }}"
                            class="flex items-center bg-secondary hover:bg-slate-200 p-5 rounded">
                            <img src="/img/layanan_online/layanan_kia.png" alt="">
                            <span class="mx-5 text-primary font-bold">{{ $item->nama_file }}</span>
                        </a>
                    </div>
                </div>
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
