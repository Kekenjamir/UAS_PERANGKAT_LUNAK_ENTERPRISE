<style>
    h1 {
        text-align: center;
    }

    .row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .col {
        flex-basis: 20%;
        text-align: center;
        padding: 20px;
    }

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
        border: none;
        background-color: #E8F8F5;
    }

    .card img {
        width: 100px;
        height: 150px;
        margin: 0 auto 10px;
        display: block;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 16px;
    }

    body {
        background-color: #E8F8F5;

    }

    @keyframes slide-in {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .card {
        animation: slide-in 3s ease-out;
    }


    .row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 100px;
    }
</style>
<h1>About Us</h1>

<div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
        <div class="card">
            <img src="images/keny.jpg" class="card-img-top" alt="Person 1">
            <div class="card-body">
                <h2 class="card-title">KENY MIHEWU</h2>
                <p class="card-text">NIM: C2057201030</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="images/friskila.jpg" class="card-img-top" alt="Person 2">
            <div class="card-body">
                <h2 class="card-title">FRISKILA PEBRIOLA</h2>
                <p class="card-text">NIM: C2057201005</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="images/martha.jpg" class="card-img-top" alt="Person 2">
            <div class="card-body">
                <h2 class="card-title">MARTHA ROPI DELITHA</h2>
                <p class="card-text">NIM: C2057201039</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="images/sisilia.jpg" class="card-img-top" alt="Person 2">
            <div class="card-body">
                <h2 class="card-title">SISILIA KATUPAYAN</h2>
                <p class="card-text">NIM: C2057201024</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="images/siska.jpg" class="card-img-top" alt="Person 2">
            <div class="card-body">
                <h2 class="card-title">SISKA</h2>
                <p class="card-text">NIM: C2057201013</p>
                <p class="card-text">Jurusan: Sistem Informasi</p>
            </div>
        </div>
    </div>
</div>