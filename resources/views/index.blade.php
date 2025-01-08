<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog & Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Company Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">Admin Panel</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="container mt-4">
    <h1>Welcome to the Catalog</h1>
    <p>This is the public catalog page where users can view the list of branches.</p>

    <!-- Example Branch List with 3 Rows and 3 Columns -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 1">
                <div class="card-body">
                    <h5 class="card-title">Branch 1</h5>
                    <p class="card-text">Address: 123 Main St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 2">
                <div class="card-body">
                    <h5 class="card-title">Branch 2</h5>
                    <p class="card-text">Address: 456 Elm St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 3">
                <div class="card-body">
                    <h5 class="card-title">Branch 3</h5>
                    <p class="card-text">Address: 789 Oak St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 4">
                <div class="card-body">
                    <h5 class="card-title">Branch 4</h5>
                    <p class="card-text">Address: 101 Pine St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 5">
                <div class="card-body">
                    <h5 class="card-title">Branch 5</h5>
                    <p class="card-text">Address: 202 Maple St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 6">
                <div class="card-body">
                    <h5 class="card-title">Branch 6</h5>
                    <p class="card-text">Address: 303 Birch St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-5">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 7">
                <div class="card-body">
                    <h5 class="card-title">Branch 7</h5>
                    <p class="card-text">Address: 404 Cedar St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 8">
                <div class="card-body">
                    <h5 class="card-title">Branch 8</h5>
                    <p class="card-text">Address: 505 Oakwood St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/350x200?text=Branch+1" class="card-img-top" alt="Branch 9">
                <div class="card-body">
                    <h5 class="card-title">Branch 9</h5>
                    <p class="card-text">Address: 606 Pineview St, City</p>
                </div>
                <!-- Кнопка для открытия модального окна с картой -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">View Branch Map</button>
            </div>
        </div>
    </div>

    <!-- Модальное окно с картой -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Branch Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Карта филиала -->
                    <div id="map" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>Company Footer Text</p>
</footer>

<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 48.858844, lng: 2.294351 }, // Example coordinates
            zoom: 15,
        });

        new google.maps.Marker({
            position: { lat: 48.858844, lng: 2.294351 },
            map,
            title: "Branch Location",
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
