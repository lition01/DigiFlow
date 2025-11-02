<!-- Services Section -->
<style>
.services-section {
    padding: 6rem 2rem;
    
    position: relative;
}

.services-container {
    max-width: 1200px;
    margin: 0 auto;
}

.services-header {
    text-align: center;
    margin-bottom: 4rem;
}

.services-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
}

.services-title span {
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.services-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.7);
    max-width: 600px;
    margin: 0 auto;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.service-card {
    background: linear-gradient(135deg, rgba(0, 245, 255, 0.05) 0%, rgba(0, 97, 255, 0.05) 100%);
    border: 1px solid rgba(0, 245, 255, 0.2);
    border-radius: 20px;
    padding: 2.5rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(0, 97, 255, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.service-card:hover::before {
    opacity: 1;
}

.service-card:hover {
    transform: translateY(-10px);
    border-color: rgba(0, 245, 255, 0.5);
    box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
}

.service-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    position: relative;
    z-index: 1;
}

.service-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.service-description {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.6;
    position: relative;
    z-index: 1;
}

@media (max-width: 768px) {
    .services-section {
        padding: 4rem 1rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="services-section">
    <div class="services-container">
        <div class="services-header">
            <h2 class="services-title">Our <span>Core Services</span></h2>
            <p class="services-subtitle">Comprehensive digital solutions tailored to elevate your business</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3 class="service-name">Website Development</h3>
                <p class="service-description">Custom-built, responsive websites that captivate your audience and drive conversions with cutting-edge technology.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3 class="service-name">Dashboard Solutions</h3>
                <p class="service-description">Powerful, intuitive dashboards that transform complex data into actionable insights for better decision-making.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3 class="service-name">Logo Design</h3>
                <p class="service-description">Memorable brand identities that tell your story and make a lasting impression on your target audience.</p>
            </div>
        </div>
    </div>
</section>
