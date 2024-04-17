@extends('admin.main')


@section('main')
    <main class="mx-10 my-10 w-full">
        <h1 class="text-primary text-lg font-bold mb-10">Daftar Permohonan
            <span class="float-right cursor-pointer">
                <img src="/img/Filter.png" alt="">
            </span>
        </h1>

        <div class=" border shadow rounded">
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="py-3 px-3 text-left">Nomor Induk Kependudukan</th>
                        <th class="py-3 px-3 text-center">Tipe Permohonan</th>
                        <th class="py-3 px-3 text-center">Tanggal</th>
                        <th class="py-3 px-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="text-primary font-semibold">
                        <tr class="border-b border-gray-400">
                            <td class="py-3 px-4 ">{{ $item->user_id }}</td>
                            <td class="py-3 px-4 text-center ">{{ $item->jenis_berkas }}</td>
                            <td class="py-3 px-4 text-center">{{ $item->created_at }}</td>
                            <td class="py-3 px-4 text-center">
                                <a href="{{ '/detailpermohonan/' . $item->id }}">
                                    <button
                                        class="text-amber-500 py-1 px-5 rounded font-semibold hover:opacity-80 hover:underline">Detail</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
