<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevAcademy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!--Hero Section -->
    <section id="home" class="hero">
        <div class="container text-center">
            <h1 class="display-4">Bienvenido a DevAcademy</h1>
            <p class="lead">El viaje para convertirte en Dev comienza aquí!</p>
            <a href="courses.php" class="btn btn-primary btn-lg">Explorar Contenido</a>
        </div>
    </section>
    <!-- Featured Courses Section -->
    <div class="bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="section-heading display-4 mb-3">¿Por qué estudiar con DevAcademy?</h1>
                <p class="text-muted lead">Aquí encontrarás recursos pensados para que avances a tu propio ritmo.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-primary">
                            <i class="fas fa-graduation-cap text-primary"></i>
                        </div>
                        <h3 class="card-title">100% gratis</h3>
                        <p class="card-text text-muted">Accede a todos los contenidos sin costo. Aprende sin barreras económicas.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-success">
                            <i class="fa-solid fa-code text-success"></i>
                            </svg>
                        </div>
                        <h3 class="card-title">Aprendizaje práctico</h3>
                        <p class="card-text text-muted">Ejemplos claros con código real para que pongas en práctica lo aprendido.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-warning">
                            <i class="fa-solid fa-rocket text-warning"></i>
                        </div>
                        <h3 class="card-title">Enfoque sencillo</h3>
                        <p class="card-text text-muted">Explicaciones fáciles de entender para que avances paso a paso sin complicaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include '../templates/footer.php'; ?>
</body>

</html>