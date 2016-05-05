<?php
include 'conexion.php';

$usuario = $_POST["admin"];
$password = $_POST["password_usuario"];

$result = $mysqli->query("SELECT * FROM usuario WHERE Us_Usuario = '$usuario'");

if ($row = mysqli_fetch_array($result)) {
    if ($row["Us_Pass"] == $password) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    } else {
        ?>
        <script languaje="javascript">
            alert("Contraseña Incorrecta");
            location.href = "login.php";
        </script>
        <?php
    }
} else {
    ?>
    <script languaje="javascript">
        alert("El nombre de usuario es incorrecto!");
        location.href = "login.html";
    </script>
    <?php
}

mysqli_free_result($result);
mysqli_close();
?>
