<!-- Testimonials Section -->
<style>
.testimonials-section {
    padding: 6rem 2rem;
    position: relative;
    overflow: hidden;
}

.testimonials-section::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(0, 245, 255, 0.05) 0%, transparent 70%);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.testimonials-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.testimonials-header {
    text-align: center;
    margin-bottom: 4rem;
}

.testimonials-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 1rem;
}

.testimonials-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.7);
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.testimonial-card {
    background: rgba(0, 245, 255, 0.03);
    border: 1px solid rgba(0, 245, 255, 0.2);
    border-radius: 20px;
    padding: 2.5rem;
    transition: all 0.3s ease;
    position: relative;
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    top: 1rem;
    left: 1.5rem;
    font-size: 5rem;
    color: rgba(0, 245, 255, 0.2);
    font-family: Georgia, serif;
    line-height: 1;
}

.testimonial-card:hover {
    background: rgba(0, 245, 255, 0.08);
    border-color: rgba(0, 245, 255, 0.4);
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 245, 255, 0.15);
}

.testimonial-text {
    font-size: 1.05rem;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin-bottom: 2rem;
    position: relative;
    z-index: 1;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.testimonial-avatar {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 600;
    color: #fff;
}

.testimonial-info {
    flex: 1;
}

.testimonial-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 0.3rem;
}

.testimonial-role {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.6);
}

.testimonial-rating {
    display: flex;
    gap: 0.3rem;
    margin-top: 0.5rem;
}

.star {
    color: #00f5ff;
    font-size: 1rem;
}

@media (max-width: 768px) {
    .testimonials-section {
        padding: 4rem 1rem;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">What Our Clients Say</h2>
            <p class="testimonials-subtitle">Real feedback from satisfied customers</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">Working with this team was an absolute pleasure. They delivered our e-commerce platform ahead of schedule and exceeded all expectations. Highly recommended!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">JD</div>
                    <div class="testimonial-info">
                        <div class="testimonial-name">John Davis</div>
                        <div class="testimonial-role">CEO, TechStore</div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-text">The dashboard they created transformed how we analyze our data. The interface is intuitive and the insights are invaluable. Outstanding work!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SM</div>
                    <div class="testimonial-info">
                        <div class="testimonial-name">Sarah Martinez</div>
                        <div class="testimonial-role">Director, Analytics Pro</div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-text">Our new brand identity perfectly captures our vision. The logo design process was collaborative and the final result is stunning. Thank you!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">MK</div>
                    <div class="testimonial-info">
                        <div class="testimonial-name">Michael Kim</div>
                        <div class="testimonial-role">Founder, StartUp Inc</div>
                        <div class="testimonial-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
