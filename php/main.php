<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Con esto recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Estos sirven para comprobar que los campos requeridos están completos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($telefono) || empty($mensaje)) {
        echo "Por favor, completa todos los campos del formulario.";
    } else {
        // Este if es para ver si el email tiene un formato correcto y el número de teléfono tiene 9 dígitos
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El correo electrónico no es válido, por favor utiliza uno correcto.";
        } elseif (!preg_match("/^\d{9}$/", $telefono)) {
            echo "El número de teléfono debe contener 9 dígitos.";
        } else {
            // Crear la tabla con los datos ingresados
            echo "<style>
                .formulario-table {
                    width: 100%;
                    border-collapse: collapse;
                }
                
                .formulario-table th, .formulario-table td {
                    padding: 8px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                    background-color:blue;
                }
                
                
            </style>";

            echo "<h2>Datos del formulario:</h2>";
            echo "<table class='formulario-table'>";
            echo "<tr><th>Nombre</th><th>Apellido</th><th>Email</th><th>Teléfono</th></tr>";
            echo "<tr><td>$nombre</td><td>$apellido</td><td>$email</td><td>$telefono</td></tr>";
            echo "</table>";
            echo "<h2>Mensaje:</h2>";
            echo "<p>$mensaje</p>";
        }
    }
}
?>

