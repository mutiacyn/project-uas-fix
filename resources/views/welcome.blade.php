<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>HR System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .glass {
            background: rgba(255,255,255,.15);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 40px;
            color: white;
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="glass text-center">
    <h1 class="fw-bold mb-3">HR Management System</h1>
    <p class="mb-4">
        Kelola karyawan, cuti, dan divisi dengan sistem terintegrasi.
    </p>

    <a href="{{ route('login') }}" class="btn btn-light btn-lg w-100 mb-2">Login</a>
    <a href="{{ route('register') }}" class="btn btn-outline-light w-100">Register</a>
</div>

</body>
</html>
