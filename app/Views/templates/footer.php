<!-- footer -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
<style>
    .bg-body-tertiary {
        text-align: center;
        /* Mengatur teks menjadi rata tengah */

        font-family: 'Roboto Mono', monospace;
    }

    p {
        margin: 1px 0;
        /* Mengatur margin atas dan bawah menjadi 1px */
    }
</style>

<footer class="bg-body-tertiary">
    <p>UJIAN AKHIR SEMESTER</p>
    <P>MATA KULIAH PERANGKAT LUNAK ENTERPRISE</P>
    <P>SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER (STMIK) PALANGKARAYA</P>
    <em>&copy; 2023</em>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-FfTYoGdz8A0lWm3/JNthqsOTk8bWoxL9fQl3v3TWqbNQb4xqDYCbqOuz3cDDWVud" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi komponen-komponen Bootstrap
        var navbarToggler = document.querySelector(".navbar-toggler");
        var navbarNav = document.querySelector(".navbar-nav");

        navbarToggler.addEventListener("click", function() {
            navbarNav.classList.toggle("show");
        });
    });
</script>
</body>

</html>