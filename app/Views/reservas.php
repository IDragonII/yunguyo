<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Hoteles</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Reserva de Hoteles</h1>
    </header>
    
    <section id="search-form">
        <h2>Buscar Hoteles</h2>
        <form action="buscar_hoteles.php" method="post">
            <label for="checkin">Check-In:</label>
            <input type="date" id="checkin" name="checkin" required>

            <label for="checkout">Check-Out:</label>
            <input type="date" id="checkout" name="checkout" required>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" min="1" required>

            <label for="adultos">Adultos:</label>
            <input type="number" id="adultos" name="adultos" min="1" required>

            <label for="ninos">Niños:</label>
            <input type="number" id="ninos" name="ninos" min="0">

            <button type="submit">Buscar</button>
        </form>
    </section>

    <!-- Aquí podrías agregar la sección para mostrar resultados de hoteles -->

    <footer>
        <p>&copy; 2024 Reserva de Hoteles</p>
    </footer>
    
     <?php
    // Simulación de hoteles (en un escenario real, esto debería provenir de una base de datos o una API)
    $hoteles = [
        [
            'nombre' => 'Hotel Ejemplo 1',
            'descripcion' => 'Un hermoso hotel en una ubicación pintoresca.',
            'tarifa' => 100,
        ],
        [
            'nombre' => 'Hotel Ejemplo 2',
            'descripcion' => 'Un lujoso hotel con todas las comodidades.',
            'tarifa' => 150,
        ],
        // Puedes agregar más hoteles según sea necesario
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $habitaciones = $_POST['habitaciones'];
        $adultos = $_POST['adultos'];
        $ninos = $_POST['ninos'];

        // Aquí puedes realizar la lógica de búsqueda (simulada en este caso)
        $resultados = buscarHoteles($hoteles, $checkin, $checkout, $habitaciones, $adultos, $ninos);

        // Mostrar resultados
        if (!empty($resultados)) {
            echo '<h2>Resultados de la Búsqueda</h2>';
            echo '<ul>';
            foreach ($resultados as $hotel) {
                echo '<li>';
                echo '<h3>' . $hotel['nombre'] . '</h3>';
                echo '<p>' . $hotel['descripcion'] . '</p>';
                echo '<p>Tarifa por noche: $' . $hotel['tarifa'] . '</p>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No se encontraron hoteles disponibles para los criterios seleccionados.</p>';
        }
    }

    // Función para simular la búsqueda de hoteles (puedes reemplazar esto con una consulta a la base de datos)
    function buscarHoteles($hoteles, $checkin, $checkout, $habitaciones, $adultos, $ninos) {
        $resultados = [];
        foreach ($hoteles as $hotel) {
            // Lógica simple de disponibilidad (puedes personalizar según tus necesidades)
            $disponible = true;

            // Puedes agregar más lógica aquí, como verificar disponibilidad de habitaciones, etc.

            if ($disponible) {
                $resultados[] = $hotel;
            }
        }
        return $resultados;
    }
    ?>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em 0;
    }

    section {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: grid;
        gap: 10px;
    }

    button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        cursor: pointer;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em 0;
    }

    </style>

</body>
</html>
