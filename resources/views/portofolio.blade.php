<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Cintya</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --bg: #0b0b1e;
            --text: #e9e8ff;
            --muted: #a9a7d1;
            --glass: rgba(255, 255, 255, 0.07);
            --glass-border: rgba(255, 255, 255, 0.14);
            --violet: #8b5cf6;
            --pink: #ec4899;
            --cyan: #22d3ee;
            --grad: linear-gradient(135deg, #8b5cf6 0%, #ec4899 55%, #fb923c 100%);
            --grad-cool: linear-gradient(135deg, #22d3ee 0%, #8b5cf6 60%, #ec4899 100%);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            color: var(--text);
            background: var(--bg);
            position: relative;
            overflow-x: hidden;
        }

        /* AURORA BACKGROUND */
        .aurora {
            position: fixed;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            opacity: .55;
            animation: float 14s ease-in-out infinite;
        }

        .blob.b1 {
            width: 480px;
            height: 480px;
            background: #8b5cf6;
            top: -140px;
            left: -120px;
        }

        .blob.b2 {
            width: 420px;
            height: 420px;
            background: #ec4899;
            top: 30%;
            right: -140px;
            animation-delay: -5s;
        }

        .blob.b3 {
            width: 460px;
            height: 460px;
            background: #22d3ee;
            bottom: -170px;
            left: 25%;
            opacity: .4;
            animation-delay: -9s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(40px, -50px) scale(1.1); }
            66% { transform: translate(-40px, 30px) scale(.92); }
        }

        .container {
            position: relative;
            z-index: 1;
            width: 92%;
            max-width: 920px;
            margin: 50px auto;
        }

        /* KARTU UTAMA (GLASS) */
        .profile-card {
            background: var(--glass);
            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);
            border: 1px solid var(--glass-border);
            border-radius: 32px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, .45);
            padding: 50px 40px 40px;
            animation: fadeUp .9s ease both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* HERO */
        .hero {
            text-align: center;
        }

        .avatar-wrap {
            position: relative;
            width: 172px;
            height: 172px;
            margin: 0 auto 22px;
            border-radius: 50%;
            padding: 5px;
            background: var(--grad);
            box-shadow: 0 0 0 8px rgba(139, 92, 246, .15),
                        0 0 45px rgba(236, 72, 153, .55);
            animation: glow 3.5s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { box-shadow: 0 0 0 8px rgba(139, 92, 246, .15), 0 0 40px rgba(236, 72, 153, .45); }
            50% { box-shadow: 0 0 0 14px rgba(139, 92, 246, .10), 0 0 70px rgba(139, 92, 246, .7); }
        }

        .profil {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--bg);
        }

        h1 {
            margin: 0 0 12px;
            font-size: 2.4rem;
            font-weight: 700;
            letter-spacing: .3px;
            background: var(--grad-cool);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: shine 6s linear infinite;
        }

        @keyframes shine {
            to { background-position: 200% center; }
        }

        .subtitle {
            display: inline-block;
            margin: 0;
            padding: 8px 22px;
            border-radius: 30px;
            font-size: .95rem;
            color: var(--text);
            background: var(--glass);
            border: 1px solid var(--glass-border);
        }

        /* JUDUL BAGIAN */
        h2 {
            margin: 50px 0 18px;
            font-size: 1.35rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 14px;
            color: white;
        }

        h2::before {
            content: "";
            width: 10px;
            height: 28px;
            border-radius: 6px;
            background: var(--grad);
            box-shadow: 0 0 14px rgba(236, 72, 153, .7);
        }

        h2::after {
            content: "";
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, var(--glass-border), transparent);
        }

        p {
            line-height: 1.8;
            color: var(--muted);
        }

        strong {
            color: white;
        }

        .about {
            padding: 24px 28px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(139, 92, 246, .18), rgba(236, 72, 153, .12));
            border: 1px solid var(--glass-border);
        }

        .about p {
            margin: 8px 0;
        }

        /* TABEL */
        .table-wrap {
            overflow-x: auto;
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            background: var(--glass);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 16px;
            text-align: left;
            font-weight: 600;
            color: white;
            background: var(--grad);
        }

        td {
            padding: 16px;
            color: var(--muted);
            border-bottom: 1px solid var(--glass-border);
        }

        tbody tr {
            transition: .3s;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: rgba(139, 92, 246, .18);
        }

        tbody tr:hover td {
            color: white;
        }

        /* HOBI */
        .hobi-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .hobi {
            position: relative;
            padding: 32px 10px;
            text-align: center;
            border-radius: 22px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            transition: .4s;
            overflow: hidden;
        }

        .hobi::before {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--grad);
            opacity: 0;
            transition: .4s;
        }

        .hobi:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(236, 72, 153, .35);
            border-color: transparent;
        }

        .hobi:hover::before {
            opacity: 1;
        }

        .hobi > * {
            position: relative;
            z-index: 1;
        }

        .hobi-icon {
            font-size: 42px;
            transition: .4s;
        }

        .hobi:hover .hobi-icon {
            transform: scale(1.25) rotate(-8deg);
        }

        .hobi h3 {
            margin: 12px 0 0;
            font-size: 1.05rem;
            font-weight: 600;
            color: white;
        }

        /* SOSIAL MEDIA */
        .social {
            text-align: center;
        }

        .social h2 {
            justify-content: center;
        }

        .social h2::after {
            display: none;
        }

        .social a {
            display: inline-block;
            margin: 6px;
            padding: 14px 32px;
            border-radius: 40px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            background: var(--grad);
            box-shadow: 0 8px 22px rgba(139, 92, 246, .4);
            transition: .3s;
        }

        .social a:hover {
            transform: translateY(-5px) scale(1.06);
            box-shadow: 0 14px 34px rgba(236, 72, 153, .55);
        }

        footer {
            text-align: center;
            margin-top: 28px;
            color: var(--muted);
            font-size: .9rem;
        }

        /* LAGU FAVORIT */
        .lagu-list {
            display: grid;
            gap: 12px;
        }

        .lagu {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 14px 18px;
            border-radius: 18px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            transition: .3s;
        }

        .lagu:hover {
            transform: translateX(6px);
            background: rgba(139, 92, 246, .18);
            border-color: rgba(236, 72, 153, .5);
        }

        .lagu-no {
            width: 28px;
            text-align: center;
            font-weight: 700;
            color: var(--muted);
        }

        .lagu-cover {
            flex-shrink: 0;
            width: 54px;
            height: 54px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            background: var(--grad);
            box-shadow: 0 6px 16px rgba(139, 92, 246, .4);
        }

        .lagu:nth-child(2) .lagu-cover {
            background: var(--grad-cool);
        }

        .lagu:nth-child(3) .lagu-cover {
            background: linear-gradient(135deg, #fb923c, #ec4899);
        }

        .lagu-info {
            flex: 1;
            min-width: 0;
        }

        .lagu-info h3 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: white;
        }

        .lagu-info p {
            margin: 2px 0 0;
            font-size: .85rem;
            line-height: 1.4;
        }

        /* Equalizer */
        .eq {
            display: flex;
            align-items: flex-end;
            gap: 3px;
            height: 22px;
        }

        .eq span {
            width: 4px;
            border-radius: 3px;
            background: var(--grad-cool);
            animation: eq 1s ease-in-out infinite;
        }

        .eq span:nth-child(1) { height: 40%; animation-delay: -.2s; }
        .eq span:nth-child(2) { height: 90%; animation-delay: -.6s; }
        .eq span:nth-child(3) { height: 60%; animation-delay: -.4s; }
        .eq span:nth-child(4) { height: 80%; animation-delay: -.8s; }

        @keyframes eq {
            0%, 100% { transform: scaleY(.3); }
            50% { transform: scaleY(1); }
        }

        .eq span {
            transform-origin: bottom;
        }

        /* BUKU YANG SEDANG DIBACA */
        .buku {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 24px;
            border-radius: 22px;
            background: linear-gradient(135deg, rgba(34, 211, 238, .14), rgba(139, 92, 246, .18));
            border: 1px solid var(--glass-border);
        }

        .buku-cover {
            flex-shrink: 0;
            width: 100px;
            height: 140px;
            border-radius: 6px 14px 14px 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            background: var(--grad-cool);
            box-shadow: -6px 0 0 rgba(0, 0, 0, .25) inset, 0 14px 30px rgba(34, 211, 238, .3);
            transform: rotate(-4deg);
            transition: .4s;
        }

        .buku:hover .buku-cover {
            transform: rotate(0) scale(1.05);
        }

        .buku-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px 14px 14px 6px;
        }

        .buku-info {
            flex: 1;
        }

        .buku-info .label {
            display: inline-block;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: .75rem;
            font-weight: 600;
            color: white;
            background: var(--grad);
        }

        .buku-info h3 {
            margin: 10px 0 2px;
            font-size: 1.2rem;
            color: white;
        }

        .buku-info p {
            margin: 0 0 14px;
            font-size: .9rem;
        }

        .progress {
            height: 10px;
            border-radius: 10px;
            background: rgba(255, 255, 255, .12);
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            border-radius: 10px;
            background: var(--grad-cool);
            box-shadow: 0 0 12px rgba(34, 211, 238, .6);
        }

        .progress-text {
            margin-top: 6px;
            font-size: .8rem;
            color: var(--muted);
        }

        @media (max-width: 600px) {
            .buku {
                flex-direction: column;
                text-align: center;
            }

            .lagu-no {
                display: none;
            }
        }

        /* ANIMASI MUNCUL SAAT SCROLL */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: none;
        }

        @media (max-width: 600px) {
            .container {
                margin: 20px auto;
            }

            .profile-card {
                padding: 36px 22px 30px;
                border-radius: 26px;
            }

            h1 {
                font-size: 1.8rem;
            }

            .hobi-container {
                grid-template-columns: 1fr;
            }

            table {
                font-size: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

</head>

<body>

    <!-- BACKGROUND AURORA -->
    <div class="aurora">
        <div class="blob b1"></div>
        <div class="blob b2"></div>
        <div class="blob b3"></div>
    </div>

    <div class="container">

        <div class="profile-card">

            <!-- HERO -->
            <div class="hero">

                <div class="avatar-wrap">
                    <img
                        src="{{ asset('images/profil.jpeg') }}"
                        alt="Foto Cintya"
                        class="profil"
                    >
                </div>

                <h1>Cintya Siti Febriani</h1>

                <p class="subtitle">Mahasiswa Informatika</p>

            </div>


            <!-- TENTANG SAYA -->
            <section class="reveal">

                <h2>Tentang Saya</h2>

                <div class="about">
                    <p>
                        Halo, saya <strong>Cintya Siti Febriani</strong>.
                        Saya adalah mahasiswa <strong>Informatika</strong>
                        di Universitas Sebelas April.
                    </p>

                    <p>
                        Saya tertarik dengan teknologi,
                        pemrograman, dan pengembangan website.
                    </p>
                </div>

            </section>


            <!-- PENGALAMAN -->
            <section class="reveal">

                <h2>Pengalaman</h2>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Posisi</th>
                                <th>Kegiatan</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Mahasiswa</td>
                                <td>Program Studi Informatika</td>
                                <td>2024 - Sekarang</td>
                            </tr>

                            <tr>
                                <td>Divisi Acara</td>
                                <td>Digiverse IT 2025 - Himpunan Mahasiswa Informatika</td>
                                <td>2025</td>
                            </tr>

                            <tr>
                                <td>Bendahara</td>
                                <td>Tahu Compile - Tahungoding</td>
                                <td>2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>


            <!-- HOBI -->
            <section class="reveal">

                <h2>Hobi</h2>

                <div class="hobi-container">

                    <div class="hobi">
                        <div class="hobi-icon">🎵</div>
                        <h3>Musik</h3>
                    </div>

                    <div class="hobi">
                        <div class="hobi-icon">🎬</div>
                        <h3>Menonton Film</h3>
                    </div>

                    <div class="hobi">
                        <div class="hobi-icon">📖</div>
                        <h3>Membaca</h3>
                    </div>

                </div>

            </section>


            @php
                $laguFavorit = [
                    ['judul' => 'Hate That I Made You Love Me', 'artis' => 'Ariana Grande', 'audio' => 'audio/ariana.mp3'],
                    ['judul' => 'My Friend', 'artis' => 'Mark Lee My Husband <33333', 'audio' => 'audio/mark.mp3'],
                    ['judul' => 'Pure', 'artis' => 'Sienna Spiro', 'audio' => 'audio/pure.mp3'],
                ];

                $buku = [
                    'judul'    => 'Blue Skies',
                    'penulis'  => 'Jenni Alfikri',
                    'progress' => 10, // persen (0 - 100)
                    'gambar'   => 'images/buku.jpeg',
                ];
            @endphp

            <section class="reveal">

                <h2>Lagu yang Sering Didengar</h2>

                <div class="lagu-list">

                    @foreach ($laguFavorit as $i => $lagu)
                        <div class="lagu">
                            <span class="lagu-no">{{ $i + 1 }}</span>
                            <div class="lagu-cover">🎧</div>
                            <div class="lagu-info">
                                <h3>{{ $lagu['judul'] }}</h3>
                                <p>{{ $lagu['artis'] }}</p>
                                <audio controls style="width: 100%; margin-top: 8px;">
                                    <source src="{{ asset($lagu['audio']) }}" type="audio/mpeg">
                                    Browser Anda tidak mendukung audio.
                                </audio>
                            </div>
                            <div class="eq" aria-hidden="true">
                                <span></span><span></span><span></span><span></span>
                            </div>
                        </div>
                    @endforeach

                </div>

            </section>


            <!-- BUKU YANG SEDANG DIBACA -->
            <section class="reveal">

                <h2>Sedang Dibaca</h2>

                <div class="buku">

                    <div class="buku-cover">
                        <img src="{{ asset($buku['gambar']) }}" alt="{{ $buku['judul'] }}">
                    </div>

                    <div class="buku-info">
                        <span class="label">Sedang dibaca</span>
                        <h3>{{ $buku['judul'] }}</h3>
                        <p>oleh {{ $buku['penulis'] }}</p>

                        <div class="progress">
                            <div class="progress-bar" style="width: {{ $buku['progress'] }}%"></div>
                        </div>
                        <div class="progress-text">{{ $buku['progress'] }}% selesai</div>
                    </div>

                </div>

            </section>


            <!-- MEDIA SOSIAL -->
            <section class="social reveal">

                <h2>Media Sosial</h2>

                <a href="https://www.instagram.com/" target="_blank">Instagram</a>

                <a href="https://www.linkedin.com/" target="_blank">LinkedIn</a>

            </section>

        </div>


        <!-- FOOTER -->
        <footer>
            © 2026 Cintya Siti Febriani
        </footer>

    </div>

    <script>
        // Animasi muncul saat di-scroll
        const items = document.querySelectorAll('.reveal');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            items.forEach((el) => observer.observe(el));
        } else {
            items.forEach((el) => el.classList.add('show'));
        }
    </script>

</body>

</html>