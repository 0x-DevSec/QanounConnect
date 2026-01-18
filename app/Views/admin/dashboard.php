<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | QanounConnect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0b1c2d;
            --secondary: #c8a35f;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f8;
        }

        .sidebar {
            width: 260px;
            background: var(--primary);
            min-height: 100vh;
        }

        .sidebar a {
            color: #cfd4da;
            text-decoration: none;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .stat-card {
            border: none;
            border-radius: 14px;
        }

        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(11,28,45,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar p-4">
        <h5 class="fw-bold text-white mb-4">
            Qanoun<span style="color:var(--secondary)">Connect</span>
        </h5>

        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a class="nav-link active rounded px-3 py-2" href="#">
                    <i class="fa-solid fa-chart-line me-2"></i> Tableau de bord
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded px-3 py-2" href="#">
                    <i class="fa-solid fa-user-tie me-2"></i> Avocats
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded px-3 py-2" href="#">
                    <i class="fa-solid fa-gavel me-2"></i> Huissiers
                </a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link rounded px-3 py-2 text-danger" href="#">
                    <i class="fa-solid fa-right-from-bracket me-2"></i> Déconnexion
                </a>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-grow-1 p-4">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0">Tableau de bord administrateur</h2>
            <span class="text-muted">Administrateur</span>
        </div>

        <!-- STATISTICS -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1">Avocats</h6>
                            <h4 class="fw-bold mb-0">128</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3">
                            <i class="fa-solid fa-gavel"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1">Huissiers</h6>
                            <h4 class="fw-bold mb-0">42</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-4">
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-1">Consultations</h6>
                            <h4 class="fw-bold mb-0">356</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MANAGEMENT TABLE -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Gestion des professionnels</h5>
                    <button class="btn btn-dark">
                        <i class="fa-solid fa-plus me-1"></i> Ajouter
                    </button>
                </div>

                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Ville</th>
                            <th>Statut</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Me Ahmed El Amrani</td>
                            <td>Avocat</td>
                            <td>Casablanca</td>
                            <td>
                                <span class="badge bg-success">Actif</span>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Me Youssef Benali</td>
                            <td>Huissier</td>
                            <td>Rabat</td>
                            <td>
                                <span class="badge bg-warning text-dark">En attente</span>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
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
