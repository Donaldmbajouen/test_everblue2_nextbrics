@props([
    'icon',
    'items' => [
        ['label' => 'Tableau de bord', 'icon' => 'gauge'],
        ['label' => 'Utilisateurs', 'icon' => 'users'],
        ['label' => 'Messages', 'icon' => 'envelope'],
        ['label' => 'Paramètres', 'icon' => 'cog'],
        ['label' => 'Statistiques', 'icon' => 'chart-bar'],
    ] // tableau d'éléments [['label' => '...', 'icon' => '...'], ...]
])

<style>
    .keen-sidebar-flyout {
        display: none;
        position: fixed;
        top: 50px;
        left: 25vw; /* largeur de la sidebar principale */
        width: 25vw;
        min-width: 260px;
        max-width: 350px;
        height: calc(100vh - 50px);
        background: #1A1A1A;
        color: #fff;
        border-radius: 0 1rem 1rem 0;
        box-shadow: 0 4px 24px rgba(0,0,0,0.18);
        z-index: 3000;
        padding: 2rem 1rem 2rem 1rem;
        transition: opacity 0.2s;
    }
    .keen-sidebar-hover:hover .keen-sidebar-flyout,
    .keen-sidebar-hover:focus-within .keen-sidebar-flyout {
        display: block;
    }
    .keen-sidebar-flyout .input-group {
        background: transparent;
    }
    .keen-sidebar-flyout .input-group-text {
        background: transparent;
        color: white;
        border-color: #444;
    }
    .keen-sidebar-flyout input[type="text"] {
        background: transparent;
        color: white;
        border-color: #444;
    }
    .keen-sidebar-flyout .nav-link {
        color: #b5b5c3;
        border-radius: 1rem;
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        transition: background 0.2s, color 0.2s;
    }
    .keen-sidebar-flyout .nav-link.active,
    .keen-sidebar-flyout .nav-link:hover {
        color: #fff;
        background: #2a2a2a;
    }
</style>

<div class="d-flex justify-content-center align-items-center p-0 me-1 rounded" style="background:rgba(124, 124, 132, 0.35); backdrop-filter: blur(1px);">
    <div class="d-flex align-items-center justify-content-center" style="width:25px; height:25px;">
        <button type="button" class="btn btn-link text-white p-0 ms-2 d-flex align-items-center justify-content-center" style="font-size:0.9rem; background:transparent; border:none; width:100%; height:100%;">
            <i class="fas fa-{{ $icon }}"></i>
        </button>
    </div>
</div>
<div class="keen-sidebar-flyout">
    <ul class="nav flex-column">
        @foreach($items as $item)
            <li class="nav-item mb-2">
                <a class="nav-link d-flex align-items-center" href="#">
                    <i class="fas fa-{{ $item['icon'] }} me-2"></i>
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
