@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Layanan</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Pembuatan Berkas
        </section>

        <div class="m-10 justify-center">
            <div class="bg-white2 shadow-lg rounded-lg border">
                <div class="text-center p-8">
                    <h1 class="text-primary font-bold mb-10">Berkas Berhasil Di Upload!</h1>
                    <img src="/img/layanan-upload.png" alt="" class="mx-auto" />
                </div>
            </div>
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
    </main>
@endsection
