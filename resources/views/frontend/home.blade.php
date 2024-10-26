<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthHub Connect</title>
    <!-- Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!---------- HEADER ---------->
   @include('frontend.header')

<!---------- MAIN SECTION ---------->
    <!-- Logo and Title -->
    <section class="portal-container">
        <div class="p-4 text-center card">
            <div class="mb-3 portal-logo">
                <img src="img/logo.png" alt="Portal Logo" class="mb-3 img-fluid">
                <h2 class="fw-bold">Patient Portal</h2>
                <p>“Empowering you to take control of your health, one click at a time."</p>

                <!-- Button Section -->
                <div class="mt-4">
                    <button type="button" onclick="location.href='register.html'" class="btn btn-primary" aria-label="Register for Patient Portal">Register Here</button>
                    <button type="button" onclick="location.href='login.html'" class="btn btn-primary" aria-label="Login to Patient Portal">Login with Password</button>
                </div>
            </div>
        </div>
    </section>

<!---------- FOOTER ---------->
@yield('footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
