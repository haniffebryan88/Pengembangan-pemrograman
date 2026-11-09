<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Multimedia</title>
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

    /* Grid Multimedia */
    .media-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-top: 15px; }
    .media-item { background: #fafafa; border: 1px solid #eee; padding: 15px; border-radius: 6px; }
    .media-item h3 { margin-bottom: 10px; font-size: 1.1rem; color: #2c3e50; }
    .media-item audio, .media-item video { width: 100%; border-radius: 4px; }
    .media-item img { width: 100%; max-height: 200px; object-fit: cover; border-radius: 4px; }
    /* Toggle Sidebar */
body.collapsed aside {
    width: 70px;
}

body.collapsed aside .brand span,
body.collapsed .menu span {
    display: none;
}
/* Footer */
footer {
    height: 50px;
    background: #fff;
    border-top: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
    color: #777;
}
    </style>
</head>
<body>

    <!-- 1. SIDEBAR -->
    <aside id="sidebar">
        <div class="brand">🚀 <span>MyDashboard</span></div>
        <ul class="menu">
            <li><a href="index.php">🏠 <span>Home</span></a></li>
            <li class="active"><a href="multimedia.php">⚙️ <span>Multimedia</span></a></li>
            <li><a href="#">📊 <span>Statistik</span></a></li>
            <li><a href="#">⚙️ <span>Pengaturan</span></a></li>
        </ul>
    </aside>

    <!-- MAIN WRAPPER -->
    <div class="wrapper">
        <!-- 2. HEADER -->
        <header>
            <button class="toggle-btn" id="toggleBtn">☰ Menu</button>
            <div>Halo, Admin!</div>
        </header>

        <!-- 3. CONTENT -->
        <main>
            <div class="card">
                <h2>Galeri & Pemutar Multimedia</h2>
                <p>Halaman ini digunakan untuk mengelola dan menampilkan berkas multimedia.</p>

                <div class="media-grid">
                    <!-- Contoh Gambar -->
                    <div class="media-item">
                        <h3>🖼️ Gambar</h3>
                        <img src="multimedia/foto.jpg" alt="Contoh Gambar">
                    </div>

                    <!-- Contoh Audio -->
                    <div class="media-item">
                        <h3>🎵 Audio Player</h3>
                        <audio controls>
                            <source src="multimedia/ringtoon.mp3" type="audio/mpeg">
                            Browser Anda tidak mendukung pemutar audio.
                        </audio>
                    </div>

                    <!-- Contoh Video -->
                    <div class="media-item">
                        <h3>🎥 Video Player</h3>
                        <video controls>
                            <source src="multimedia/animasi.mp4" type="video/mp4">
                            Browser Anda tidak mendukung pemutar video.
                        </video>
                    </div>
                </div>
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
