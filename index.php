<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sederhana & Menarik</title>
    <style>
        /* CSS SEDERHANA & MODERN */
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: sans-serif; }
        body { display: flex; height: 100vh; background: #f4f6f9; color: #333; }

        /* Sidebar */
        aside { width: 220px; background: #2c3e50; color: #fff; display: flex; flex-direction: column; transition: 0.3s; }
        .brand { padding: 20px; font-size: 1.2rem; font-weight: bold; background: rgba(0,0,0,0.1); }
        .menu { list-style: none; padding: 20px 10px; }
        .menu li a { display: block; padding: 10px 15px; color: #bdc3c7; text-decoration: none; border-radius: 5px; margin-bottom: 5px; transition: 0.2s; }
        .menu li a:hover, .menu li.active a { background: #3498db; color: #fff; }

        /* Main Wrapper (Header + Content + Footer) */
        .wrapper { flex: 1; display: flex; flex-direction: column; overflow: hidden; }

        /* Header */
        header { height: 60px; background: #fff; border-bottom: 1px solid #ddd; display: flex; align-items: center; justify-content: space-between; padding: 0 20px; }
        .toggle-btn { background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #333; }

        /* Content */
        main { flex: 1; padding: 20px; overflow-y: auto; }
        .card { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 20px; }

        /* Footer */
        footer { height: 50px; background: #fff; border-top: 1px solid #ddd; display: flex; align-items: center; justify-content: center; font-size: 0.85rem; color: #777; }

        /* Kelas untuk Toggle Sidebar via JS */
        body.collapsed aside { width: 70px; }
        body.collapsed aside .brand span,
        body.collapsed .menu span { display: none; }
    </style>
</head>
<body>

    <!-- 1. SIDEBAR -->
    <aside id="sidebar">
        <div class="brand">🚀 <span>MyDashboard</span></div>
        <ul class="menu">
            <li class="active"><a href="#"><span>🏠 Home</span></a></li>
            <li><a href="multimedia.php">⚙️ <span>Multimedia</span></a></li>
            <li><a href="#"><span>📊 Statistik</span></a></li>
            <li><a href="#"><span>⚙️ Pengaturan</span></a></li>
        </ul>
    </aside>
     <!-- MAIN WRAPPER -->
<div class="wrapper">
    <!-- 2. HEADER -->
    <header>
        <button class="toggle-btn" id="toggleBtn">Menu</button>
        <div>Halo, Admin!</div>
    </header>
    <!-- 3. CONTENT -->
    <main>
        <div class="card">
            <h2>Selamat Datang!</h2>
            <p>Ini adalah area konten utama yang bersih dan mudah dikustomisasi.</p>
        </div>
    </main>

    <!-- 4. FOOTER -->
    <footer>
        &copy; 2026 MyDashboard. All rights reserved.
    </footer>
</div>

<!-- JAVASCRIPT SEDERHANA -->
<script>
    const toggleBtn = document.getElementById('toggleBtn');
    const body = document.body;
    toggleBtn.addEventListener('click', () => {
        body.classList.toggle('collapsed');
    });
</script>
</body>
</html>