<header>
    <h1>CRUD PHP - MySQL</h1>
</header>
<main>
    <form action="index.php" method="post">
        <label for="DNI">DNI</label>
        <input type="number" name="DNI" id="DNI" placeholder="Ingrese su DNI">
        <br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
        <br>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono" placeholder="Ingrese su telefono">
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
        <br>
        <button type="submit" name="enviar">Enviar</button>
        <button type="submit" name="buscar">Buscar</button>
    </form>
</main>