@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Formulir</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Daftar Formulir
        </section>
        @foreach ($template as $item)
            <div class="mx-10 mt-8">
                <div class="bg-white2 shadow-lg rounded-lg border">
                    <div class="p-5">
                        <a href="{{ '/download/' . $item->id }}"
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
