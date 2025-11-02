<?php
/**
 * DigiFlow Loading Screen Component
 * Include this file in your index.php or any page where you want the loading screen
 * Usage: <?php include 'loading-screen.php'; ?>
 */
?>

<!-- Loading Screen Styles -->
<style id="loading-screen-styles">
    /* Loading Screen - Scoped to prevent conflicts */
    #digiflow-loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(2, 0, 18, 1) 0%, rgba(10, 5, 30, 1) 50%, rgba(2, 0, 18, 1) 100%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        text-align: center;
        animation: loadingFadeIn 0.5s ease-out;
        overflow: hidden;
    }

    @keyframes loadingFadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Logo Container */
    #digiflow-loading-screen .loading-logo-container {
        margin-bottom: 2.5rem;
        position: relative;
    }

    #digiflow-loading-screen .loading-logo-image {
        width: 140px;
        height: 140px;
        object-fit: contain;
        filter: drop-shadow(0 10px 40px rgba(0, 245, 255, 0.6));
        border-radius: 50%;
        animation: loadingLogoFloat 3s ease-in-out infinite;
        position: relative;
        z-index: 2;
    }

    #digiflow-loading-screen .loading-logo-container::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 245, 255, 0.2), transparent 70%);
        animation: loadingGlowPulse 2s ease-in-out infinite;
        z-index: 1;
    }

    @keyframes loadingGlowPulse {
        0%, 100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.5;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 1;
        }
    }

    @keyframes loadingLogoFloat {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(0deg);
        }
    }

    /* Brand Name */
    #digiflow-loading-screen .loading-brand-name {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #00f5ff 0%, #ffffff 50%, #0061ff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 3.5rem;
        letter-spacing: 0.05em;
        text-shadow: 0 0 60px rgba(0, 245, 255, 0.3);
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        animation: loadingTextShimmer 3s ease-in-out infinite;
    }

    @keyframes loadingTextShimmer {
        0%, 100% {
            filter: brightness(1);
        }
        50% {
            filter: brightness(1.2);
        }
    }

    /* Loading Animation */
    #digiflow-loading-screen .loading-animation {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 2.5rem;
    }

    #digiflow-loading-screen .loading-dot {
        width: 14px;
        height: 14px;
        background: linear-gradient(135deg, #00f5ff, #0061ff);
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(0, 245, 255, 0.6);
        animation: loadingBounce 1.4s ease-in-out infinite;
    }

    #digiflow-loading-screen .loading-dot:nth-child(1) {
        animation-delay: 0s;
    }

    #digiflow-loading-screen .loading-dot:nth-child(2) {
        animation-delay: 0.2s;
    }

    #digiflow-loading-screen .loading-dot:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes loadingBounce {
        0%, 80%, 100% {
            transform: scale(0.7) translateY(0);
            opacity: 0.6;
        }
        40% {
            transform: scale(1.3) translateY(-10px);
            opacity: 1;
        }
    }

    /* Loading Text */
    #digiflow-loading-screen .loading-text {
        font-size: 1.25rem;
        color: #cbd5e1;
        font-weight: 500;
        margin-bottom: 2rem;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        letter-spacing: 0.02em;
    }

    /* Progress Bar */
    #digiflow-loading-screen .loading-progress-container {
        width: 350px;
        height: 8px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 100px;
        margin: 0 auto 1.25rem;
        overflow: hidden;
        box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.3);
    }

    #digiflow-loading-screen .loading-progress-bar {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, #00f5ff 0%, #0061ff 50%, #003366 100%);
        border-radius: 100px;
        transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 0 20px rgba(0, 245, 255, 0.8);
        position: relative;
        overflow: hidden;
    }

    #digiflow-loading-screen .loading-progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        animation: loadingShine 2s ease-in-out infinite;
    }

    @keyframes loadingShine {
        0% {
            left: -100%;
        }
        50%, 100% {
            left: 200%;
        }
    }

    /* Percentage Text */
    #digiflow-loading-screen .loading-percentage-text {
        font-size: 1rem;
        color: #94a3b8;
        font-weight: 600;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        letter-spacing: 0.05em;
    }

    /* Background Effects */
    #digiflow-loading-screen .loading-bg-circle {
        position: absolute;
        border-radius: 50%;
        opacity: 0.15;
        animation: loadingPulse 6s ease-in-out infinite;
        pointer-events: none;
        filter: blur(60px);
    }

    #digiflow-loading-screen .loading-circle-1 {
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, #00f5ff, transparent);
        top: -10%;
        left: -5%;
        animation-delay: 0s;
    }

    #digiflow-loading-screen .loading-circle-2 {
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, #0061ff, transparent);
        bottom: -15%;
        right: -10%;
        animation-delay: 2s;
    }

    #digiflow-loading-screen .loading-circle-3 {
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, #003366, transparent);
        top: 50%;
        left: 60%;
        animation-delay: 4s;
    }

    @keyframes loadingPulse {
        0%, 100% {
            transform: scale(1) translate(0, 0);
            opacity: 0.1;
        }
        33% {
            transform: scale(1.2) translate(20px, -20px);
            opacity: 0.2;
        }
        66% {
            transform: scale(0.9) translate(-20px, 20px);
            opacity: 0.15;
        }
    }

    #digiflow-loading-screen .loading-particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(0, 245, 255, 0.6);
        border-radius: 50%;
        animation: loadingParticleFloat 8s ease-in-out infinite;
        pointer-events: none;
    }

    #digiflow-loading-screen .loading-particle:nth-child(4) {
        top: 20%;
        left: 15%;
        animation-delay: 0s;
    }

    #digiflow-loading-screen .loading-particle:nth-child(5) {
        top: 70%;
        left: 80%;
        animation-delay: 2s;
    }

    #digiflow-loading-screen .loading-particle:nth-child(6) {
        top: 40%;
        left: 90%;
        animation-delay: 4s;
    }

    #digiflow-loading-screen .loading-particle:nth-child(7) {
        top: 80%;
        left: 20%;
        animation-delay: 6s;
    }

    @keyframes loadingParticleFloat {
        0%, 100% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100px) translateX(50px);
            opacity: 0;
        }
    }

    /* Fade out animation */
    #digiflow-loading-screen.loading-fade-out {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
    }

    /* Prevent body scroll while loading */
    body.loading-active {
        overflow: hidden !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        #digiflow-loading-screen .loading-logo-image {
            width: 100px;
            height: 100px;
        }

        #digiflow-loading-screen .loading-logo-container::before {
            width: 140px;
            height: 140px;
        }

        #digiflow-loading-screen .loading-brand-name {
            font-size: 2.5rem;
        }

        #digiflow-loading-screen .loading-text {
            font-size: 1rem;
            padding: 0 1rem;
        }

        #digiflow-loading-screen .loading-progress-container {
            width: 280px;
        }

        #digiflow-loading-screen .loading-bg-circle {
            filter: blur(40px);
        }
    }

    @media (max-width: 480px) {
        #digiflow-loading-screen .loading-logo-image {
            width: 80px;
            height: 80px;
        }

        #digiflow-loading-screen .loading-logo-container::before {
            width: 120px;
            height: 120px;
        }

        #digiflow-loading-screen .loading-brand-name {
            font-size: 2rem;
        }

        #digiflow-loading-screen .loading-progress-container {
            width: 240px;
        }
    }
