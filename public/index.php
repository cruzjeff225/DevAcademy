<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevAcademy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--  Animations aos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!--  CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include '../templates/header.php'; ?>

<!-- Hero Section -->
    <section id="home" class="hero d-flex align-items-center text-center">
        <div class="container" data-aos="fade-up">
            <h1 class="display-3 fw-bold mb-3">Bienvenido a <span class="text-warning">DevAcademy</span></h1>
            <p class="lead mb-4">El viaje para convertirte en Dev comienza aquí 🚀</p>
            <a href="/courses.php" class="btn btn-warning btn-lg rounded-pill shadow">Explorar Contenido</a>
        </div>
    </section>

   <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="zoom-in">
                <h2 class="display-5 fw-bold">¿Por qué elegir <span class="text-primary">DevAcademy</span>?</h2>
                <p class="text-muted">Recursos pensados para que avances a tu propio ritmo</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="flip-left">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="icon-wrapper bg-light text-primary mx-auto mb-3">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h4>100% Gratis</h4>
                        <p class="text-muted">Accede a todo el contenido sin costo. Aprende sin barreras económicas.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-up">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="icon-wrapper bg-light text-success mx-auto mb-3">
                            <i class="fa-solid fa-code fa-2x"></i>
                        </div>
                        <h4>Aprendizaje Práctico</h4>
                        <p class="text-muted">Ejemplos claros con código real para aplicar lo aprendido.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-right">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="icon-wrapper bg-light text-warning mx-auto mb-3">
                            <i class="fa-solid fa-rocket fa-2x"></i>
                        </div>
                        <h4>Enfoque Sencillo</h4>
                        <p class="text-muted">Explicaciones fáciles para que avances paso a paso sin complicaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
