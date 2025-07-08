@props([
    'icon' => null,
    'text'
])

<style>
    .keen-btn-container {
        background: transparent;
        transition: background 0.2s;
    }
    .keen-btn-container:hover {
        background: rgba(255, 255, 255, 0.142);
    }
</style>
<div class="keen-btn-container d-inline-flex align-items-center rounded px-2 py-1">
    <button type="button" class="btn btn-link p-0 m-0 align-items-center d-inline-flex text-white text-decoration-none" style="box-shadow:none; background:transparent; border:none; font-size:0.75rem; min-height:unset; min-width:unset; line-height:1;">
        @if($icon)
            <i class="fas fa-{{ $icon }} me-1" style="font-size:0.9rem;"></i>
        @endif
        <span style="font-size:0.8rem;">{{ $text }}</span>
    </button>
</div>
