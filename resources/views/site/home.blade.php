<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RSHP UNAIR</title>
    <style>
        /* CSS Internal Khusus untuk Home dan Navigasi */
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #444; background-color: #f8f9fa; }
        .container { width: 85%; max-width: 1200px; margin: 0 auto; padding: 20px 0; }
        .header { background: linear-gradient(135deg, #004d80, #007bff); color: white; padding: 10px 0; box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.8em; font-weight: 700; } 
        nav a { color: white; margin-left: 25px; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        nav a:hover { color: #ffc107; }
        h1, h2 { color: #004d80; margin-top: 0; }
        .text-bold { font-weight: bold; }
        .text-italic { font-style: italic; }
        .button-primary { display: inline-block; background-color: #ffc107; color: #004d80 !important; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        
        .jumbotron { 
            background-color: #e9ecef; 
            padding: 40px 0; 
            text-align: center; 
            color: #333; 
            margin-bottom: 30px; 
            height: auto; 
        }

        .main-image {
            width: 100%;
            height: 180px; 
            overflow: hidden; 
            display: block;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            object-position: 50% 55%; 
        }

        .layanan-section { padding: 40px 0; text-align: center; }
        .layanan-section h2 { font-size: 2em; color: #004d80; margin-bottom: 40px; }
        .layanan-list { display: flex; justify-content: space-around; gap: 20px; }
        .layanan-item { flex-basis: 30%; padding: 30px; background-color: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: transform 0.3s; }
        .layanan-item h3 { color: #007bff; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <div class="container header-content">
            <div class="logo">RSHP UNAIR</div>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('layanan.umum') }}">Layanan Umum</a>
                <a href="{{ route('visi.misi') }}">Visi Misi</a>
                <a href="{{ route('struktur.organisasi') }}">Struktur Organisasi</a>
                <a href="{{ route('login') }}" class="button-primary" style="margin-left: 15px;">Login</a>
            </nav>
        </div>
    </div>

    <div class="main-image">
        <img src="{{ asset('images/Rektoratt.jpeg') }}" alt="Gambar Banner RSHP UNAIR">
    </div>
    <div class="jumbotron">
        <div class="container">
            <h1>Selamat Datang di RSHP UNAIR</h1>
            <p>Rumah Sakit Hewan Pendidikan Universitas Airlangga. Melaksanakan Tri Dharma Perguruan Tinggi sebagai pusat rujukan, pendidikan, dan penelitian di bidang kedokteran hewan.</p>
            <a href="{{ route('layanan.umum') }}" class="button-primary">Lihat Layanan Kami</a> 
        </div>
    </div>

    <div class="layanan-section">
        <div class="container">
            <h2>Layanan Unggulan</h2>
            <div class="layanan-list">
                <div class="layanan-item"><p style="font-size: 2em;"></p><h3>Poliklinik</h3><p>Pemeriksaan rutin dan diagnosis awal.</p></div>
                <div class="layanan-item"><p style="font-size: 2em;"></p><h3>Rawat Inap</h3><p>Perawatan intensif dan observasi 24 jam.</p></div>
                <div class="layanan-item"><p style="font-size: 2em;"></p><h3>Diagnostik</h3><p>Laboratorium, Radiologi, dan USG lengkap.</p></div>
            </div>
        </div>
    </div>
</body>
</html>