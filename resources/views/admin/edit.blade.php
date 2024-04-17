@extends('admin.main')


@section('main')
    <main class="mx-10 my-10 w-full">
        <h1 class="mb-8 text-primary font-bold">Edit Formulir</h1>

        @foreach ($singleTemplate as $item)
            <div class="border shadow rounded">
                <form action="{{ '/update/template/' . $item->id }}" method="post">
                    @csrf
                    <div class="p-5">
                        <h2 class="text-primary font-bold mb-5">{{ $item->nama_file }}</h2>
                        <h3 class="mb-3 text-primary font-semibold">Judul Baru</h3>
                        <input type="text" placeholder="Masukan Judul Baru" name="nama_file" id=""
                            class="w-full p-3 bg-secondary rounded-lg focus:outline-primary focus:bg-white">
                    </div>
                    <div class="mx-5 mb-5">
                        <a href="">
                            <button type="submit"
                                class="w-full border border-primary text-primary rounded py-1 hover:bg-primary hover:text-white">Unggah</button>
                        </a>
                    </div>
                </form>
                <div class="mx-5 mb-10">
                    <form action="{{ '/destroy/' . $item->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                            class="w-full border border-primary text-primary rounded py-1 hover:bg-primary hover:text-white">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </main>
@endsection
