<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vender.css">
    <title>Ventas</title>
</head>
<body>
    <div class="padre">
    <h2>Vender</h2>
    <p>Código de barras:</p>
    <form action=""> 
        <input type="text" placeholder="Escribe el código">
    </form>

    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Código</b></td>
            <td><b>Descripción</b></td>
            <td><b>Precio Ventas</b></td>
            <td><b>Cantidad</b></td>
            <td><b>Total</b></td>
            <td><b>Quitar</b></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>Galletas chokis</td>
            <td>15.00</td>
            <td>1</td>
            <td>15.00</td>
            <td><a href="">Quitar</a></td>
        </tr>
    </table>
    <div class="btn">
        <button type="submit">Terminar Venta</button>
        <button type="submit">Cancelar Venta</button>
    </div>
    </div>
    
</body>
</html>