<!-- Portfolio Section -->
<style>
.portfolio-section {
    padding: 6rem 2rem;
    
    position: relative;
}

.portfolio-container {
    max-width: 1200px;
    margin: 0 auto;
}

.portfolio-header {
    text-align: center;
    margin-bottom: 4rem;
}

.portfolio-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
}

.portfolio-title span {
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.portfolio-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.7);
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
}

.portfolio-card {
    background: linear-gradient(135deg, rgba(0, 245, 255, 0.05) 0%, rgba(0, 97, 255, 0.05) 100%);
    border: 1px solid rgba(0, 245, 255, 0.2);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    cursor: pointer;
}

.portfolio-card:hover {
    transform: translateY(-10px);
    border-color: rgba(0, 245, 255, 0.5);
    box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
}

.portfolio-image {
    width: 100%;
    height: 250px;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    position: relative;
    overflow: hidden;
}

.portfolio-image::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.portfolio-card:hover .portfolio-image::before {
    transform: translateX(100%);
}

.portfolio-content {
    padding: 2rem;
}

.portfolio-category {
    display: inline-block;
    padding: 0.4rem 1rem;
    background: rgba(0, 245, 255, 0.1);
    color: #00f5ff;
    font-size: 0.85rem;
    font-weight: 600;
    border-radius: 20px;
    margin-bottom: 1rem;
}

.portfolio-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 0.8rem;
}

.portfolio-description {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .portfolio-section {
        padding: 4rem 1rem;
    }
    
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="portfolio-section">
    <div class="portfolio-container">
        <div class="portfolio-header">
            <h2 class="portfolio-title">Our <span>Recent Work</span></h2>
            <p class="portfolio-subtitle">Showcasing excellence in digital craftsmanship</p>
        </div>
        
        <div class="portfolio-grid">
            <div class="portfolio-card">
                <div class="portfolio-image">🚀</div>
                <div class="portfolio-content">
                    <span class="portfolio-category">E-Commerce</span>
                    <h3 class="portfolio-name">TechStore Platform</h3>
                    <p class="portfolio-description">A modern e-commerce solution with seamless checkout and inventory management.</p>
                </div>
            </div>
            
            <div class="portfolio-card">
                <div class="portfolio-image">💼</div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Dashboard</span>
                    <h3 class="portfolio-name">Analytics Pro</h3>
                    <p class="portfolio-description">Real-time analytics dashboard with advanced data visualization and reporting.</p>
                </div>
            </div>
            
            <div class="portfolio-card">
                <div class="portfolio-image">🎯</div>
                <div class="portfolio-content">
                    <span class="portfolio-category">Branding</span>
                    <h3 class="portfolio-name">StartUp Identity</h3>
                    <p class="portfolio-description">Complete brand identity package including logo, colors, and style guide.</p>
                </div>
            </div>
        </div>
    </div>
</section>
