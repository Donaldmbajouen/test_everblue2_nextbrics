@props([
    'size' => '150px',
    'shadow' => '0 0 50px rgba(139, 92, 246, 0.6), 0 0 100px rgba(124, 58, 237, 0.4), 0 0 150px rgba(59, 130, 246, 0.2)'
])

<style>
    .glowing-sphere {
        width: {{ $size }};
        height: {{ $size }};
        border-radius: 50%;
        background: linear-gradient(135deg,
            #8B5CF6 0%,
            #7C3AED 12.5%,
            #6D28D9 25%,
            #5B21B6 37.5%,
            #4C1D95 50%,
            #3730A3 62.5%,
            #1D4ED8 75%,
            #2563EB 87.5%,
            #3B82F6 100%);
        box-shadow: {{ $shadow }};
        position: relative;
        animation: glow 3s ease-in-out infinite alternate;

    }

    .glowing-sphere::before {
        content: '';
        position: absolute;
        top: 10%;
        left: 10%;
        width: 20%;
        height: 20%;
        border-radius: 50%;
        filter: blur(2px);
    }

    .glowing-sphere::after {
        content: '';
        position: absolute;
        bottom: 15%;
        right: 15%;
        width: 15%;
        height: 15%;
        border-radius: 50%;
        filter: blur(1px);
    }

    @keyframes glow {
        0% {
            box-shadow: {{ $shadow }};
            transform: scale(1);
        }
        100% {
            box-shadow: {{ $shadow }}, 0 0 150px rgba(139, 92, 246, 0.8), 0 0 250px rgba(124, 58, 237, 0.6), 0 0 350px rgba(59, 130, 246, 0.4);
            transform: scale(1.05);
        }
    }

    /* .sphere-content {
        color: white;
        text-align: center;
        font-weight: bold;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        z-index: 1;
        position: relative;
    } */
</style>

<div class="glowing-sphere">
    <div class="sphere-content">
        {{ $slot }}
    </div>
</div>
