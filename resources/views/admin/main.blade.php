<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="/src/style.css" />
    <link rel="icon" href="/img/damai_1.ico" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <style>
        .select2-results__option {
            background-color: white !important;
            color: black !important;
            border-color: #9e100f !important;
        }

        .select2-container {
            margin-top: 10px !important;
        }

        .select2-results {
            margin-bottom: 20px !important;
        }

        .select2-results__option:hover {
            background-color: #9e100f !important;
            color: white !important;
        }
    </style>
</head>

<body class="">
    <div class="flex">
        <aside class="h-screen sticky top-0">
            <div class="w-[300px] h-full" aria-label="Sidenav">
                <div class="py-5 px-3 h-full bg-primary_hover border-gray-200 dark:bg-primary_hover overflow-y-scroll">
                    <ul class="space-y-2">
                        <a href="/admin"><img src="/img/daman2.png" alt="" class="scale-75 mx-auto mb-8"></a>
                        <li>
                            <button type="button"
                                class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group  dark:text-white dark:hover:bg-gray-700 "
                                aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                <img src="/img/daftar-permohonan-icon.png" alt="" class="h-6 w-6">
                                <a href="/daftarpermohonan" class="flex-1 ml-3 text-left whitespace-nowrap">Daftar
                                    Permohonan</a>
                            </button>
                            <ul id="dropdown-pages" class="">
                            </ul>
                        </li>
                        <li>
                            <button type="button"
                                class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group  dark:text-white dark:hover:bg-gray-700 "
                                aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                </svg>
                                <a href="/template" class="flex-1 ml-3 text-left whitespace-nowrap">Daftar
                                    Formulir</a>
                            </button>
                            <ul id="dropdown-pages" class="">
                            </ul>
                        </li>

                    </ul>
                    <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="/profile"
                                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="ml-3">Profil</span>
                            </a>
                        </li>

                        <li>
                            <a href="/bantuan"
                                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                                </svg>

                                <span class="ml-3">Bantuan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/notifikasi"
                                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                                </svg>

                                <span class="ml-3">Notifikasi</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="pt-5 mt-5 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="/public/masuk.html"
                                class="modal-open flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                </svg>
                                <span class="ml-3">Keluar</span>
                            </a>
                        </li>

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
                                        <p class="text-2xl text-primary font-bold">
                                            Anda yakin ingin keluar?
                                        </p>
                                        <div class="modal-close cursor-pointer z-50">
                                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                                                width="18" height="18" viewBox="0 0 18 18">
                                                <path
                                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>

                                    <!--Body-->
                                    <p class="text-sm">Konfirmasi bahwa anda ingin keluar</p>

                                    <!--Footer-->
                                    <div class="flex justify-end pt-2">
                                        <a href="/logout">
                                            <button
                                                class="px-4 bg-transparent p-3 rounded-lg text-primary hover:bg-gray-100 hover:text-primary mr-2">
                                                Keluar
                                            </button>
                                        </a>
                                        <button
                                            class="modal-close px-4 bg-primary p-3 rounded-lg text-white hover:opacity-80">
                                            Kembali
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End -->

                        <script>
                            var openmodal = document.querySelectorAll(".modal-open");
                            for (var i = 0; i < openmodal.length; i++) {
                                openmodal[i].addEventListener("click", function(event) {
                                    event.preventDefault();
                                    toggleModal();
                                });
                            }

                            const overlay = document.querySelector(".modal-overlay");
                            overlay.addEventListener("click", toggleModal);

                            var closemodal = document.querySelectorAll(".modal-close");
                            for (var i = 0; i < closemodal.length; i++) {
                                closemodal[i].addEventListener("click", toggleModal);
                            }

                            document.onkeydown = function(evt) {
                                evt = evt || window.event;
                                var isEscape = false;
                                if ("key" in evt) {
                                    isEscape = evt.key === "Escape" || evt.key === "Esc";
                                } else {
                                    isEscape = evt.keyCode === 27;
                                }
                                if (isEscape && document.body.classList.contains("modal-active")) {
                                    toggleModal();
                                }
                            };

                            function toggleModal() {
                                const body = document.querySelector("body");
                                const modal = document.querySelector(".modal");
                                modal.classList.toggle("opacity-0");
                                modal.classList.toggle("pointer-events-none");
                                body.classList.toggle("modal-active");
                            }
                        </script>
                    </ul>
                </div>
            </div>
        </aside>

        @yield('main')
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#domisili').select2();
        });
    </script>
</body>

</html>
