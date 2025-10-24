<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Umum - RSHP UNAIR</title>
    <style>
        /* CSS Internal Khusus Layanan dan Navigasi */
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

        /* vi. Tabel & vii. List */
        .table-style { width: 100%; border-collapse: collapse; margin: 20px 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .table-style th, .table-style td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        .table-style th { background-color: #007bff; color: white; }
        .layanan-box ul { list-style-type: square; }
        .content-box { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 20px; }
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
        <h1>Unit Layanan dan Fasilitas RSHP UNAIR</h1>
        <p style="font-size: 1.1em; margin-bottom: 40px;">RSHP UNAIR menyediakan layanan komprehensif untuk berbagai jenis hewan dengan dukungan fasilitas modern. <span class="text-italic">Kami berkomitmen memberikan yang terbaik.</span></p>
        
        <h2>Tabel Jadwal Pelayanan</h2>
        <table class="table-style">
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Jadwal Operasional</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rawat Jalan (Poliklinik)</td>
                    <td>Senin - Sabtu (08.00 - 15.00 WIB)</td>
                    <td>Normal</td>
                </tr>
                <tr>
                    <td>Unit Gawat Darurat</td>
                    <td>24 Jam / 7 Hari</td>
                    <td>Prioritas</td>
                </tr>
            </tbody>
        </table>

        <h2 style="margin-top: 40px;">Fasilitas Diagnostik</h2>
        <div class="content-box">
            <ul>
                <li><span class="text-bold">Laboratorium</span> (Hematologi, Biokimia Darah, dan Parasitologi)</li>
                <li>Radiografi (Rontgen Digital)</li>
                <li>Ultrasonografi (USG)</li>
            </ul>
        </div>
        <p><a href="https://rshp.unair.ac.id" target="_blank">Lihat Detail di Web Kami</a></p>
    </div>
</body>
</html>