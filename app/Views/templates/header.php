<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<!-- navbar -->

<body>
    <style>
        .navbar-nav .nav-link {
            color: #058F3F;
        }

        @media (max-width: 767.98px) {
            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
                display: none;
            }

            .navbar-nav.show {
                display: flex;
            }

            .navbar-toggler {
                display: block;
            }
        }

        .navbar-brand {
            margin-right: auto;
        }

        .navbar-nav.ml-auto {
            margin-left: auto;
        }
    </style>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="home">
                <img src="images/logo.png" alt="Logo" width="200" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tourism">Tourism</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cafe">Cafe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>