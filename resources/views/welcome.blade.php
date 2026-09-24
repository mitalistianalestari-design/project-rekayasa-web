<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                UNPAM - Profile Mahasiswa
            </a>
        </div>
    </nav>

    <main class="container">

        <div class="profile-card">

            <img
                src="{{ asset('batik.jpeg') }}"
                class="profile-photo"
                alt="Foto Mahasiswa">

            <h1 class="profile-name">Data Mahasiswa</h1>

            <span class="status-badge">
                {{ $mahasiswa['status'] }}
            </span>

            <div class="profile-info">

                <p>
                    <strong>Nama</strong>
                    : {{ $mahasiswa['nama'] }}
                </p>

                <p>
                    <strong>NIM</strong>
                    : {{ $mahasiswa['nim'] }}
                </p>

                <p>
                    <strong>Jurusan</strong>
                    : {{ $mahasiswa['prodi'] }}
                </p>

                <p>
                    <strong>Kampus</strong>
                    : {{ $mahasiswa['kampus'] }}
                </p>

            </div>

        </div>

    </main>

    <footer>
        <p>&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
    </footer>

</body>

</html>