</style>

<!-- Loading Screen HTML -->
<div id="digiflow-loading-screen">
    <!-- Background Effects -->
    <div class="loading-bg-circle loading-circle-1"></div>
    <div class="loading-bg-circle loading-circle-2"></div>
    <div class="loading-bg-circle loading-circle-3"></div>
    
    <div class="loading-particle"></div>
    <div class="loading-particle"></div>
    <div class="loading-particle"></div>
    <div class="loading-particle"></div>

    <!-- Logo -->
    <div class="loading-logo-container">
        <img 
            src="Untitled design (2).png" 
            alt="DigiFlow Logo" 
            class="loading-logo-image"
            id="digiflowLogoImage"
        >
    </div>

    <!-- Brand Name -->
    <h1 class="loading-brand-name">DigiFlow</h1>

    <!-- Loading Animation -->
    <div class="loading-animation">
        <div class="loading-dot"></div>
        <div class="loading-dot"></div>
        <div class="loading-dot"></div>
    </div>

    <!-- Loading Text -->
    <p class="loading-text">Loading your experience...</p>

    <!-- Progress Bar -->
    <div class="loading-progress-container">
        <div class="loading-progress-bar" id="digiflowProgressBar"></div>
    </div>

    <!-- Percentage Text -->
    <p class="loading-percentage-text" id="digiflowPercentageText">0%</p>
</div>

<!-- Loading Screen JavaScript -->
<script id="loading-screen-script">
(function() {
    'use strict';
    
    function initDigiFlowLoader() {
        const loadingScreen = document.getElementById('digiflow-loading-screen');
        const progressBar = document.getElementById('digiflowProgressBar');
        const percentageText = document.getElementById('digiflowPercentageText');
        
        
        
        let progress = 0;
        const targetProgress = 100;
        const loadingTime = 2500;
        const updateInterval = 30;
        
        document.body.classList.add('loading-active');
        
        const progressInterval = setInterval(function() {
            progress += (targetProgress / (loadingTime / updateInterval));
            
            if (progress >= targetProgress) {
                progress = targetProgress;
                clearInterval(progressInterval);
                
                document.body.classList.remove('loading-active');
                
                setTimeout(function() {
                    loadingScreen.classList.add('loading-fade-out');
                    
                    setTimeout(function() {
                        if (loadingScreen.parentNode) {
                            loadingScreen.parentNode.removeChild(loadingScreen);
                        }
                        const styles = document.getElementById('loading-screen-styles');
                        if (styles && styles.parentNode) {
                            styles.parentNode.removeChild(styles);
                        }
                        const script = document.getElementById('loading-screen-script');
                        if (script && script.parentNode) {
                            script.parentNode.removeChild(script);
                        }
                    }, 500);
                }, 200);
            }
            
            updateProgress(progress);
        }, updateInterval);
        
        function updateProgress(value) {
            const roundedValue = Math.round(value);
            progressBar.style.width = roundedValue + '%';
            percentageText.textContent = roundedValue + '%';
        }
    }
    
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDigiFlowLoader);
    } else {
        initDigiFlowLoader();
    }
})();
</script>
