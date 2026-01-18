<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QanounConnect | Legal Services in Morocco</title>
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
            --muted: #6c757d;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #212529;
        }

        .navbar {
            background: white;
        }

        .hero {
            background: linear-gradient(120deg, #0b1c2d, #102a43);
            color: white;
        }

        .badge-law {
            background: rgba(200,163,95,0.15);
            color: var(--secondary);
            font-weight: 500;
        }

        .icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: rgba(11,28,45,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .card {
            border: none;
            border-radius: 14px;
        }

        .shadow-soft {
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        footer {
            background: #0b1c2d;
            color: #adb5bd;
        }

        footer a {
            color: #adb5bd;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-dark" href="/">
            Qanoun<span style="color:var(--secondary)">Connect</span>
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                <li class="nav-item"><a class="nav-link" href="#trust">Trust</a></li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-dark px-4" href="/search">Find a Lawyer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero pt-5 mt-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <span class="badge badge-law mb-3">Legal Technology Platform</span>
                <h1 class="fw-bold display-6 mt-3">
                    Trusted Legal Access<br>Made Simple
                </h1>
                <p class="mt-4 text-light opacity-75">
                    QanounConnect connects individuals and businesses in Morocco
                    with verified lawyers and judicial officers through a secure,
                    transparent digital platform.
                </p>
                <div class="mt-4">
                    <a href="/search" class="btn btn-light btn-lg me-2">
                        Get Legal Assistance
                    </a>
                    <a href="/register" class="btn btn-outline-light btn-lg">
                        For Professionals
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center d-none d-md-block">
                <i class="fa-solid fa-scale-balanced" style="font-size:200px; opacity:0.15;"></i>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Legal Services</h2>
            <p class="text-muted">
                Designed to meet modern legal needs with professionalism and discretion.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-soft h-100 p-4">
                    <div class="icon-circle">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h5 class="fw-semibold">Verified Lawyers</h5>
                    <p class="text-muted">
                        Access licensed legal professionals specialized in multiple fields of law.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-soft h-100 p-4">
                    <div class="icon-circle">
                        <i class="fa-solid fa-gavel"></i>
                    </div>
                    <h5 class="fw-semibold">Judicial Officers</h5>
                    <p class="text-muted">
                        Connect with certified bailiffs for enforcement and legal procedures.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-soft h-100 p-4">
                    <div class="icon-circle">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5 class="fw-semibold">Confidential Consultations</h5>
                    <p class="text-muted">
                        Secure digital consultations respecting legal confidentiality standards.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section id="process" class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How It Works</h2>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <i class="fa-solid fa-magnifying-glass fa-2x mb-3 text-dark"></i>
                <h6 class="fw-semibold">Search & Select</h6>
                <p class="text-muted">
                    Find the right professional based on expertise and availability.
                </p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-comments fa-2x mb-3 text-dark"></i>
                <h6 class="fw-semibold">Consult Securely</h6>
                <p class="text-muted">
                    Communicate through a protected and transparent platform.
                </p>
            </div>
            <div class="col-md-4">
                <i class="fa-solid fa-check-circle fa-2x mb-3 text-dark"></i>
                <h6 class="fw-semibold">Resolve Confidently</h6>
                <p class="text-muted">
                    Move forward with clarity and professional legal support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5">
    <div class="container">
        <div class="p-5 rounded shadow-soft text-center" style="background:#f8f9fa;">
            <h2 class="fw-bold mb-3">
                A New Standard for Legal Access in Morocco
            </h2>
            <p class="text-muted mb-4">
                Transparent. Secure. Professionally curated.
            </p>
            <a href="/search" class="btn btn-dark btn-lg px-5">
                Start Now
            </a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h5 class="fw-bold text-white">QanounConnect</h5>
                <p class="small">
                    Legal technology platform simplifying access to justice in Morocco.
                </p>
            </div>
            <div class="col-md-3">
                <h6 class="fw-semibold text-white">Platform</h6>
                <ul class="list-unstyled small">
                    <li><a href="#">Lawyers</a></li>
                    <li><a href="#">Bailiffs</a></li>
                    <li><a href="#">Consultations</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="fw-semibold text-white">Contact</h6>
                <p class="small mb-1">Morocco</p>
                <p class="small">support@qanounconnect.ma</p>
            </div>
        </div>

        <div class="border-top border-secondary pt-3 text-center small">
            © <?= date('Y') ?> QanounConnect. All rights reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
