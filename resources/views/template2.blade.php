<!DOCTYPE html>
<html lang="en">
<head>
  <title>5026241116 - Ailsa Des Daneela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .header-bar {
      background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);
      padding: 20px 32px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .header-bar .logo h2 {
      color: #fff;
      font-size: 30px;
      font-weight: 700;
      margin: 0;
    }
    .header-bar .logo h3 {
      color: rgba(255,255,255,0.8);
      font-size: 18px;
    }
    .header-bar .nav-links {
      display: flex;
      gap: 4px;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .header-bar .nav-links a {
      color: rgba(255,255,255,0.85);
      font-size: 14px;
      padding: 6px 14px;
      text-decoration: none;
    }
    .header-bar .nav-links a:hover {
      color: #fff;
    }
    .page-content {
      padding: 32px 16px;
    }
  </style>
</head>
<body>

<div class="header-bar">
  <div class="logo">
    <h2>Ailsa Des Daneela</h2>
    <h3>5026241116</h3>
  </div>
  <ul class="nav-links">
    <li><a href="/pegawai">Pegawai</a></li>
    <li><a href="/nilaikuliah">Nilai Kuliah</a></li>
    <li><a href="#">PR 2</a></li>
    <li><a href="#">Pertemuan 15</a></li>
    <li><a href="#">EAS</a></li>
  </ul>
</div>

<div class="container page-content">
  @yield('konten')
</div>

</body>
</html>
