<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Saya | Fresh Graduate TI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
</head>

<body>
    <div class="profile-container">
        <div class="profile-image">
            <img id="profileImage" src="" alt="Foto Profil">
            <h3 id="profileName">Nama Lengkap</h3>
            <p id="profileJob">Programmer Front End</p>
            <button id="reloadBtn" class="btn-custom mt-3">Muat Ulang Profil</button>
        </div>

        <div class="profile-content">
            <h4>Tentang Saya</h4>
            <p class="text-muted">
                Saya seorang lulusan baru di bidang Teknologi Informasi dengan minat tinggi terhadap pengembangan web,
                desain antarmuka pengguna, dan teknologi modern.
                Saya menyukai pembelajaran berkelanjutan dan bersemangat untuk berkontribusi dalam dunia teknologi yang
                dinamis.
            </p>

            <h4 class="mt-4">Informasi Pribadi</h4>
            <div class="info-item"><span class="info-label">Email:</span> <span id="profileEmail"></span></div>
            <div class="info-item"><span class="info-label">Telepon:</span> <span id="profilePhone"></span></div>
            <div class="info-item"><span class="info-label">Kota:</span> <span id="profileCity"></span></div>
            <div class="info-item"><span class="info-label">Negara:</span> <span id="profileCountry"></span></div>
        </div>
    </div>

    <footer>
        Dibuat oleh Muhammad Ihsan <br> Fresh Graduate IT | {{ date('Y') }}
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
</body>

</html>
