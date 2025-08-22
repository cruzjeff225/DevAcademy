<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de PHP - DevAcademy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <?php include '../templates/header.php'; ?>
    <!-- Topics Section -->
    <section id="topics" class="py-5" style="margin-top: 80px;">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-heading display-4 mb-3">Temas de PHP</h1>
                <p class="text-muted lead">Explora los temas esenciales para dominar PHP.</p>
            </div>
            <div class="row g-4">
                <!-- Card: Condicional If -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-primary">
                            <i class="fa-solid fa-check text-primary"></i>
                        </div>
                        <h3 class="card-title">Condicional If</h3>
                        <p class="card-text text-muted">Aprende a ejecutar código solo si se cumple una condición. ¡Controla el flujo en PHP con lógica pura!</p>
                        <a href="content.php?topic=if" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
                

                <!-- Card: Condicional Switch -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-success">
                            <i class="fa-solid fa-toggle-on text-success"></i>
                        </div>
                        <h3 class="card-title">Condicional Switch</h3>
                        <p class="card-text text-muted">Elige entre múltiples caminos de forma clara y ordenada. ¡Haz decisiones eficientes en PHP!</p>
                        <a href="content.php?topic=switch" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <!-- Card: Condicional While -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-warning">
                            <i class="fa-solid fa-repeat text-warning"></i>
                        </div>
                        <h3 class="card-title">Condicional While</h3>
                        <p class="card-text text-muted">Repite acciones mientras una condición sea verdadera. ¡Automatiza procesos con PHP!</p>
                        <a href="content.php?topic=while" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <!-- Card: Condicional For -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-primary">
                            <i class="fa-solid fa-arrow-right-arrow-left text-primary"></i>
                        </div>
                        <h3 class="card-title">Condicional For</h3>
                        <p class="card-text text-muted">Repite tareas con control total desde el inicio hasta el fin. ¡Haz bucles eficientes en PHP!</p>
                        <a href="content.php?topic=for" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <!-- Card: Condicional Foreach -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-success">
                            <i class="fa-solid fa-list text-success"></i>
                        </div>
                        <h3 class="card-title">Condicional Foreach</h3>
                        <p class="card-text text-muted">Accede fácilmente a cada elemento de un array. ¡Domina colecciones de datos en PHP!</p>
                        <a href="content.php?topic=foreach" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

                <!-- Card: Coming Soon -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-wrapper bg-soft-secondary">
                            <i class="fa-solid fa-hourglass-half text-secondary"></i>
                        </div>
                        <h3 class="card-title">Coming Soon</h3>
                        <p class="card-text text-muted">Pronto añadiremos más temas para que sigas aprendiendo.</p>
                        <button class="btn btn-secondary" disabled>Próximamente</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include '../templates/footer.php'; ?>
</body>

</html>