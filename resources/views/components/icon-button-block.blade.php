@props([
    'icon'
])

<div class="d-flex justify-content-center align-items-center p-0 me-1 rounded " style="background:rgba(124, 124, 132, 0.35); backdrop-filter: blur(1px);">
    <div class="d-flex align-items-center justify-content-center" style="width:25px; height:25px;">
        <button type="button" class="btn btn-link text-white p-0 ms-2 d-flex align-items-center justify-content-center" style="font-size:0.9rem; background:transparent; border:none; width:100%; height:100%;">
            <i class="fa-solid fa-{{ $icon }}"></i>
        </button>
    </div>
    <div class="ms-2 flex-grow-1" style="font-size:0.7rem;">
        {{ $slot }}
    </div>
</div>
