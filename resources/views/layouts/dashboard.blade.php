<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Corpo da página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #2c3e50;
            color: #fff;
            width: 260px;
            transition: width 0.3s ease;
        }

        /* Título da Sidebar */
        .sidebar h3 {
            font-size: 24px;
            font-weight: 600;
            padding: 20px;
            background: #34495e;
            margin: 0;
            text-align: center;
        }

        /* Lista de navegação */
        .sidebar .nav-item {
            list-style: none;
        }

        .sidebar a {
            color: #bfc9ca;
            text-decoration: none;
            padding: 15px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            border-bottom: 1px solid #3e4c58;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #1abc9c;
            color: #fff;
            border-left: 5px solid #fff;
        }

        .sidebar a i {
            margin-right: 15px;
            font-size: 18px;
        }

        /* Conteúdo */
        .content {
            margin-left: 260px;
            padding: 30px;
            transition: margin-left 0.3s ease;
        }

        .content header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content h2 {
            font-size: 30px;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-logout {
            background: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background: #c0392b;
        }

        /* Estilo do Card */
        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background: #2980b9;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
        }

        .card-body {
            background: #fff;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
            }

            .sidebar h3 {
                font-size: 18px;
                padding: 10px;
            }

            .content {
                margin-left: 80px;
                padding: 15px;
            }

            .sidebar a {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Giant Library</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard.profile') ? 'active' : '' }}" href="{{ route('dashboard.profile') }}">
                    <i class="fas fa-user"></i> Perfil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('cart.index') ? 'active' : '' }}" href="{{ route('cart.index') }}">
                    <i class="fas fa-shopping-cart"></i> Carrinho
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard.settings') ? 'active' : '' }}" href="{{ route('dashboard.settings') }}">
                    <i class="fas fa-cog"></i> Configurações
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard.aboutwe') ? 'active' : '' }}" href="{{ route('dashboard.aboutwe') }}">
                    <i class="fas fa-users"></i> Sobre Nós
                </a>
            </li>
        </ul>
    </div>

    <!-- Conteúdo -->
    <div class="content">
        <header>
            <h2>@yield('title')</h2>
            <button class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </header>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>