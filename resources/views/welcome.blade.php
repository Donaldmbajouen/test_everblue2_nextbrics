<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Next bricks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <!-- Sidebar gauche -->
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
                    <label class="mb-3">Bricks</label>
                </div>
                <ul class="nav flex-column">
                    <x-nav-item
                        label="Tableau de bord"
                        icon="home"
                        :active="true"
                        :items="[
                            ['label' => 'Accueil', 'icon' => 'home', 'key' => 'accueil'],
                            ['label' => 'Stats', 'icon' => 'chart-bar', 'key' => 'stats'],
                            ['label' => 'Rapports', 'icon' => 'file-alt', 'key' => 'rapports'],
                            ['label' => 'Notifications', 'icon' => 'bell', 'key' => 'notifications'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Utilisateurs"
                        icon="users"
                        :items="[
                            ['label' => 'Liste', 'icon' => 'users', 'key' => 'liste'],
                            ['label' => 'Ajouter', 'icon' => 'user-plus', 'key' => 'ajouter'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],

                        ]"
                    />
                    <x-nav-item
                        label="Messages"
                        icon="envelope"
                        :items="[
                            ['label' => 'Boîte de réception', 'icon' => 'inbox', 'key' => 'inbox'],
                            ['label' => 'Envoyés', 'icon' => 'paper-plane', 'key' => 'envoyes'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Archives', 'icon' => 'archive', 'key' => 'archives'],
                        ]"
                    />
                </ul>
                <div>
                    <label class="mt-3">Next bricks</label>
                </div>
                <ul class="nav flex-column">
                    <x-nav-item
                        label="Tableau de bord"
                        icon="home"
                        :active="true"
                        :items="[
                            ['label' => 'Accueil', 'icon' => 'home', 'key' => 'accueil'],
                            ['label' => 'Stats', 'icon' => 'chart-bar', 'key' => 'stats'],
                            ['label' => 'Rapports', 'icon' => 'file-alt', 'key' => 'rapports'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Utilisateurs"
                        icon="users"
                        :items="[
                            ['label' => 'Liste', 'icon' => 'users', 'key' => 'liste'],
                            ['label' => 'Ajouter', 'icon' => 'user-plus', 'key' => 'ajouter'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Projets"
                        icon="project-diagram"
                        :items="[
                            ['label' => 'Tous les projets', 'icon' => 'th-list', 'key' => 'tous'],
                            ['label' => 'Nouveau projet', 'icon' => 'plus', 'key' => 'nouveau'],
                            ['label' => 'Archives', 'icon' => 'archive', 'key' => 'archives'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Équipe', 'icon' => 'users', 'key' => 'equipe'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                        ]"
                    />
                    <x-nav-item
                        label="Clients"
                        icon="address-book"
                        :items="[
                            ['label' => 'Liste des clients', 'icon' => 'address-book', 'key' => 'liste'],
                            ['label' => 'Ajouter client', 'icon' => 'user-plus', 'key' => 'ajouter'],
                            ['label' => 'Contrats', 'icon' => 'file-signature', 'key' => 'contrats'],
                            ['label' => 'Factures', 'icon' => 'file-invoice', 'key' => 'factures'],
                            ['label' => 'Rendez-vous', 'icon' => 'calendar-check', 'key' => 'rdv'],
                            ['label' => 'Notes', 'icon' => 'sticky-note', 'key' => 'notes'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                        ]"
                    />
                    <x-nav-item
                        label="Comptabilité"
                        icon="calculator"
                        :items="[
                            ['label' => 'Tableau de bord', 'icon' => 'chart-pie', 'key' => 'dashboard'],
                            ['label' => 'Factures', 'icon' => 'file-invoice', 'key' => 'factures'],
                            ['label' => 'Dépenses', 'icon' => 'money-bill-wave', 'key' => 'depenses'],
                            ['label' => 'Revenus', 'icon' => 'coins', 'key' => 'revenus'],
                            ['label' => 'Rapports', 'icon' => 'file-alt', 'key' => 'rapports'],
                            ['label' => 'Banques', 'icon' => 'university', 'key' => 'banques'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Ressources humaines"
                        icon="user-tie"
                        :items="[
                            ['label' => 'Employés', 'icon' => 'users', 'key' => 'employes'],
                            ['label' => 'Congés', 'icon' => 'umbrella-beach', 'key' => 'conges'],
                            ['label' => 'Paie', 'icon' => 'money-check-alt', 'key' => 'paie'],
                            ['label' => 'Recrutement', 'icon' => 'user-plus', 'key' => 'recrutement'],
                            ['label' => 'Formations', 'icon' => 'chalkboard-teacher', 'key' => 'formations'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Paramètres"
                        icon="cogs"
                        :items="[
                            ['label' => 'Général', 'icon' => 'cog', 'key' => 'general'],
                            ['label' => 'Sécurité', 'icon' => 'shield-alt', 'key' => 'securite'],
                            ['label' => 'Notifications', 'icon' => 'bell', 'key' => 'notifications'],
                            ['label' => 'Utilisateurs', 'icon' => 'users-cog', 'key' => 'utilisateurs'],
                            ['label' => 'API', 'icon' => 'plug', 'key' => 'api'],
                            ['label' => 'Facturation', 'icon' => 'file-invoice-dollar', 'key' => 'facturation'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                            ['label' => 'A propos', 'icon' => 'info-circle', 'key' => 'apropos'],
                        ]"
                    />
                    <x-nav-item
                        label="Documents"
                        icon="file-alt"
                        :items="[
                            ['label' => 'Tous les documents', 'icon' => 'file-alt', 'key' => 'tous'],
                            ['label' => 'Nouveau document', 'icon' => 'file-medical', 'key' => 'nouveau'],
                            ['label' => 'Modèles', 'icon' => 'copy', 'key' => 'modeles'],
                            ['label' => 'Archives', 'icon' => 'archive', 'key' => 'archives'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Partagés', 'icon' => 'share-alt', 'key' => 'partages'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Tâches"
                        icon="tasks"
                        :items="[
                            ['label' => 'Toutes les tâches', 'icon' => 'tasks', 'key' => 'toutes'],
                            ['label' => 'Nouveau', 'icon' => 'plus', 'key' => 'nouveau'],
                            ['label' => 'En cours', 'icon' => 'spinner', 'key' => 'encours'],
                            ['label' => 'Terminées', 'icon' => 'check', 'key' => 'terminees'],
                            ['label' => 'Assignées', 'icon' => 'user-check', 'key' => 'assignees'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Agenda"
                        icon="calendar-alt"
                        :items="[
                            ['label' => 'Vue mensuelle', 'icon' => 'calendar', 'key' => 'mois'],
                            ['label' => 'Vue hebdomadaire', 'icon' => 'calendar-week', 'key' => 'semaine'],
                            ['label' => 'Vue quotidienne', 'icon' => 'calendar-day', 'key' => 'jour'],
                            ['label' => 'Événements', 'icon' => 'calendar-plus', 'key' => 'evenements'],
                            ['label' => 'Rappels', 'icon' => 'bell', 'key' => 'rappels'],
                            ['label' => 'Partagés', 'icon' => 'share-alt', 'key' => 'partages'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Support"
                        icon="life-ring"
                        :items="[
                            ['label' => 'FAQ', 'icon' => 'question-circle', 'key' => 'faq'],
                            ['label' => 'Tickets', 'icon' => 'ticket-alt', 'key' => 'tickets'],
                            ['label' => 'Chat', 'icon' => 'comments', 'key' => 'chat'],
                            ['label' => 'Téléphone', 'icon' => 'phone', 'key' => 'telephone'],
                            ['label' => 'Email', 'icon' => 'envelope', 'key' => 'email'],
                            ['label' => 'Documentation', 'icon' => 'book', 'key' => 'documentation'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Retour', 'icon' => 'arrow-left', 'key' => 'retour'],
                        ]"
                    />
                    <x-nav-item
                        label="Notifications"
                        icon="bell"
                        :items="[
                            ['label' => 'Toutes', 'icon' => 'bell', 'key' => 'toutes'],
                            ['label' => 'Non lues', 'icon' => 'envelope-open', 'key' => 'nonlues'],
                            ['label' => 'Mentions', 'icon' => 'at', 'key' => 'mentions'],
                            ['label' => 'Alertes', 'icon' => 'exclamation-triangle', 'key' => 'alertes'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Rapports"
                        icon="chart-bar"
                        :items="[
                            ['label' => 'Vue globale', 'icon' => 'chart-bar', 'key' => 'globale'],
                            ['label' => 'Par projet', 'icon' => 'project-diagram', 'key' => 'parprojet'],
                            ['label' => 'Par client', 'icon' => 'address-book', 'key' => 'parclient'],
                            ['label' => 'Par utilisateur', 'icon' => 'users', 'key' => 'parutilisateur'],
                            ['label' => 'Export', 'icon' => 'file-export', 'key' => 'export'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Outils"
                        icon="tools"
                        :items="[
                            ['label' => 'Gestionnaire de fichiers', 'icon' => 'folder-open', 'key' => 'fichiers'],
                            ['label' => 'Calendrier', 'icon' => 'calendar', 'key' => 'calendrier'],
                            ['label' => 'Notes', 'icon' => 'sticky-note', 'key' => 'notes'],
                            ['label' => 'Calculatrice', 'icon' => 'calculator', 'key' => 'calculatrice'],
                            ['label' => 'Horloge', 'icon' => 'clock', 'key' => 'horloge'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Support', 'icon' => 'life-ring', 'key' => 'support'],
                        ]"
                    />
                    <x-nav-item
                        label="Aide"
                        icon="question-circle"
                        :items="[
                            ['label' => 'Centre d\'aide', 'icon' => 'question-circle', 'key' => 'centre'],
                            ['label' => 'Tutoriels', 'icon' => 'video', 'key' => 'tutoriels'],
                            ['label' => 'Contact', 'icon' => 'envelope', 'key' => 'contact'],
                            ['label' => 'Forum', 'icon' => 'comments', 'key' => 'forum'],
                            ['label' => 'Documentation', 'icon' => 'book', 'key' => 'documentation'],
                            ['label' => 'Paramètres', 'icon' => 'cog', 'key' => 'parametres'],
                            ['label' => 'Retour', 'icon' => 'arrow-left', 'key' => 'retour'],
                        ]"
                    />
                    <x-nav-item
                        label="Messages"
                        icon="envelope"
                        :items="[
                            ['label' => 'Boîte de réception', 'icon' => 'inbox', 'key' => 'inbox'],
                            ['label' => 'Envoyés', 'icon' => 'paper-plane', 'key' => 'envoyes'],
                            ['label' => 'Documents', 'icon' => 'file', 'key' => 'documents'],
                            ['label' => 'Favoris', 'icon' => 'star', 'key' => 'favoris'],
                            ['label' => 'Tâches', 'icon' => 'tasks', 'key' => 'taches'],
                            ['label' => 'Agenda', 'icon' => 'calendar', 'key' => 'agenda'],
                            ['label' => 'Archives', 'icon' => 'archive', 'key' => 'archives'],
                        ]"
                    />
                </ul>
            </nav>
            <!-- Contenu principal -->
            <main class="col-md-6 ms-sm-auto px-md-4">
                <div class="text-center mt-15">
                    <x-glowing-sphere size="100px"/>
                </div>
            </main>
            <!-- Sidebar droite statique -->
            <aside class="col-md-2 d-none d-md-block sidebar" style="background:#1A1A1A; min-height:100vh; border-radius:1rem 0 0 1rem;">
                <div class="p-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h6 class="text-white fw-bold mb-0">Structures</h6>
                        <div class="d-flex gap-1">
                            <i class="fas fa-folder text-white-50 hover-icon" style="cursor: pointer; padding: 0.25rem; border-radius: 0.25rem; transition: all 0.2s ease;"></i>
                            <i class="fas fa-file text-white-50 hover-icon" style="cursor: pointer; padding: 0.25rem; border-radius: 0.25rem; transition: all 0.2s ease;"></i>
                            <i class="fas fa-code text-white-50 hover-icon" style="cursor: pointer; padding: 0.25rem; border-radius: 0.25rem; transition: all 0.2s ease;"></i>
                            <i class="fas fa-database text-white-50 hover-icon" style="cursor: pointer; padding: 0.25rem; border-radius: 0.25rem; transition: all 0.2s ease;"></i>
                        </div>
                    </div>

                    <!-- Hiérarchie des dossiers -->
                    <div class="d-flex flex-column gap-1">
                        <div class="d-flex align-items-center text-white-50 hover-structure" style="cursor: pointer; padding: 0.25rem; border-radius: 0.25rem; transition: all 0.2s ease;">
                            <i class="fas fa-chevron-right me-2" style="font-size: 0.75rem;"></i>
                            <i class="fas fa-folder me-2"></i>
                            <span class="small">Next bricks</span>
                        </div>


                    </div>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>
