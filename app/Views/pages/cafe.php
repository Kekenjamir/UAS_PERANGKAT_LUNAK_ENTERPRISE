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
                <img src="images/cafe1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/cafe2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/cafe3.jfif" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<!-- section 2 -->
<div class="container my-4">
    <h1>Palangkaraya Cafe</h1>

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
            <a href="coffetoffe" class="card-link">
                <div class="card" data-title="coffetoffe">
                    <img src="images/coffeetoffee1.jpg" class="card-img-top" alt="coffetoffe">
                    <div class="card-body">
                        <h5 class="card-title">Coffee Toffee</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="kalarindu" class="card-link">
                <div class="card" data-title="kalarindu">
                    <img src="images/kalarindu1.jpg" class="card-img-top" alt="kalarindu">
                    <div class="card-body">
                        <h5 class="card-title">Kala Rindu</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="locacoffee" class="card-link">
                <div class="card" data-title="locacoffee">
                    <img src="images/locacoffe1.jpg" class="card-img-top" alt="locacoffee">
                    <div class="card-body">
                        <h5 class="card-title">Loca Coffee</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="starbucks" class="card-link">
                <div class="card" data-title="starbucks">
                    <img src="images/starbucks.jpg" class="card-img-top" alt="starbucks">
                    <div class="card-body">
                        <h5 class="card-title">Starbucks</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="tentangkopi" class="card-link">
                <div class="card" data-title="tentangkopi">
                    <img src="images/tentangkopi1.jpg" class="card-img-top" alt="tentangkopi">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Kopi</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="yomi" class="card-link">
                <div class="card" data-title="yomi">
                    <img src="images/yomi1.jfif" class="card-img-top" alt="yomi">
                    <div class="card-body">
                        <h5 class="card-title">Yomi</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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