<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Huissiers | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body { background:#f4f6f8; }
        .sidebar { width:260px; background:#0b1c2d; min-height:100vh; }
        .sidebar a { color:#cfd4da; text-decoration:none; }
        .sidebar a:hover, .sidebar a.active { background:rgba(255,255,255,0.1); color:#fff; }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar p-4">
        <h5 class="fw-bold text-white mb-4">Qanoun<span style="color:#c8a35f">Connect</span></h5>
        <ul class="nav flex-column gap-1">
            <li><a class="nav-link rounded px-3 py-2" href="dashboard.php"><i class="fa-solid fa-chart-line me-2"></i> Tableau de bord</a></li>
            <li><a class="nav-link rounded px-3 py-2" href="avocats.php"><i class="fa-solid fa-user-tie me-2"></i> Avocats</a></li>
            <li><a class="nav-link active rounded px-3 py-2" href="#"><i class="fa-solid fa-gavel me-2"></i> Huissiers</a></li>
        </ul>
    </aside>

    <!-- CONTENT -->
    <main class="flex-grow-1 p-4">
        <div class="d-flex justify-content-between mb-4">
            <h2 class="fw-bold">Gestion des Huissiers de Justice</h2>
            <button class="btn btn-dark">
                <i class="fa-solid fa-plus me-1"></i> Ajouter un huissier
            </button>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Tribunal</th>
                            <th>Statut</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Me Youssef Benali</td>
                            <td>Rabat</td>
                            <td>Tribunal de Rabat</td>
                            <td><span class="badge bg-warning text-dark">En attente</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
