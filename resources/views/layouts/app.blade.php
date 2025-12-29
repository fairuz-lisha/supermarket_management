<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Supermarket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        #sidebar {
            min-height: 100vh;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- SIDEBAR -->
    <nav id="sidebar" class="bg-dark text-white p-3" style="width:250px;">
        <h4>Supermarket</h4>
        <ul class="nav flex-column mt-4">
            <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Produk</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Kategori</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="#">Transaksi</a></li>
        </ul>
    </nav>

    <!-- CONTENT -->
    <div class="flex-grow-1 p-4">
        <button id="toggleSidebar" class="btn btn-outline-dark d-md-none mb-3">
            ☰
        </button>

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleSidebar').onclick = function () {
        document.getElementById('sidebar').classList.toggle('active');
    }
</script>

</body>
</html>
