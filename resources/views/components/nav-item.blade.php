@props([
    'label' => '',
    'icon' => '',
    'active' => false,
    'items' => []
])


<li class="nav-item mb-2 keen-sidebar-hover" style="position:relative;">
    <a class="nav-link  d-flex align-items-center justify-content-between" href="#">
        <div class="d-flex align-items-center">
            @if($icon)
                <i class="fas fa-{{ $icon }} me-2"></i>
            @endif
            {{ $label }}
        </div>
        @if(count($items) > 0)
            <i class="fas fa-caret-right"></i>
        @endif
    </a>

    @if(count($items) > 0)
        <div class="keen-sidebar-flyout">
            <div class="container-fluid">
                <div class="mb-4">
                    <h4 class="text-white fw-bold mb-3">{{ $label }}</h4>
                    <div class="text-muted small">{{ count($items) }} éléments</div>
                </div>
                <div class="row g-2">
                    @foreach($items as $item)
                        <div class="col-6">
                            <div class="card bg-dark text-white border-0 rounded-3 shadow-sm mb-2 text-center hover-card" style="transition: all 0.2s ease;">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center py-3">
                                    <div class="mb-2" style="font-size:1.5rem;">
                                        <i class="fas fa-{{ $item['icon'] }}"></i>
                                    </div>
                                    <div class="fw-semibold small">{{ $item['label'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</li>
