<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include Bootstrap (or CSS framework of your choice) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3IQJ2b7a2tL4eJ7b8RygZXk0hYlFvF9O9q2ZJckH7DxkqxP+czXw8Xj6x" crossorigin="anonymous">
    <!-- Custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instruktur.index') }}">Instruktur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kursus.index') }}">Kursus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('peserta.index') }}">Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('materi.index') }}">Materi Kursus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('enroll.index') }}">Enroll</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Kursus Online. All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and Popper (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybYb0dI8u4nJX6A52GpXT64gWo0lS/TM1kWgPZ55XPT6Vlk8s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0xI5j3cXy+MhZfPp4dfnFfD5MGFgZ4zoJhptf44pF7rS4X3G" crossorigin="anonymous"></script>

</body>
</html>
