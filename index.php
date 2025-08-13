<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description"
        content="PT Visionary Digital Indonesia menyediakan solusi profesional untuk topup game dan host to host H2H dengan layanan terbaik di Indonesia." />
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <title>
        PT Visionary Digital Indonesia - Solusi Profesional Topup Game & Host to
        Host H2H
    </title>

    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script" />
    <link rel="preload" href="https://unpkg.com/aos@2.3.4/dist/aos.css" as="style" />
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
        as="style" />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <!-- Particle Background -->
    <canvas id="particle-canvas"></canvas>

    <!-- Header -->
    <?php include 'header.php'; ?>
    <!-- Main -->
    <main class="pt-24 md:pt-28 relative z-10">
        <!-- Hero -->
        <section id="home"
            class="max-w-7xl mx-auto px-4 md:px-6 flex flex-col-reverse md:flex-row items-center gap-8 md:gap-20 py-8 md:py-16">
            <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right" data-aos-duration="900">
                <!-- Judul dengan animasi ngetik yang diperbaiki -->
                <h1 id="typing-title" class="typing-text"
                    aria-label="Solusi Profesional untuk Topup Game & Host to Host H2H" data-aos="fade-up"></h1>

                <p class="mt-4 md:mt-6 text-lg text-gray-600 leading-relaxed max-w-lg mx-auto md:mx-0"
                    data-aos="fade-up" data-aos-duration="700">
                    PT Visionary Digital Indonesia menyediakan layanan digital
                    terintegrasi yang cepat, aman, dan dapat diandalkan untuk kebutuhan
                    topup game dan host to host H2H Anda.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                    <a href="#services" class="btn-primary" tabindex="0" data-aos="fade-up">Jelajahi Layanan</a>
                    <a href="#contact" class="btn-secondary" tabindex="0" data-aos="fade-up">Hubungi Kami</a>
                </div>
            </div>
            <div class="md:w-1/2 relative floating aurora-background" data-aos="zoom-in" data-aos-duration="900"
                data-aos-delay="150">
                <img src="https://thebossmagazine.com/wp-content/uploads/2025/07/iStock-1072111648.jpg"
                    alt="Ilustrasi modern perangkat mobile"
                    class="rounded-3xl shadow-2xl mx-auto w-full max-w-md lazy-img" loading="lazy"
                    data-aos="fade-down" />
                <div class="floating-glow-1"></div>
                <div class="floating-glow-2"></div>
                <div
                    class="absolute -bottom-12 -right-12 w-40 h-40 bg-indigo-400 rounded-full opacity-30 blur-3xl animate-pulse">
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="bg-white py-12 md:py-20 border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-8 md:mb-12" data-aos="fade-up"
                    data-aos-duration="800">
                    Layanan Unggulan Kami
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-4xl mx-auto">
                    <div class="bg-indigo-50 rounded-2xl p-6 md:p-8 shadow-md service-card" data-aos="flip-left"
                        data-aos-duration="700">
                        <div class="text-indigo-600 text-5xl mb-6 flex justify-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRctE_gFmoj_YiE3qDiTd243Hx9SlBs2K_FKQ&s"
                                class="rounded-xl shadow-lg lazy-img w-20 h-20 md:w-24 md:h-24" alt="maktopup Logo"
                                loading="lazy" />
                        </div>
                        <a href="https://maktopup.com" tabindex="0" class="inline-block">
                            <h3 class="text-xl md:text-2xl font-bold mb-3 text-indigo-900">
                                MAKTOPUP.COM
                            </h3>
                        </a>
                        <p class="text-indigo-700">Topup game termurah dan H2H</p>
                    </div>

                    <div class="bg-indigo-50 rounded-2xl p-6 md:p-8 shadow-md service-card" data-aos="flip-left"
                        data-aos-duration="700" data-aos-delay="100">
                        <div class="text-indigo-600 text-5xl mb-6 flex justify-center">
                            <img src="https://i.pinimg.com/736x/22/8a/ff/228aff3c94132ab50209753a447c8493.jpg"
                                class="rounded-xl shadow-lg lazy-img w-20 h-20 md:w-24 md:h-24" alt="Pulsa CC Logo"
                                loading="lazy" />
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold mb-3 text-indigo-900">
                            PULSA.CC
                        </h3>
                        <p class="text-indigo-700">Platform beli pulsa murah dan H2H</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-12 md:py-20 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                    <div class="md:w-1/2" data-aos="fade-right">
                        <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-4 md:mb-6">
                            Tentang Kami
                        </h2>
                        <p class="text-base md:text-lg text-gray-600 leading-relaxed mb-4 md:mb-6">
                            PT Visionary Digital Indonesia adalah perusahaan teknologi yang
                            berfokus pada penyediaan solusi pembayaran digital dan topup
                            game. Kami berkomitmen untuk memberikan layanan terbaik dengan
                            teknologi terkini.
                        </p>
                        <p class="text-base md:text-lg text-gray-600 leading-relaxed">
                            Dengan pengalaman lebih dari 5 tahun di industri digital, kami
                            telah melayani ribuan pelanggan dengan berbagai kebutuhan
                            transaksi digital mereka.
                        </p>
                    </div>
                    <div class="md:w-1/2 relative mt-6 md:mt-0" data-aos="fade-left">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Tim Visionary Digital Indonesia" class="rounded-3xl shadow-2xl w-full lazy-img"
                            loading="lazy" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-12 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-8 md:mb-12" data-aos="fade-up">
                    Apa Kata Pelanggan Kami
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <div class="bg-gray-50 p-6 md:p-8 rounded-2xl shadow-md" data-aos="zoom-in" data-aos-delay="100">
                        <div class="flex justify-center mb-4">
                            <i class="fas fa-quote-left text-indigo-500 text-2xl"></i>
                        </div>
                        <p class="text-gray-600 mb-6">
                            "Layanan topup game sangat cepat dan harga kompetitif. Sudah
                            langganan sejak 2020!"
                        </p>
                        <div class="flex items-center justify-center space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                                A
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Andi Wijaya</h4>
                                <p class="text-sm text-gray-500">Pengguna Maktopup</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 md:p-8 rounded-2xl shadow-md" data-aos="zoom-in" data-aos-delay="200">
                        <div class="flex justify-center mb-4">
                            <i class="fas fa-quote-left text-indigo-500 text-2xl"></i>
                        </div>
                        <p class="text-gray-600 mb-6">
                            "Transaksi pulsa sangat mudah dan cepat. Sistem H2H-nya sangat
                            membantu bisnis saya."
                        </p>
                        <div class="flex items-center justify-center space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                                S
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Siti Rahma</h4>
                                <p class="text-sm text-gray-500">Pengguna Pulsa.cc</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 md:p-8 rounded-2xl shadow-md" data-aos="zoom-in" data-aos-delay="300">
                        <div class="flex justify-center mb-4">
                            <i class="fas fa-quote-left text-indigo-500 text-2xl"></i>
                        </div>
                        <p class="text-gray-600 mb-6">
                            "CS sangat responsif dan membantu ketika ada kendala.
                            Recommended banget!"
                        </p>
                        <div class="flex items-center justify-center space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                                B
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                                <p class="text-sm text-gray-500">Pengguna Kedua Layanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="contact" class="py-12 md:py-20 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 md:px-6">
                <div class="text-center mb-8 md:mb-12">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">
                        Hubungi Kami
                    </h2>
                    <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up"
                        data-aos-delay="100">
                        Kami siap membantu Anda 24/7. Silakan isi form berikut atau
                        hubungi kami langsung.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row gap-8 md:gap-12">
                    <div class="md:w-1/2" data-aos="fade-right">
                        <form class="bg-white p-6 md:p-8 rounded-2xl shadow-md">
                            <div class="mb-4 md:mb-6">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name"
                                    class="w-full px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" />
                            </div>

                            <div class="mb-4 md:mb-6">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" />
                            </div>

                            <div class="mb-4 md:mb-6">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                <input type="tel" id="phone"
                                    class="w-full px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" />
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <textarea id="message" rows="4"
                                    class="w-full px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"></textarea>
                            </div>

                            <button type="submit" class="btn-primary w-full">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                    <div class="md:w-1/2" data-aos="fade-left">
                        <div class="bg-white p-6 md:p-8 rounded-2xl shadow-md h-full">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 md:mb-6">
                                Informasi Kontak
                            </h3>

                            <div class="space-y-4 md:space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div class="bg-indigo-100 p-2 md:p-3 rounded-full">
                                        <i class="fas fa-map-marker-alt text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Alamat Kantor</h4>
                                        <p class="text-gray-600">
                                            Sidomulyo, SP2, Blok B.T, Kec. Muara Lakitan, Kab. Musi
                                            Rawas, Sumatra Selatan
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="bg-indigo-100 p-2 md:p-3 rounded-full">
                                        <i class="fas fa-phone-alt text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Telepon</h4>
                                        <p class="text-gray-600">0851-7992-1771</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="bg-indigo-100 p-2 md:p-3 rounded-full">
                                        <i class="fas fa-envelope text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Email</h4>
                                        <p class="text-gray-600">
                                            customer@visionarydigital.my.id
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="bg-indigo-100 p-2 md:p-3 rounded-full">
                                        <i class="fas fa-clock text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">
                                            Jam Operasional
                                        </h4>
                                        <p class="text-gray-600">Senin - Minggu: 24 Jam</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 md:mt-8">
                                <h4 class="font-semibold text-gray-800 mb-3 md:mb-4">
                                    Ikuti Kami
                                </h4>
                                <div class="flex space-x-3 md:space-x-4">
                                    <a href="#"
                                        class="bg-indigo-100 p-2 md:p-3 rounded-full text-indigo-600 hover:bg-indigo-200 transition">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-indigo-100 p-2 md:p-3 rounded-full text-indigo-600 hover:bg-indigo-200 transition">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-indigo-100 p-2 md:p-3 rounded-full text-indigo-600 hover:bg-indigo-200 transition">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#"
                                        class="bg-indigo-100 p-2 md:p-3 rounded-full text-indigo-600 hover:bg-indigo-200 transition">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FAQ Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Temukan jawaban untuk pertanyaan umum tentang layanan kami.
                </p>
            </div>

            <div class="max-w-3xl mx-auto space-y-3 md:space-y-4">
                <div class="border border-gray-200 rounded-xl overflow-hidden" data-aos="fade-up">
                    <button
                        class="faq-toggle w-full flex justify-between items-center p-4 md:p-6 text-left hover:bg-gray-50 focus:outline-none">
                        <h3 class="font-semibold text-gray-800 text-sm md:text-base">
                            Bagaimana cara melakukan topup game di Maktopup?
                        </h3>
                        <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-4 md:px-6 pb-4 md:pb-6 hidden">
                        <p class="text-gray-600 text-sm md:text-base">
                            Anda cukup mengunjungi website Maktopup.com, memilih game yang
                            ingin di-topup, memasukkan ID game, memilih nominal, dan
                            melakukan pembayaran. Proses biasanya selesai dalam 1-5 menit.
                        </p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <button
                        class="faq-toggle w-full flex justify-between items-center p-4 md:p-6 text-left hover:bg-gray-50 focus:outline-none">
                        <h3 class="font-semibold text-gray-800 text-sm md:text-base">
                            Apa keunggulan sistem H2H di Pulsa.cc?
                        </h3>
                        <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-4 md:px-6 pb-4 md:pb-6 hidden">
                        <p class="text-gray-600 text-sm md:text-base">
                            Sistem Host to Host (H2H) kami memungkinkan transaksi pulsa
                            langsung antara server kami dengan server provider tanpa
                            perantara, sehingga proses lebih cepat (biasanya dalam hitungan
                            detik) dan harga lebih kompetitif.
                        </p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <button
                        class="faq-toggle w-full flex justify-between items-center p-4 md:p-6 text-left hover:bg-gray-50 focus:outline-none">
                        <h3 class="font-semibold text-gray-800 text-sm md:text-base">
                            Metode pembayaran apa saja yang tersedia?
                        </h3>
                        <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-4 md:px-6 pb-4 md:pb-6 hidden">
                        <p class="text-gray-600 text-sm md:text-base">
                            Kami menerima berbagai metode pembayaran termasuk transfer bank
                            (BCA, BRI, BNI, Mandiri), e-wallet (OVO, Dana, Gopay,
                            ShopeePay), dan minimarket (Alfamart, Indomaret).
                        </p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <button
                        class="faq-toggle w-full flex justify-between items-center p-4 md:p-6 text-left hover:bg-gray-50 focus:outline-none">
                        <h3 class="font-semibold text-gray-800 text-sm md:text-base">
                            Bagaimana jika transaksi gagal tetapi dana sudah terpotong?
                        </h3>
                        <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-4 md:px-6 pb-4 md:pb-6 hidden">
                        <p class="text-gray-600 text-sm md:text-base">
                            Silakan hubungi tim CS kami melalui live chat atau WhatsApp
                            dengan menyertakan bukti transfer. Kami akan memproses refund
                            maksimal 1x24 jam atau melanjutkan transaksi sesuai keinginan
                            Anda.
                        </p>
                    </div>
                </div>

                <div class="border border-gray-200 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <button
                        class="faq-toggle w-full flex justify-between items-center p-4 md:p-6 text-left hover:bg-gray-50 focus:outline-none">
                        <h3 class="font-semibold text-gray-800 text-sm md:text-base">
                            Apakah ada program reseller/agen?
                        </h3>
                        <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-4 md:px-6 pb-4 md:pb-6 hidden">
                        <p class="text-gray-600 text-sm md:text-base">
                            Ya, kami memiliki program reseller dengan berbagai keuntungan
                            seperti harga khusus, dashboard monitoring, dan bonus bulanan.
                            Silakan hubungi kami untuk informasi lebih lanjut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-12 md:py-16 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
            <h2 class="text-xl md:text-3xl font-bold mb-4 md:mb-6" data-aos="fade-up">
                Siap Memulai dengan Layanan Kami?
            </h2>
            <p class="text-base md:text-lg mb-6 md:mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Bergabunglah dengan ribuan pelanggan yang telah mempercayakan
                kebutuhan digital mereka kepada kami.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4" data-aos="fade-up"
                data-aos-delay="200">
                <a href="https://maktopup.com" class="btn-primary bg-white text-indigo-600 hover:bg-gray-100">Kunjungi
                    Maktopup</a>
                <a href="https://pulsa.cc"
                    class="btn-secondary border-white text-white hover:bg-white hover:text-indigo-600">Kunjungi
                    Pulsa.cc</a>
            </div>
        </div>
    </section>

    <!-- Welcome Screen -->
    <div id="welcome-screen">
        <div class="welcome-typing">PT Visionary Digital Indonesia</div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>