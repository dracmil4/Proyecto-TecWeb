<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Almacen">
    <meta name="Saquib" content="Blade">
    <title>Tienda Doña Delia</title>

    <!-- Carga Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Carga FontAwesome desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .jumbotron {
            background-color: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .mission-vision {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .product-card {
            margin-bottom: 30px;
        }

        .product-card .card-body {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="row mb-4">
            <!-- Menú de navegación -->
            @include('layouts.header')
        </header>

        <div id="main" class="row">
            <!-- Sección de Bienvenida -->
            <div class="jumbotron">
                <div class="container">
                    <h1>Bienvenido a Tienda Doña Delia</h1>
                    <p class="lead">Tu lugar para encontrar los mejores productos al mejor precio.</p>
                </div>
            </div>

            <!-- Sección de Misión y Visión -->
            <div class="mission-vision">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Misión</h2>
                            <p>Nuestra misión es ofrecer productos de alta calidad y servicio excepcional a nuestros clientes, satisfaciendo sus necesidades y superando sus expectativas.</p>
                        </div>
                        <div class="col-md-6">
                            <h2>Visión</h2>
                            <p>Nuestra visión es convertirnos en la tienda líder en el mercado, reconocida por nuestra excelencia en productos, servicio al cliente y compromiso con la comunidad.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Productos -->
            <div class="row">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card">
                            <img src="https://via.placeholder.com/300x200?text=Producto+A" class="card-img-top" alt="Producto A">
                            <div class="card-body">
                                <h5 class="card-title">Producto A</h5>
                                <p class="card-text">Descripción del Producto A.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card">
                            <img src="https://via.placeholder.com/300x200?text=Producto+B" class="card-img-top" alt="Producto B">
                            <div class="card-body">
                                <h5 class="card-title">Producto B</h5>
                                <p class="card-text">Descripción del Producto B.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card">
                            <img src="https://via.placeholder.com/300x200?text=Producto+C" class="card-img-top" alt="Producto C">
                            <div class="card-body">
                                <h5 class="card-title">Producto C</h5>
                                <p class="card-text">Descripción del Producto C.</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Tienda Doña Delia. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de Privacidad</a> |
                <a href="#">Términos de Uso</a>
            </p>
            <p>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <!-- Carga el JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para mostrar/ocultar la descripción de los productos -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const productCards = document.querySelectorAll('.product-card');

            productCards.forEach(card => {
                const button = card.querySelector('.btn-primary');
                const description = card.querySelector('.card-text');

                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    if (description.style.display === 'none' || description.style.display === '') {
                        description.style.display = 'block';
                        button.textContent = 'Ver menos';
                    } else {
                        description.style.display = 'none';
                        button.textContent = 'Ver más';
                    }
                }); 
            });
        });
    </script>
</body>

</html>
