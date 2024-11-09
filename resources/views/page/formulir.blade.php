@extends('componen.index')

@section('home')

    <section class="container my-5">
        <div class="row d-flex align-items-center gap-5">
            <!-- Teks Pengenalan -->
            <div class="col-12 col-lg-6">
                <p class="text-center fs-5 mb-4" style="line-height: 1.6;">
                    Terima kasih telah mengunjungi halaman kami. Kami menghargai setiap masukan Anda. Silakan lengkapi
                    formulir di bawah ini dengan nama lengkap, email yang valid, dan saran Anda. Pastikan data telah benar
                    sebelum mengirimkannya.
                </p>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('tampildata') }}" class="btn text-white bg-info px-5 py-2"
                        style="border-radius: 20px; transition: 0.3s;">
                        <i class="bi bi-send-fill me-2"></i>Lihat Data
                    </a>
                </div>
            </div>

            <!-- Formulir -->
            <div class="col-12 col-lg-5 p-4"
                style="border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); background-color: #f8f9fa;">
                <form class="form-form" action="{{ route('tambah') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!-- Input Nama -->
                    <div class="mb-4 position-relative">
                        <input type="text" placeholder="Nama Lengkap" class="form-control px-4 py-3" id="nama"
                            name="nama" value="" style="border-radius: 30px; border: 1px solid #ced4da;">
                        <label for="InputNama" class="form-label position-absolute"
                            style="left: 20px; top: -10px; background-color: #f8f9fa; padding: 0 5px; color: #6c757d;">Nama</label>
                    </div>

                    <!-- Input Email -->
                    <div class="mb-4 position-relative">
                        <input type="email" placeholder="Email" class="form-control px-4 py-3" id="email"
                            name="email" value="" style="border-radius: 30px; border: 1px solid #ced4da;">
                        <label for="InputEmail" class="form-label position-absolute"
                            style="left: 20px; top: -10px; background-color: #f8f9fa; padding: 0 5px; color: #6c757d;">Email
                            </label>
                    </div>

                    <!-- Input Pesan -->
                    <div class="mb-4 position-relative">
                        <textarea placeholder="Pesan Anda" class="form-control px-4 py-3" id="message" name="message" value=""
                            rows="4" style="border-radius: 20px; border: 1px solid #ced4da;"></textarea>
                        <label for="InputMessage" class="form-label position-absolute"
                            style="left: 20px; top: -10px; background-color: #f8f9fa; padding: 0 5px; color: #6c757d;">Pesan</label>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn text-white bg-success px-5 py-2"
                            style=" border-radius: 20px; transition: 0.3s;">
                            <i class="bi bi-send-fill me-2"></i>Tambah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        // Menangani pengiriman formulir
        document.querySelector("form").addEventListener("submit", function(event) {
            // Menangkap elemen input
            const nama = document.getElementById("nama");
            const email = document.getElementById("email");
            const message = document.getElementById("message");

            //  apakah validasi berhasil
            let isValid = true;

            // Validasi Nama
            if (nama.value.trim() === "") {
                isValid = false;
                toastr.error("Nama tidak boleh kosong!", "Error", {
                    positionClass: 'toast-top-right',
                    closeButton: true
                });
                nama.focus();
            }

            // Validasi Email
            else if (!validateEmail(email.value)) {
                isValid = false;
                toastr.error("Email tidak valid!", "Error", {
                    positionClass: 'toast-top-right',
                    closeButton: true
                });
                email.focus();
            }

            // Validasi Pesan
            else if (message.value.trim().length < 10) {
                isValid = false;
                toastr.error("Pesan harus berisi minimal 10 karakter!", "Error", {
                    positionClass: 'toast-top-right',
                    closeButton: true
                });
                message.focus();
            }

            // Jika ada kesalahan, jangan lanjutkan pengiriman formulir
            if (!isValid) {
                event.preventDefault();
            }
        });

        //memvalidasi format email
        function validateEmail(email) {
            const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(String(email).toLowerCase());
        }

        //Notif data berhasil disimpan
        @if (session('toast_success'))
            toastr.success("{{ session('toast_success') }}", 'Success', {
                positionClass: 'toast-top-right',
                closeButton: true
            });
        @endif
        //notif data kosong
        @if (session('error'))
            toastr.error("{{ session('error') }}", 'Error', {
                positionClass: 'toast-top-right',
                closeButton: true
            });
        @endif
    </script>
