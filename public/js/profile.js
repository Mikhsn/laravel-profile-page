document.addEventListener('DOMContentLoaded', function () {
    const reloadBtn = document.getElementById('reloadBtn');

    async function loadProfile() {
        try {
            const res = await fetch('https://randomuser.me/api/');
            if (!res.ok) throw new Error('HTTP ' + res.status);
            const data = await res.json();
            const user = data.results[0];

            document.getElementById('profileImage').src = user.picture.large || '';
            document.getElementById('profileName').innerText = `${user.name.first} ${user.name.last}`;
            document.getElementById('profileEmail').innerText = user.email || '-';
            document.getElementById('profilePhone').innerText = user.phone || '-';
            document.getElementById('profileCity').innerText = user.location.city || '-';
            document.getElementById('profileCountry').innerText = user.location.country || '-';
        } catch (error) {
            console.error('Gagal mengambil data:', error);
            alert('Gagal mengambil data profil. Coba periksa koneksi dan coba lagi.');
        }
    }

    if (reloadBtn) {
        reloadBtn.addEventListener('click', loadProfile);
    }

    loadProfile();
});
