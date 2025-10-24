<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RSHP UNAIR</title>
    <style>
        /* CSS Internal Khusus Login dan Navigasi */
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
        .content-box { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin: 20px auto; max-width: 400px; text-align: center;}
        .content-box input { padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 95%; margin-bottom: 10px;}
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
        <h1>Sistem Otentikasi Staf</h1>

        <div class="content-box">
            <h2>Halaman Login Internal</h2>
            <p style="margin-bottom: 25px;">Masukkan kredensial Anda untuk mengakses sistem internal staf.</p>
            
            <form action="#" method="POST" style="display: grid; gap: 15px;">
                <input type="email" name="email" placeholder="Email Pengguna (Contoh: user@unair.ac.id)" required> 
                <input type="password" name="password" placeholder="Password Sistem" required>
                <button type="submit" class="button-primary" style="width: 100%;">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>