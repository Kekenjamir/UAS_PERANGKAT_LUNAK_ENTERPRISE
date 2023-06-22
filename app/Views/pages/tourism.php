<style>
    .carousel-item img {
        max-height: 500px;
    }

    .col-md-6 img {
        /* max-width: 400px; */
        max-height: 200px;
    }

    .card-link {
        text-decoration: none;
        color: inherit;
    }

    .card {
        margin-bottom: 20px;
    }

    body {
        background-color: #E8F8F5;
    }
</style>

<!-- section 1 -->
<div class="container my-4">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="images/tourism1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/tourism2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/tourism3.jfif" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<!-- section 2 -->
<div class="container my-4">
    <h1>Palangkaraya Tourism Destination</h1>

    <div class="row">
        <div class="col-md-3 offset-md-9">
            <div class="mb-3 text-end">
                <label for="filter-select" class="form-label">Filter by Letter:</label>
                <select id="filter-select" class="form-select">
                    <option value="all">All</option>
                </select>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <a href="nyarumenteng" class="card-link">
                <div class="card" data-title="Arboretum Nyaru Menteng">
                    <img src="images/nyarumenteng1.jpg" class="card-img-top" alt="nyarumenteng">
                    <div class="card-body">
                        <h5 class="card-title">Arboretum Nyaru Menteng</h5>
                        <p class="card-text">Arboretum Nyaru Menteng merupakan sebuah kawasan pelestarian plasma nuftah ekosistem hutan rawa yang di golongkan ke tipe hutan tropik dataran rendah, dengan mayoritas struktur tanah berawa dan bergambut</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="danautahai" class="card-link">
                <div class="card" data-title="Danau Tahai">
                    <img src="images/danautahai1.jpg" class="card-img-top" alt="danautahai">
                    <div class="card-body">
                        <h5 class="card-title">Danau Tahai</h5>
                        <p class="card-text">Di kawasan objek wisata Danau Tahai ini terdapat jembatan kayu yang mengelilingi kawasan danau dan juga menghubunggkan danau ke kawasan hutan, sehingga para wisatawan dapat berjalan-jalan ke tengah danau sambil menikmati pemandangan alam yang sangat mempesona.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="kanarakan" class="card-link">
                <div class="card" data-title="Desa Wisata Kanarakan">
                    <img src="images/kanarakan1.jpg" class="card-img-top" alt="kanarakan">
                    <div class="card-body">
                        <h5 class="card-title">Desa Wisata Kanarakan</h5>
                        <p class="card-text">Disini pengunjung akan melihat sanding (house bone of Kaharingan) dan sapundu (wood statue of Kaharingan), kopi tradisional serta kearifan lokal lainnya.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="sabangau" class="card-link">
                <div class="card" data-title="Taman Nasional Sebangau">
                    <img src="images/sabagau1.jpeg" class="card-img-top" alt="sabangau">
                    <div class="card-body">
                        <h5 class="card-title">Taman Nasional Sebangau</h5>
                        <p class="card-text">Tempat wisata ini terletak di tiga kabupaten. Masing-masing yaitu Kabupaten Katingan, Kabupaten Pulang Pisau dan Kota Palangkaraya. Kali ini Taman Nasional yang dimaksud adalah yang terletak di Desa Bangkirai, Kecamatan Sebangau, Kota Palangkaraya, Kalimantan Tengah, merupakan rumah bagi 808 jenis flora, 182 jenis burung, 54 spesies ular serta 35 spesies mamalia termasuk juga satwa-satwa seperti Orang Utan, Bekantan, dan satwa-satwa dilindungi lainnya</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="fantasybeach" class="card-link">
                <div class="card" data-title="Fantasy Beach">
                    <img src="images/fantasybeach.JPG" class="card-img-top" alt="fantasybeach">
                    <div class="card-body">
                        <h5 class="card-title">Fantasy Beach</h5>
                        <p class="card-text">Lokasi yang disebut sebagai danau buatan ini memiliki luas lahan yang cukup besar, karena lokasi ini bekas penambangan pasir dulunya. Para pengelola menyediakan berbagai hiburan untuk para pengunjung yakni Flying Fox, memancing, menaiki perahu motor untuk mengelilingi sekitaran danau.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="matanandau" class="card-link">
                <div class="card" data-title="Matan Andau">
                    <img src="images/matanandau1.jpeg" class="card-img-top" alt="matanandau">
                    <div class="card-body">
                        <h5 class="card-title">Matan Andau</h5>
                        <p class="card-text">Matan Andau adalah destinasi wisata alam baru di Kota Palangka Raya, yang lokasinya berada di KM 30 Desa Tangkiling. Kecamatan Bukit Batu. Tempat ini mulai beroperasional pada tanggal 25 November 2022 yang lalu.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div id="no-data-message" style="display: none;">Yahhh,,,, Data Tidak Ditemukan </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen select filter
        var filterSelect = document.getElementById('filter-select');

        // Tambahkan opsi filter dari A sampai Z
        for (var i = 0; i < 26; i++) {
            var letter = String.fromCharCode(65 + i); // Menghasilkan huruf dari kode ASCII
            var option = document.createElement('option');
            option.value = letter.toLowerCase();
            option.textContent = letter;
            filterSelect.appendChild(option);
        }

        // Tambahkan event listener ketika nilai select berubah
        filterSelect.addEventListener('change', function() {
            // Ambil nilai filter yang dipilih
            var selectedFilter = filterSelect.value;

            // Ambil semua elemen card
            var cardElements = document.querySelectorAll('.col-md-6');

            // Cek setiap elemen card
            var foundData = false;
            cardElements.forEach(function(cardElement) {
                // Ambil judul card
                var cardTitle = cardElement.querySelector('.card-title').textContent.toLowerCase();

                // Cek apakah judul card sesuai dengan filter
                if (selectedFilter === 'all' || cardTitle.startsWith(selectedFilter)) {
                    cardElement.style.display = 'block'; // Tampilkan card jika sesuai
                    foundData = true; // Set flag bahwa data ditemukan
                } else {
                    cardElement.style.display = 'none'; // Sembunyikan card jika tidak sesuai
                }
            });

            // Tampilkan pesan jika tidak ada data yang sesuai dengan filter
            var noDataMessage = document.getElementById('no-data-message');
            if (!foundData) {
                noDataMessage.style.display = 'block';
            } else {
                noDataMessage.style.display = 'none';
            }
        });
    });
</script>