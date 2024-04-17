@extends('admin.main')


@section('main')
    <main class="mx-10 my-10 w-full">
        <h1 class="text-primary text-lg font-bold mb-10">Daftar Permohonan
            <span class="float-right cursor-pointer">
                <img src="/img/Filter.png" alt="">
            </span>
        </h1>

        <div class=" border shadow rounded">
            <h1 class="mt-5 mx-5 text-primary font-bold">Data Pemohon</h1>
            @foreach ($id as $item)
                <p class="mt-1 mx-5 mb-8 text-slate-500">{{ $item->user_id }}</p>
            @endforeach

            <table class="table-fixed w-full mb-8">
                <thead>
                    <tr>
                        <th class="py-3 px-5 text-left">Nama File</th>
                        <th class="py-3 px-3 text-center">Tanggal</th>
                        <th class="py-3 px-3 text-center">Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($evd as $e)
                        <tr class="text-primary font-semibold">
                        <tr class="border-b border-gray-400">
                            <td class="py-3 px-5">{{ $e->nama_file }}</td>
                            <td class="py-3 px-4 text-center">{{ $e->created_at }}</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ '/download/evd/' . $e->id }}">
                                    <button class="bg-primary text-white py-1 px-5 rounded-full hover:opacity-80">Klik
                                        Disini</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="/detailpermohonan" method="post" class="mx-5" enctype="multipart/form-data">
                @csrf
                @foreach ($id as $item)
                    <input type="hidden" name="permohonan_id" value="{{ $item->id }}">
                @endforeach
                <h1 class="text-primary font-bold">Atur Status Berkas</h1>
                <div class="flex gap-10 my-3 text-white mb-8">
                    <div class="bg-[#1CBE8E] py-2 pl-5 px-14 rounded">
                        <input type="radio" name="status" id="selesai" value="selesai"
                            class="w-4 h-4 bg-green-500 border-2 border-green-700 text-white mr-2">
                        <label for="selesai" class="">Selesai</label>
                    </div>
                    <div class="bg-[#B31312] py-2 pl-5 px-14 rounded">
                        <input type="radio" name="status" id="ditolak" value="ditolak"
                            class="w-4 h-4 bg-red-500 border-2 border-red-700 text-white mr-2">
                        <label for="ditolak" class="">Ditolak</label>
                    </div>
                </div>

                <h1 class="mb-3">Pesan</h1>
                <div class="mb-8">
                    <input type="text" placeholder="Pesan" name="pesan"
                        class="w-full p-3 bg-slate-200 rounded-lg focus:outline-primary focus:bg-white">
                </div>

                <h1>Unggah Berkas Selesai</h1>
                <div class="my-4">
                    <label
                        class="flex justify-between cursor-pointer appearance-none rounded-md border border-dashed border-gray-300 bg-white p-8 text-sm transition hover:border-gray-400 focus:border-solid focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75"
                        tabindex="0">
                        <span for="photo-dropbox" class="flex items-center">
                            <svg class="h-6 w-6 stroke-gray-400" viewBox="">
                            </svg>
                            <span class="font-medium text-gray-600">
                                Tarik file anda untuk memindai file, atau
                                <span class="text-primary underline">cari</span>
                            </span>
                        </span>
                        <img src="/img/input-icon.png" alt="" class="h-20" />
                        <input id="photo-dropbox" type="file" name="berkas" accept=".pdf" class="sr-only" />
                    </label>
                </div>

                <div class="my-10">
                    <a href="#" type="" class="">
                        <button type="submit"
                            class=" w-full text-primary border border-primary font-semibold rounded py-2 hover:bg-primary hover:text-white">
                            Submit
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </main>
@endsection
