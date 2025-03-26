<?php
// index.php

$title = "Servicio de Baño de Perros - Tu mejor opción para el cuidado de tu mascota";

// Ruta de la carpeta donde están las imágenes
$imageDirectory = "img/slider/";  // Cambia esta ruta si es diferente

// Obtener todas las imágenes de la carpeta
$images = glob($imageDirectory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- Enlazar el archivo CSS externo -->
    <link rel="stylesheet" href="css/stylenew.css?v=<?php echo time(); ?>"></head>
<body>

    <header>
        <h1>Bienvenidos a nuestro Servicio  Baño para Perros</h1>
        
        <!-- Slider de imágenes -->
        <div class="slider">
    <div class="slides">
        <?php 
        foreach ($images as $index => $image) {
            $activeClass = ($index === 0) ? 'active' : ''; // Solo la primera imagen tendrá la clase active
            echo '<img class="slide ' . $activeClass . '" src="' . $image . '" alt="Imagen de servicio">';
        }
        ?>
    </div>
</div>



        <nav>
            <ul>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#precios">Precios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section id="bienvenida">
        <h2>Brindamos un cuidado excepcional para tu mascota</h2>
        <p>Con nosotros, tu perro recibirá un baño completo, corte de pelo y otros servicios que garantizarán su bienestar y comodidad.</p>
    </section>

    <section id="servicios">
        <h2>Servicios que ofrecemos</h2>
        <ul>
            <li>Baño completo con productos especializados</li>
            <li>Corte de pelo según el tipo de raza</li>
            <li>Secado a mano para evitar irritaciones en la piel</li>
            <li>Revisión de salud y bienestar</li>
        </ul>
    </section>

    

    <section id="precios">
    <h2>Precios</h2>
    <table>
        <thead>
            <tr>
                <th>Tipo de Servicio</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr id="baño-row">
                <td>Baño completo</td>
                <td id="precio-baño"></td>
                <td>
                    <button class="seleccionar-btn" onclick="activarServicio('baño')">Seleccionar</button>
                    <select id="tamaño-baño" onchange="calcularPrecioServicio('baño')" disabled>
                        <option value="0">Seleccionar Tamaño</option>
                        <option value="20">Pequeño (+€5)</option>
                        <option value="30">Mediano (+€10)</option>
                        <option value="40">Grande (+€15)</option>
                    </select>
                    <select id="edad-baño" onchange="calcularPrecioServicio('baño')" disabled>
                        <option value="0">Seleccionar Edad</option>
                        <option value="5">Cachorro (+€5)</option>
                        <option value="0">Adulto</option>
                        <option value="5">Senior (+€5)</option>
                    </select>
                    <select id="peso-baño" onchange="calcularPrecioServicio('baño')" disabled>
                        <option value="0">Seleccionar Peso</option>
                        <option value="0">Menos de 5kg (+€5)</option>
                        <option value="5">5-10kg (+€10)</option>
                        <option value="10">Más de 10kg (+€15)</option>
                    </select>
                </td>
            </tr>
            <tr id="baño-corte-row">
                <td>Baño + Corte de pelo</td>
                <td id="precio-baño-corte"></td>
                <td>
                    <button class="seleccionar-btn" onclick="activarServicio('baño-corte')">Seleccionar</button>
                    <select id="tamaño-baño-corte" onchange="calcularPrecioServicio('baño-corte')" disabled>
                        <option value="0">Seleccionar Tamaño</option>
                        <option value="40">Pequeño (+€5)</option>
                        <option value="50">Mediano (+€10)</option>
                        <option value="60">Grande (+€15)</option>
                    </select>
                    <select id="edad-baño-corte" onchange="calcularPrecioServicio('baño-corte')" disabled>
                        <option value="0">Seleccionar Edad</option>
                        <option value="5">Cachorro (+€5)</option>
                        <option value="0">Adulto</option>
                        <option value="10">Senior (+€5)</option>
                    </select>
                    <select id="peso-baño-corte" onchange="calcularPrecioServicio('baño-corte')" disabled>
                        <option value="0">Seleccionar Peso</option>
                        <option value="0">Menos de 5kg (+€5)</option>
                        <option value="5">5-10kg (+€10)</option>
                        <option value="10">Más de 10kg (+€15)</option>
                    </select>
                </td>
            </tr>
            <tr id="baño-uñas-row">
                <td>Baño + Corte de uñas</td>
                <td id="precio-baño-uñas"></td>
                <td>
                    <button class="seleccionar-btn" onclick="activarServicio('baño-uñas')">Seleccionar</button>
                    <select id="tamaño-baño-uñas" onchange="calcularPrecioServicio('baño-uñas')" disabled>
                        <option value="0">Seleccionar Tamaño</option>
                        <option value="20">Pequeño (+€5)</option>
                        <option value="10">Mediano (+€10)</option>
                        <option value="15">Grande (+€15)</option>
                    </select>
                    <select id="edad-baño-uñas" onchange="calcularPrecioServicio('baño-uñas')" disabled>
                        <option value="0">Seleccionar Edad</option>
                        <option value="5">Cachorro (+€5)</option>
                        <option value="0">Adulto</option>
                        <option value="5">Senior (+€5)</option>
                    </select>
                    <select id="peso-baño-uñas" onchange="calcularPrecioServicio('baño-uñas')" disabled>
                        <option value="0">Seleccionar Peso</option>
                        <option value="5">Menos de 5kg (+€5)</option>
                        <option value="10">5-10kg (+€10)</option>
                        <option value="15">Más de 10kg (+€15)</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
</section>
<script>
    function activarServicio(servicio) {
        // Desactivar todos los servicios
        const servicios = ['baño', 'baño-corte', 'baño-uñas'];
        servicios.forEach(s => {
            document.getElementById(`${s}-row`).classList.remove('disabled-row');
            document.getElementById(`tamaño-${s}`).disabled = true;
            document.getElementById(`edad-${s}`).disabled = true;
            document.getElementById(`peso-${s}`).disabled = true;
            document.getElementById(`${s}-row`).querySelector('.seleccionar-btn').disabled = false;
        });

        // Activar el servicio seleccionado
        document.getElementById(`${servicio}-row`).classList.add('disabled-row');
        document.getElementById(`tamaño-${servicio}`).disabled = false;
        document.getElementById(`edad-${servicio}`).disabled = false;
        document.getElementById(`peso-${servicio}`).disabled = false;
        document.getElementById(`${servicio}-row`).querySelector('.seleccionar-btn').disabled = true;
    }
</script>
<script>
    function calcularPrecioServicio(servicio) {
        let precioBase = 0;
        let precioTotal = 0;

        // Baño completo
        if (servicio === 'baño') {
            precioBase = 0;
            precioTotal = precioBase + parseInt(document.getElementById('tamaño-baño').value) + parseInt(document.getElementById('edad-baño').value) + parseInt(document.getElementById('peso-baño').value);
            document.getElementById('precio-baño').innerText = `€${precioTotal}`;
        }

        // Baño + Corte de pelo
        if (servicio === 'baño-corte') {
            precioBase = 0;
            precioTotal = precioBase + parseInt(document.getElementById('tamaño-baño-corte').value) + parseInt(document.getElementById('edad-baño-corte').value) + parseInt(document.getElementById('peso-baño-corte').value);
            document.getElementById('precio-baño-corte').innerText = `€${precioTotal}`;
        }

        // Baño + Corte de uñas
        if (servicio === 'baño-uñas') {
            precioBase = 0;
            precioTotal = precioBase + parseInt(document.getElementById('tamaño-baño-uñas').value) + parseInt(document.getElementById('edad-baño-uñas').value) + parseInt(document.getElementById('peso-baño-uñas').value);
            document.getElementById('precio-baño-uñas').innerText = `€${precioTotal}`;
        }
    }
</script>


    <section id="contacto">
        <h2>Contacto</h2>
        <p>Para más información o reservas, no dudes en ponerte en contacto con nosotros:</p>
        <p><strong>Teléfono:</strong> 600259028</p>
        <p><strong>Email:</strong> contacto@serviciobañoperros.com</p>
    </section>

    <footer>
        <p>&copy; 2025 Servicio de Baño de Perros. Todos los derechos reservados.</p>
    </footer>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let slides = document.querySelectorAll(".slide");
        let index = 0;

        function showSlide() {
            slides.forEach((slide, i) => {
                slide.classList.remove("active");
            });

            slides[index].classList.add("active");

            index = (index + 1) % slides.length; // Avanza a la siguiente imagen
        }

        showSlide(); // Muestra la primera imagen
        setInterval(showSlide, 4000); // Cambia cada 4 segundos
    });
</script>



</body>
</html>











<style>

</style>


