@extends('dashboard.main')


@section('main')
    <main class="w-full">
        <h1 class="text-primary font-bold ml-10 my-10">Layanan</h1>

        <section class="mx-10 bg-primary block py-2 text-center text-white font-semibold rounded-lg">Pembuatan Berkas
        </section>

        <div class="mx-10 mt-8">
            <div class="bg-white2 shadow-lg rounded-lg border">
                <h1 class="text-primary text-center font-bold mx-5 mt-5">Kutipan Akta Kelahiran</h1>

                <div class="mt-10">
                    <div class="mx-16">
                        <h1 class="text-primary font-bold">Data Pelapor</h1>

                        <form action="/aktaLahir" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis_berkas" value="Kutipan Akta Kelahiran">
                            <div class="relative h-11 w-full min-w-[200px] mt-14">
                                <input placeholder="NIK" name="nik" type="number"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                                <label
                                    class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    <span class="text-primary font-bold">NIK</span>
                                </label>
                            </div>

                            <div class="relative h-11 w-full min-w-[200px] mt-8">
                                <input placeholder="Nama Lengkap" name="nama_lengkap" type="text"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                                <label
                                    class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    <span class="text-primary font-bold">Nama Lengkap</span>
                                </label>
                            </div>

                            {{-- <div class="relative h-11 w-full min-w-[200px] mt-8">
                                <input placeholder="Nomor Kartu Keluarga"
                                    class="peer h-full w-full border-b border-blue-gray-200 bg-transparent pt-4 pb-1.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border-blue-gray-200 focus:border-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" />
                                <label
                                    class="after:content[' '] pointer-events-none absolute left-0  -top-2.5 flex h-full w-full select-none !overflow-visible truncate text-sm font-normal leading-tight text-gray-500 transition-all after:absolute after:-bottom-2.5 after:block after:w-full after:scale-x-0 after:border-b-2 after:border-gray-500 after:transition-transform after:duration-300 peer-placeholder-shown:leading-tight peer-placeholder-shown:text-blue-gray-500 peer-focus:text-sm peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:after:scale-x-100 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    <span class="text-primary font-bold">Nomor Kartu Keluarga</span>
                                </label>
                            </div> --}}

                            <div class="mt-10">
                                <h1 class="text-primary font-bold">Unggah Dokumen Persyaratan</h1>
                                <h5 class="text-sm text-slate-400 mt-1">Tipe file yang anda dapat unggah berupa pdf, png,
                                    jpg, dan jpeg</h5>

                                <div class="">
                                    <div class="flex items-center mt-8 mb-5">
                                        <img src="/img/layanan_online/layanan_kia.png" alt="">
                                        <span class="text-primary font-bold mx-5">Kartu Keluarga (KK)</span>
                                    </div>

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
                                        <input id="photo-dropbox" type="file" name="berkas[]" class="sr-only" />
                                    </label>
                                </div>

                                <div class="">
                                    <div class="flex items-center mt-8 mb-5">
                                        <img src="/img/layanan_online/layanan_kia.png" alt="">
                                        <span class="text-primary font-bold mx-5">Buku nikah/kutipan akta perkawinan</span>
                                    </div>

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
                                        <input id="photo-dropbox" type="file" name="berkas[]" class="sr-only" />
                                    </label>
                                </div>

                                <div class="">
                                    <div class="flex items-center mt-8 mb-5">
                                        <img src="/img/layanan_online/layanan_kia.png" alt="">
                                        <span class="text-primary font-bold mx-5">Formulir</span>
                                    </div>

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
                                        <input id="photo-dropbox" type="file" name="berkas[]" class="sr-only" />
                                    </label>
                                </div>

                                <div class="">
                                    <div class="flex items-center mt-8 mb-5">
                                        <img src="/img/layanan_online/layanan_kia.png" alt="">
                                        <span class="text-primary font-bold mx-5">Surat keterangan kelahiran</span>
                                    </div>

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
                                        <input id="photo-dropbox" type="file" name="berkas[]" class="sr-only" />
                                    </label>
                                </div>

                                <div class="mx-64">
                                    <a href="">
                                        <button type="submit"
                                            class="
                              modal-open
                              w-full bg-primary mt-16 mb-10 py-3 text-white font-semibold rounded
                              hover:bg-white hover:border hover:border-primary hover:text-primary
                              ">
                                            Ajukan Berkas
                                        </button>
                                    </a>
                                </div>

                                <!-- Modal Start -->
                                <div
                                    class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                                    <div
                                        class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                                        <div
                                            class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="18" viewBox="0 0 18 18">
                                                <path
                                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                </path>
                                            </svg>
                                        </div>

                                        <!-- Add margin if you want to see some of the overlay behind the modal-->
                                        <div class="modal-content py-4 text-left px-6">
                                            <!--Title-->
                                            <div class="flex justify-between items-center pb-3">
                                                <p class="text-2xl text-primary font-bold">Ajukan Berkas?</p>
                                                <div class="modal-close cursor-pointer z-50">
                                                    <svg class="fill-current text-black"
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>

                                            <!--Body-->
                                            <p class="text-sm">Berkas yang anda ajukan tidak bisa diedit. Anda yakin ingin
                                                mengajukan berkas?</p>

                                            <!--Footer-->
                                            <div class="flex justify-end pt-2">
                                                <button
                                                    class="px-4 bg-transparent p-3 rounded-lg text-primary hover:bg-gray-100 hover:text-primary mr-2">Ajukan</button>
                                                <button
                                                    class="modal-close px-4 bg-primary p-3 rounded-lg text-white hover:opacity-80">Kembali</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End -->

                                <script>
                                    var openmodal = document.querySelectorAll('.modal-open')
                                    for (var i = 0; i < openmodal.length; i++) {
                                        openmodal[i].addEventListener('click', function(event) {
                                            event.preventDefault()
                                            toggleModal()
                                        })
                                    }

                                    const overlay = document.querySelector('.modal-overlay')
                                    overlay.addEventListener('click', toggleModal)

                                    var closemodal = document.querySelectorAll('.modal-close')
                                    for (var i = 0; i < closemodal.length; i++) {
                                        closemodal[i].addEventListener('click', toggleModal)
                                    }

                                    document.onkeydown = function(evt) {
                                        evt = evt || window.event
                                        var isEscape = false
                                        if ("key" in evt) {
                                            isEscape = (evt.key === "Escape" || evt.key === "Esc")
                                        } else {
                                            isEscape = (evt.keyCode === 27)
                                        }
                                        if (isEscape && document.body.classList.contains('modal-active')) {
                                            toggleModal()
                                        }
                                    };

                                    function toggleModal() {
                                        const body = document.querySelector('body')
                                        const modal = document.querySelector('.modal')
                                        modal.classList.toggle('opacity-0')
                                        modal.classList.toggle('pointer-events-none')
                                        body.classList.toggle('modal-active')
                                    }
                                </script>
                            </div>
                        </form>
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
