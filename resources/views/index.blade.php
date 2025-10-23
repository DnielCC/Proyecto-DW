<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>DULCES RICOS - Inicio</title>
</head>
<body>
    <header>
        <div class="divNavBar">
            <nav class="navBar">
                <div class="logo">
                    <h2>DULCES RICOS</h2>
                </div>
                <ul class="nav-menu">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="http://127.0.0.1:8000/login" class="btn-login">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Sección Hero -->
        <section id="inicio" class="hero-section">
            <div class="hero-content">
                <h1 class="titulo-principal">DULCES RICOS</h1>
                <p class="subtitulo">Los más deliciosos dulces artesanales para endulzar tu día</p>
                <div class="hero-buttons">
                    <a href="#productos" class="btn-primary">Ver Productos</a>
                    <a href="#contacto" class="btn-secondary">Contactar</a>
                </div>
            </div>
        </section>

        <!-- Sección Productos Destacados -->
        <section id="productos" class="productos-section">
            <div class="container">
                <h2 class="section-title">Nuestros Productos Destacados</h2>
                <div class="productos-grid">
                    <div class="producto-card">
                        <div class="producto-imagen">🍰</div>
                        <h3>Pasteles Artesanales</h3>
                        <p>Deliciosos pasteles hechos con ingredientes frescos y amor</p>
                    </div>
                    <div class="producto-card">
                        <div class="producto-imagen">🍪</div>
                        <h3>Galletas Caseras</h3>
                        <p>Galletas crujientes y suaves con sabores únicos</p>
                    </div>
                    <div class="producto-card">
                        <div class="producto-imagen">🍫</div>
                        <h3>Chocolates Premium</h3>
                        <p>Chocolates artesanales con los mejores ingredientes</p>
                    </div>
                    <div class="producto-card">
                        <div class="producto-imagen">🧁</div>
                        <h3>Cupcakes Decorados</h3>
                        <p>Hermosos cupcakes con decoraciones personalizadas</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección Nosotros -->
        <section id="nosotros" class="nosotros-section">
            <div class="container">
                <div class="nosotros-content">
                    <div class="nosotros-texto">
                        <h2>¿Quiénes Somos?</h2>
                        <p>En DULCES RICOS llevamos más de 10 años creando los más deliciosos dulces artesanales. Nuestra pasión por la repostería y el uso de ingredientes frescos nos ha convertido en la opción favorita de nuestros clientes.</p>
                        <p>Nos especializamos en crear experiencias dulces únicas para cada ocasión especial, desde cumpleaños hasta bodas y eventos corporativos.</p>
                    </div>
                    <div class="nosotros-imagen">
                        <div class="imagen-placeholder">🏪</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección Contacto -->
        <section id="contacto" class="contacto-section">
            <div class="container">
                <h2 class="section-title">Contáctanos</h2>
                <div class="contacto-content">
                    <div class="contacto-info">
                        <div class="contacto-item">
                            <h3>📍 Ubicación</h3>
                            <p>Av. Principal 123<br>Ciudad, País</p>
                        </div>
                        <div class="contacto-item">
                            <h3>📞 Teléfono</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                        <div class="contacto-item">
                            <h3>✉️ Email</h3>
                            <p>info@dulcesricos.com</p>
                        </div>
                        <div class="contacto-item">
                            <h3>🕒 Horarios</h3>
                            <p>Lunes - Viernes: 9:00 AM - 7:00 PM<br>Sábados: 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                    <div class="contacto-form">
                        <h3>Envíanos un Mensaje</h3>
                        <form>
                            <input type="text" placeholder="Tu Nombre" required>
                            <input type="email" placeholder="Tu Email" required>
                            <textarea placeholder="Tu Mensaje" rows="5" required></textarea>
                            <button type="submit" class="btn-primary">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>DULCES RICOS</h3>
                    <p>Endulzando vidas desde 2014</p>
                </div>
                <div class="footer-links">
                    <a href="#inicio">Inicio</a>
                    <a href="#productos">Productos</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#contacto">Contacto</a>
                </div>
                <div class="footer-social">
                    <h4>Síguenos</h4>
                    <div class="social-links">
                        <a href="#">📘 Facebook</a>
                        <a href="#">📷 Instagram</a>
                        <a href="#">🐦 Twitter</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 DULCES RICOS. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>