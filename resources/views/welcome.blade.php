<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Keen Style</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: #f4f6fa;
        }
        .navbar {
            left: 0;
            right: 0;
            top: 0;
            width: 100vw;
            height: 50px;
            position: relative;
            z-index: 1040;
            background: #1A1A1A;
            box-shadow: 0 2px 4px rgba(224, 224, 224, 0.185);
        }
        input::placeholder {
            color: white !important;
            opacity: 1;
        }
        .sidebar {
            min-height: 100vh;
            background: #1A1A1A;
            color: #fff;
            margin-top: 0;
        }
        .sidebar .nav-link {
            color: #b5b5c3;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            color: #fff;
            background: #2a2a2a;
            border-radius: 1rem;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(30,30,45,0.06);
        }
    </style>
</head>
<body>
    <!-- Navbar sur toute la largeur -->
    <nav class="navbar navbar-expand border-bottom border-light w-100 shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Section gauche -->
            <div class="d-flex align-items-center">
                <a href="#" class="navbar-brand mb-0 h1 text-white bg-transparent border-0 p-0 shadow-none d-flex align-items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-1" width="32" height="32" alt="Profil">
                    <i class="fas fa-caret-down"></i>
                </a>
                <x-button icon="cog" text="settings" class="navbar-brand mb-0 h1 text-white bg-transparent border-0 p-0 shadow-none mx-2" />
                <x-button icon="paper-plane" text="pseudo" class="navbar-brand mb-0 h1 text-white bg-transparent border-0 p-0 shadow-none mx-2" />
                <x-button icon="plus" text="Elements" class="navbar-brand mb-0 h1 text-white bg-transparent border-0 p-0 shadow-none mx-2" />

            </div>
            <!-- Section centre -->

            <div class="d-flex align-items-center justify-content-center flex-grow-1">
                <x-icon-button-block icon="bell" class="me-1" />
                <x-icon-button-block icon="envelope" class="me-1"/>
                <x-icon-button-block icon="bell" class="me-1"/>
                <x-icon-button-block icon="envelope" class="me-1"/>
                <x-icon-button-block icon="bell" class="me-1"/>
                <x-icon-button-block icon="directory" class="me-1"/>
                <x-icon-button-block icon="eye" class="me-1"/>
            </div>
            <!-- Section droite -->
            <div class="d-flex align-items-center">
                <x-icon-button-block icon="bell" class="me-1" />
                <x-icon-button-block icon="envelope" class="me-1"/>
                <x-icon-button-block icon="arrow-left" class="me-1"/>
                <x-icon-button-block icon="envelope" class="me-1"/>
                <x-icon-button-block icon="file-arrow-down" class="me-1"/>
                <x-icon-button-block icon="folder" class="me-1"/>
                <x-icon-button-block icon="eye" class="me-1"/>
                <button class='btn btn-primary'>save</button>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-dark">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 d-none d-md-block sidebar">
                <!-- barre de recherche -->
                <div class="text-center mb-4">
                    <div class="input-group mt-3" style="background: transparent;">
                        <span class="input-group-text border-end-0" style="background: transparent; color: white; border-color: #444;">
                            <i class="fas fa-search" style="color: white;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="search..." style="background: transparent; color: white; border-color: #444; ::placeholder { color: white; opacity: 1; }" onfocus="this.placeholder=''" onblur="this.placeholder='search...'">

                    </div>
                </div>
                <div>
                    <label for="">breaks</label>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 keen-sidebar-hover" style="position:relative;">
                        <a class="nav-link active d-flex align-items-center" href="#">
                            Tableau de bord
                            <x-icon-button-sidebar
                                icon="caret-right"
                                :items="[
                                    ['label' => 'Accueil', 'icon' => 'home'],
                                    ['label' => 'Stats', 'icon' => 'chart-bar'],
                                    ['label' => 'Rapports', 'icon' => 'file-alt'],
                                ]"
                            />
                        </a>
                    </li>
                    <li class="nav-item mb-2 keen-sidebar-hover" style="position:relative;">
                        <a class="nav-link d-flex align-items-center" href="#">
                            Utilisateurs
                            <x-icon-button-sidebar
                                icon="caret-right"
                                :items="[
                                    ['label' => 'Liste', 'icon' => 'users'],
                                    ['label' => 'Ajouter', 'icon' => 'user-plus'],
                                    ['label' => 'Groupes', 'icon' => 'user-friends'],
                                ]"
                            />
                        </a>
                    </li>
                    <li class="nav-item mb-2 keen-sidebar-hover" style="position:relative;">
                        <a class="nav-link d-flex align-items-center" href="#">
                            Messages
                            <x-icon-button-sidebar
                                icon="caret-right"
                                :items="[
                                    ['label' => 'Boîte de réception', 'icon' => 'inbox'],
                                    ['label' => 'Envoyés', 'icon' => 'paper-plane'],
                                    ['label' => 'Archives', 'icon' => 'archive'],
                                ]"
                            />
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-10 ms-sm-auto px-md-4">

            </main>
        </div>
    </div>
</body>
</html>
