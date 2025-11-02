<!-- Hero Section -->
<style>
.hero-section {
    min-height: 100vh;
   
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    width: 500px;
    height: 500px;
    
    border-radius: 50%;
    top: -250px;
    right: -250px;
    animation: hero-pulse 4s ease-in-out infinite;
}

.hero-section::after {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    bottom: -200px;
    left: -200px;
    animation: hero-pulse 4s ease-in-out infinite 2s;
}

.hero-container {
    max-width: 1200px;
    width: 100%;
    text-align: center;
    position: relative;
    z-index: 1;
}

.hero-title {
    font-size: clamp(2.2rem, 6vw, 4rem);
    font-weight: 800;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1.2rem;
    line-height: 1.2;
    animation: hero-fade-in 1s ease-out, glowPulse 3s ease-in-out infinite;
    text-shadow: 0 0 12px rgba(0, 245, 255, 0.2);
}

.hero-subtitle {
    font-size: clamp(1rem, 2.5vw, 1.2rem);
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 2.5rem;
    max-width: 650px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
    animation: hero-fade-in 1s ease-out 0.2s backwards;
    text-shadow: 0 0 8px rgba(0, 245, 255, 0.15);
}


.hero-btn {
    display: inline-block;
    padding: 1.2rem 3rem;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    color: #fff;
    font-size: 1.1rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(0, 245, 255, 0.3);
    animation: hero-fade-in 1s ease-out 0.4s backwards;
    position: relative;
    overflow: hidden;
}

.hero-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s ease;
}

.hero-btn:hover::before {
    left: 100%;
}

.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 245, 255, 0.5);
}
@keyframes glowPulse {
    0% { text-shadow: 0 0 8px rgba(0, 245, 255, 0.25); }
    50% { text-shadow: 0 0 18px rgba(0, 245, 255, 0.5); }
    100% { text-shadow: 0 0 8px rgba(0, 245, 255, 0.25); }
}


@keyframes hero-pulse {
    0%, 100% {
        transform: scale(1);
        opacity: 0.5;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.8;
    }
}

@keyframes hero-fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .hero-section {
        padding: 1rem;
    }
    
    .hero-btn {
        padding: 1rem 2rem;
        font-size: 1rem;
    }
}
</style>

<section class="hero-section">
    <div class="hero-container">
        <h1 class="hero-title">Transform Your Digital Presence</h1>
        <p class="hero-subtitle">We create stunning websites, powerful dashboards, and memorable brand identities that drive results for your business.</p>
        <a href="#contact" class="hero-btn">Work Now</a>
    </div>
</section>
