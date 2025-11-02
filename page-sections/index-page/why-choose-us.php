<!-- Why Choose Us Section -->
<style>
.why-section {
    padding: 6rem 2rem;
    position: relative;
}

.why-container {
    max-width: 1200px;
    margin: 0 auto;
}

.why-header {
    text-align: center;
    margin-bottom: 4rem;
}

.why-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
}

.why-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.7);
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.why-item {
    text-align: center;
    padding: 2rem;
    background: rgba(0, 245, 255, 0.03);
    border-radius: 15px;
    border: 1px solid rgba(0, 245, 255, 0.1);
    transition: all 0.3s ease;
}

.why-item:hover {
    background: rgba(0, 245, 255, 0.08);
    border-color: rgba(0, 245, 255, 0.3);
    transform: translateY(-5px);
}

.why-number {
    font-size: 3rem;
    font-weight: 800;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
}

.why-item-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 0.8rem;
}

.why-item-description {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .why-section {
        padding: 4rem 1rem;
    }
    
    .why-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="why-section">
    <div class="why-container">
        <div class="why-header">
            <h2 class="why-title">Why Clients Choose Us</h2>
            <p class="why-subtitle">Excellence in every project we deliver</p>
        </div>
        
        <div class="why-grid">
            <div class="why-item">
                <div class="why-number">01</div>
                <h3 class="why-item-title">Expert Team</h3>
                <p class="why-item-description">Skilled professionals with years of experience in cutting-edge technologies</p>
            </div>
            
            <div class="why-item">
                <div class="why-number">02</div>
                <h3 class="why-item-title">Fast Delivery</h3>
                <p class="why-item-description">Quick turnaround times without compromising on quality or attention to detail</p>
            </div>
            
            <div class="why-item">
                <div class="why-number">03</div>
                <h3 class="why-item-title">24/7 Support</h3>
                <p class="why-item-description">Round-the-clock assistance to ensure your project runs smoothly</p>
            </div>
            
            <div class="why-item">
                <div class="why-number">04</div>
                <h3 class="why-item-title">Affordable Pricing</h3>
                <p class="why-item-description">Competitive rates that deliver exceptional value for your investment</p>
            </div>
        </div>
    </div>
</section>
