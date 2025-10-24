<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi - RSHP UNAIR</title>
    <style>
        /* CSS Internal Khusus Visi Misi dan Navigasi */
        body { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #444; background-color: #f8f9fa; }
        .container { width: 85%; max-width: 1200px; margin: 0 auto; padding: 20px 0; }
        .header { background: linear-gradient(135deg, #004d80, #007bff); color: white; padding: 10px 0; box-shadow: 0 2px 8px rgba(0,0,0,0.2); }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; margin-left: 25px; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        nav a:hover { color: #ffc107; }
        h1, h2 { color: #004d80; margin-top: 0; }
        .text-bold { font-weight: bold; }
        .text-italic { font-style: italic; }
        .button-primary { display: inline-block; background-color: #ffc107; color: #004d80 !important; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }
        .content-box { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 20px; }
        .vm-section ul { list-style-type: square; }
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

    <div class="container">
        <h1>Visi, Misi, dan Tujuan RSHP UNAIR</h1>
        
        <div class="content-box">
            <h2>Visi</h2>
            <p>Menjadi pusat rujukan pelayanan kedokteran hewan dan kesehatan lain yang <span class="text-bold">unggul</span> di tingkat nasional maupun internasional.</p>
        </div>

        <div class="content-box">
            <h2>Misi</h2>
            <ul>
                <li>Menyelenggarakan pelayanan kesehatan hewan yang berkualitas tinggi, berstandar dan profesional.</li>
                <li>Menjadi sarana pendidikan, penelitian, dan pengabdian masyarakat.</li>
                <li>Mengembangkan manajemen rumah sakit hewan yang produktif, efisien, bermutu, dan berbasis kinerja.</li>
            </ul>
        </div>
        <p style="margin-top: 15px;"><a href="{{ route('struktur.organisasi') }}">Lihat struktur organisasi RSHP</a></p>
    </div>
</body>
</html>