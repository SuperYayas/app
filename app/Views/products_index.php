<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La Yaya</title>

    
</head>

<body>

<?= view('includes/header') ?>


   

    <main id="super-main" class="super-container">
        <!-- 🔍 Barra de búsqueda -->
        <div class="search-container">
            <span class="search-icon">🔍</span>
            <input type="text" id="searchInput" placeholder="Buscar ítem..." onkeyup="filterItems()" />
        </div>

        <!-- 📦 Grid de Ítems -->
        <div class="container" id="itemsContainer">

            <?php foreach ($products as $product): ?>
                <div class="box"><?= esc($product['name']); ?></div>
            <?php endforeach; ?>
            <!-- 
           
            <div class="box">Banana</div>
            <div class="box">Cereza</div>   
            <div class="box">Durazno</div>
            <div class="box">Uva</div>
            <div class="box">Pera</div>
            <div class="box">Sandía</div>
            <div class="box">Melón</div>
            <div class="box">Kiwi</div>
            <div class="box">Fresa</div>
            <div class="box">Naranja</div>
            <div class="box">Papaya</div>
            <div class="box">Mango</div> -->
        </div>
    </main>

    <!-- 📱 Menú Hamburguesa para móviles -->
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <div class="mobile-menu" id="mobileMenu">
        <a href="#">Producto</a>
        <a href="#">Supers</a>
        <a href="#">Tickets</a>
        <a href="#">Usuario</a>
    </div>

    <script>
        function toggleTheme() {
            document.body.classList.toggle("dark-mode");
            localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
        }

        (function () {
            if (localStorage.getItem("theme") === "dark") {
                document.body.classList.add("dark-mode");
            }
        })();

        function filterItems() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let items = document.querySelectorAll(".box");

            items.forEach((item) => {
                let text = item.textContent.toLowerCase();
                item.style.display = text.includes(input) ? "block" : "none";
            });
        }

        function toggleMenu() {
            let menu = document.getElementById("mobileMenu");
            menu.style.display = menu.style.display === "flex" ? "none" : "flex";
        }
    </script>
    </main>

    <footer id="super-footer">
        <div class="super-container">
            <ul>
                <li><a href="">TikTok</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter/X</a></li>
            </ul>
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Cookies</a></li>
            </ul>
            <ul>
                <li><a href="">Use Conditions</a></li>
                <li><a href="">Legal Adivice</a></li>
                <li><a href="">Data Privacy</a></li>
                <li><a href="">Staments</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>