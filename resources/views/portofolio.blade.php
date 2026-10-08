<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Cintya</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #fff0f0, #f8d7da);
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 50px auto;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .profil {
            display: block;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #b20710;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #b20710;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #777;
        }

        h2 {
            color: #b20710;
            margin-top: 35px;
        }

        p {
            line-height: 1.7;
        }

        .about {
            background-color: #fff5f5;
            padding: 20px;
            border-radius: 12px;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background-color: white;
        }

        th {
            background-color: #b20710;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #fff5f5;
        }

        /* Card Hobi */
        .hobi-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 15px;
        }

        .hobi {
            background-color: #fff5f5;
            padding: 25px 10px;
            text-align: center;
            border-radius: 12px;
            transition: 0.3s;
        }

        .hobi:hover {
            transform: translateY(-5px);
            background-color: #fce0e0;
        }

        .hobi-icon {
            font-size: 35px;
        }

        .hobi h3 {
            color: #b20710;
            margin-bottom: 0;
        }

        /* Sosial Media */
        .social {
            text-align: center;
            margin-top: 25px;
        }

        .social a {
            display: inline-block;
            background-color: #b20710;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            margin: 5px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .social a:hover {
            background-color: #8c050c;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            margin-top: 25px;
            color: #777;
        }

        @media (max-width: 600px) {

            .container {
                width: 95%;
                margin: 20px auto;
            }

            .profile-card {
                padding: 25px;
            }

            .hobi-container {
                grid-template-columns: 1fr;
            }

            table {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="profile-card">

            <!-- FOTO PROFIL -->

            <img
                src="{{ asset('images/profil.jpeg') }}"
                alt="Foto Cintya"
                class="profil"
            >

            <h1>Cintya Siti Febriani</h1>

            <p class="subtitle">
                Mahasiswa Informatika
            </p>


            <!-- TENTANG SAYA -->

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


            <!-- PENGALAMAN -->

            <h2>Pengalaman</h2>

            <table>

                <tr>
                    <th>Posisi</th>
                    <th>Kegiatan</th>
                    <th>Tahun</th>
                </tr>

                <tr>
                    <td>Mahasiswa</td>
                    <td>Program Studi Informatika</td>
                    <td>2023 - Sekarang</td>
                </tr>

                <tr>
                    <td>Praktikan</td>
                    <td>Praktikum Pemrograman</td>
                    <td>2026</td>
                </tr>

                <tr>
                    <td>Pelajar</td>
                    <td>Mempelajari HTML dan CSS</td>
                    <td>2026</td>
                </tr>

            </table>


            <!-- HOBI -->

            <h2>Hobi</h2>

            <div class="hobi-container">

                <div class="hobi">

                    <div class="hobi-icon">
                        🎵
                    </div>

                    <h3>Musik</h3>

                </div>


                <div class="hobi">

                    <div class="hobi-icon">
                        🎬
                    </div>

                    <h3>Menonton Film</h3>

                </div>


                <div class="hobi">

                    <div class="hobi-icon">
                        📖
                    </div>

                    <h3>Membaca</h3>

                </div>

            </div>


            <!-- MEDIA SOSIAL -->

            <div class="social">

                <h2>Media Sosial</h2>

                <a
                    href="https://www.instagram.com/"
                    target="_blank"
                >
                    Instagram
                </a>

                <a
                    href="https://www.linkedin.com/"
                    target="_blank"
                >
                    LinkedIn
                </a>

            </div>

        </div>


        <!-- FOOTER -->

        <footer>

            © 2026 Cintya Siti Febriani

        </footer>

    </div>

</body>

</html>