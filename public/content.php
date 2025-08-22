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
    <?php
    // Array with topics and their information
    $topics = [
        // Information for condicional If
        'if' => [
            'title' => 'IF en PHP — Controla el flujo de tu código',
            'description' => 'La estructura if en PHP permite tomar decisiones dentro de tu programa. Es una de las estructuras más básicas pero poderosas que existen. Con if, puedes ejecutar un bloque de código solo cuando se cumpla una determinada condición lógica.',
            'example' => [
            'image' => '../assets/img/if.png',
        ],
            'step_by_step' => [
                'Se define una variable $edad con el valor 20.',
                'La condición ($edad >= 18) pregunta: ¿la edad es igual o mayor que 18?',
                'Como la respuesta es true, se ejecuta el código dentro del bloque if.',
                'En este caso, se muestra el mensaje: "Eres mayor de edad."',
            ],
            'additional_info' => 'También puedes usar else y else if para manejar múltiples condiciones.',
            'exercise' => 'Crea un programa en PHP que reciba un número y determine si es positivo, negativo o cero. Usa if, else if y else para mostrar un mensaje según el caso.',
            'images' => [
                'additional' => '../assets/img/elseif.png',
            ],
        ],
        // Information for condicional Switch
        'switch' => [
            'title' => 'SWITCH en PHP — Elige con múltiples opciones',
            'description' => 'Switch es una alternativa a usar múltiples if y else if cuando se trata de comparar una misma variable con diferentes valores. Esto hace que tu código sea más legible y ordenado.',
            'example' => [
            'image' => '../assets/img/switch.png',
        ],
            'step_by_step' => [
                'PHP evalúa el valor de la variable $dia.',
                'Compara con cada case.',
                'Si hay coincidencia (en este caso, "miércoles"), ejecuta el bloque correspondiente.',
                'break evita que se sigan ejecutando otros case.',
                'default se ejecuta si no hay coincidencias.',
            ],
            'additional_info' => '',
            'exercise' => 'Escribe un programa en PHP que reciba un número del 1 al 7 y devuelva el nombre del día correspondiente. Usa switch para mostrar los mensajes como "Lunes", "Martes", etc.',
            'images' => [
                'additional' => '../assets/images/else-elseif-example.png',
            ],
        ],
        // Information for bucle While
        'while' => [
            'title' => 'WHILE en PHP — Repite con lógica',
            'description' => 'El bucle while repite un bloque de código mientras una condición sea verdadera. Es útil cuando no sabemos cuántas veces exactamente se ejecutará el código.',
            'example' => [
            'image' => '../assets/img/while.png',
        ],
            'step_by_step' => [
                '$contador = 1: variable inicial.',
                'PHP evalúa si $contador <= 5.',
                'Si es cierto, ejecuta el bloque dentro del while.',
                'Se incrementa el contador con $contador++.',
                'El ciclo continúa hasta que la condición sea falsa.',
            ],
            'additional_info' => 'Cuidado: Si no actualizas la condición (por ejemplo, si olvidas $contador++), el bucle puede volverse infinito.',
            'exercise' => 'Crea un programa que imprima los números del 10 al 1 usando un bucle while. Agrega un mensaje que diga "¡Cuenta regresiva!" antes de comenzar.',
            'images' => [
                'additional' => '',
            ],
        ],
        // Information for bucle For
        'for' => [
            'title' => 'FOR en PHP — Control total sobre repeticiones',
            'description' => 'El bucle for es ideal cuando sabes cuántas veces necesitas ejecutar un bloque de código. Combina inicialización, condición y actualización en una sola línea.',
            'example' => [
            'image' => '../assets/img/for.png',
        ],
            'step_by_step' => [
                'Inicio: $i = 1',
                'Condición: $i <= 5 (si es verdadera, continúa).',
                'Acción: imprime la iteración',
                'Incremento: $i++ (aumenta el valor de $i en 1)',
            ],
            'additional_info' => '',
            'exercise' => 'Crea un programa en PHP que imprima todos los números pares del 1 al 20 usando un bucle for. Muestra cada número en una nueva línea.',
            'images' => [
                'additional' => '../assets/images/else-elseif-example.png',
            ],
        ],
        // Information for Foreach
        'foreach' => [
            'title' => 'FOREACH en PHP — Recorre arrays fácilmente',
            'description' => 'Foreach es la forma más sencilla de recorrer arrays en PHP. A diferencia de for, no necesitas preocuparte por los índices ni por el tamaño del array.',
            'example' => [
            'image' => '../assets/img/foreach.png',
        ],
            'step_by_step' => [
                'Se declara un array $colores.',
                'foreach recorre cada valor y lo asigna a la variable $color.',
                'Se imprime cada color en una línea diferente.',
            ],
            'additional_info' => 'También puedes acceder a clave y valor:',
            'exercise' => 'Crea un array con 5 nombres de personas. Usa foreach para mostrar un saludo personalizado para cada una, por ejemplo: "¡Hola, Ana!".',
            'images' => [
                'additional' => '../assets/img/foreach-value-key.png',
            ],
        ],
    ];

    // Get the topic from the URL
    $topic = $_GET['topic'] ?? null;

    // Check if the topic exists in the array
    if ($topic && isset($topics[$topic])) {
        $currentTopic = $topics[$topic];
    } else {
        $currentTopic = [
            'title' => 'Tema no encontrado',
            'description' => 'El tema que buscas no está disponible.',
            'example' => '',
            'step_by_step' => [],
            'additional_info' => '',
            'exercise' => '',
            'images' => [],
        ];
    }
    ?>

    <!-- Header -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="display-4"><?php echo $currentTopic['title']; ?></h1>
            <p class="lead text-muted"><?php echo $currentTopic['description']; ?></p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5">
        <div class="container">
            <?php if (!empty($currentTopic['example']['image'])): ?>
                <h3 class="mt-4">💡 Ejemplo de uso:</h3>
                <div class="text-center mb-4">
                    <img src="<?php echo $currentTopic['example']['image']; ?>" alt="Ejemplo IF" class="img-fluid rounded" style="max-width: 400px;">
                </div>
            <?php endif; ?>

            <h3 class="mt-4">🧠 Explicación paso a paso:</h3>
            <ul class="list-group mb-4">
                <?php foreach ($currentTopic['step_by_step'] as $step): ?>
                    <li class="list-group-item"><?php echo $step; ?></li>
                <?php endforeach; ?>
            </ul>

            <?php if (!empty($currentTopic['additional_info'])): ?>
                <h3 class="mt-4">➕ Información adicional:</h3>
                <p class="text-muted"><?php echo $currentTopic['additional_info']; ?></p>
                <?php if (!empty($currentTopic['images']['additional'])): ?>
                    <div class="text-center mb-4">
                        <img src="<?php echo $currentTopic['images']['additional']; ?>" alt="Ejemplo Else y Elseif" class="img-fluid rounded" style="max-width: 400px;">
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (!empty($currentTopic['exercise'])): ?>
                <h3 class="mt-4">🏋️‍♂️ Ejercicio final:</h3>
                <p class="text-muted"><?php echo $currentTopic['exercise']; ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <?php include '../templates/footer.php'; ?>
</body>

</html>