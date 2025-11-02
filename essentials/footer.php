<?php
/**
 * DigiFlow Footer Component
 * Include this file in your index.php or any page where you want the footer
 * Usage: <?php include 'footer.php'; ?>
 */
?>

<style>
    /* FOOTER STYLES */
    .footer {
        background: none;
        border-top: 1px solid rgba(59, 130, 246, 0.3);
        position: relative;
        overflow: hidden;
        z-index: 20;
        /* Initial state for animation - removed transition-delay from here */
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .footer.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.5), transparent);
    }

    .footer-container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 0 30px;
    }

    .footer-middle {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }

    .footer-bottom {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid rgba(59, 130, 246, 0.2);
        padding-top: 2rem;
        margin-top: 3rem;
    }

    .footer-logo-section {
        margin-bottom: 40px;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .footer.animate-in .footer-logo-section {
        opacity: 1;
        transform: translateY(0);
    }

    .footer-logo {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .logo-placeholder {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(0, 245, 255, 0.3) 0%, rgba(59, 130, 246, 0.2) 100%);
        border: 1px solid rgba(59, 130, 246, 0.4);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: rgba(59, 130, 246, 0.9);
        transition: all 0.3s ease;
        overflow: hidden;
        flex-shrink: 0;
        text-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
    }

    .logo-placeholder img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 12px;
        transition: all 0.3s ease;
        padding: 10px;
    }

    .logo-placeholder:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        border-color: rgba(59, 130, 246, 0.6);
    }

    .logo-placeholder:hover img {
        transform: scale(1.1);
    }

    .logo-text {
        font-size: 1.8rem;
        font-weight: 600;
        background: linear-gradient(135deg, #ffffff 0%, rgba(59, 130, 246, 0.9) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
    }

    .footer-description {
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.6;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    /* Staggered animation for footer middle sections - removed base transition-delay */
    .footer-middle > div {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Staggered delays only apply when animate-in class is added */
    .footer.animate-in .footer-middle > div:nth-child(1) {
        transition-delay: 0.2s;
    }

    .footer.animate-in .footer-middle > div:nth-child(2) {
        transition-delay: 0.4s;
    }

    .footer.animate-in .footer-middle > div:nth-child(3) {
        transition-delay: 0.6s;
    }

    .footer.animate-in .footer-middle > div:nth-child(4) {
        transition-delay: 0.8s;
    }

    .footer.animate-in .footer-middle > div {
        opacity: 1;
        transform: translateY(0);
    }

    .nav-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 1rem;
        position: relative;
        text-shadow: 0 0 10px rgba(59, 130, 246, 0.2);
    }

    .nav-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 30px;
        height: 2px;
        background: linear-gradient(90deg, rgba(59, 130, 246, 0.8), rgba(0, 245, 255, 0.6));
        border-radius: 1px;
        box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
    }

    .nav-links {
        list-style: none;
        padding: 0;
        padding-top: 10px;
    }

    .nav-links li {
        margin-bottom: 0.8rem;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.6) !important;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        position: relative;
        padding-left: 0;
        display: inline-block;
    }

    .nav-link:hover {
        color: rgba(59, 130, 246, 0.9) !important;
        padding-left: 8px;
        text-shadow: 0 0 8px rgba(59, 130, 246, 0.3);
    }

    .nav-link::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 1px;
        background: linear-gradient(90deg, rgba(59, 130, 246, 0.8), rgba(0, 245, 255, 0.6));
        transition: width 0.3s ease;
        box-shadow: 0 0 3px rgba(59, 130, 246, 0.5);
    }

    .nav-link:hover::before {
        width: 4px;
    }

    .contact-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #ffffff;
        margin-bottom: 1.5rem;
        position: relative;
        text-shadow: 0 0 10px rgba(59, 130, 246, 0.2);
    }

    .contact-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 30px;
        height: 2px;
        background: linear-gradient(90deg, rgba(59, 130, 246, 0.8), rgba(0, 245, 255, 0.6));
        border-radius: 1px;
        box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .contact-icon {
        width: 20px;
        height: 20px;
        background: rgba(59, 130, 246, 0.2);
        border: 1px solid rgba(59, 130, 246, 0.3);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        color: rgba(59, 130, 246, 0.9);
        flex-shrink: 0;
        box-shadow: 0 0 5px rgba(59, 130, 246, 0.2);
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1.8rem;
        flex-wrap: wrap;
    }

    .social-link {
        width: 40px;
        height: 40px;
        background: rgba(59, 130, 246, 0.1);
        border: 1px solid rgba(59, 130, 246, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
        box-shadow: 0 0 5px rgba(59, 130, 246, 0.1);
    }

    .social-link:hover {
        background: rgba(59, 130, 246, 0.2);
        border-color: rgba(59, 130, 246, 0.4);
        color: rgba(59, 130, 246, 0.9);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        text-shadow: 0 0 8px rgba(59, 130, 246, 0.3);
    }

    .social-link.twitter:hover {
        background: rgba(29, 161, 242, 0.2);
        border-color: rgba(29, 161, 242, 0.3);
        color: #1da1f2;
        box-shadow: 0 4px 15px rgba(29, 161, 242, 0.3);
    }

    .social-link.linkedin:hover {
        background: rgba(0, 119, 181, 0.2);
        border-color: rgba(0, 119, 181, 0.3);
        color: #0077b5;
        box-shadow: 0 4px 15px rgba(0, 119, 181, 0.3);
    }

    .social-link.github:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.2);
        color: #ffffff;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
    }

    .social-link.instagram:hover {
        background: linear-gradient(45deg, rgba(225, 48, 108, 0.2), rgba(255, 220, 128, 0.2));
        border-color: rgba(225, 48, 108, 0.3);
        color: #e1306c;
        box-shadow: 0 4px 15px rgba(225, 48, 108, 0.3);
    }

    /* Footer bottom animation - removed base transition-delay */
    .footer-bottom {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .footer.animate-in .footer-bottom {
        opacity: 1;
        transform: translateY(0);
        transition-delay: 1s;
    }

    .copyright {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    .footer-links {
        display: flex;
        gap: 2rem;
    }

    .footer-bottom-link {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .footer-bottom-link:hover {
        color: rgba(59, 130, 246, 0.9);
        text-shadow: 0 0 8px rgba(59, 130, 246, 0.3);
    }

    @media (max-width: 768px) {
        .footer {
            padding: 40px 0 20px;
        }
        .footer-container {
            padding: 40px 0 20px;
        }
        .footer-logo {
            justify-content: center;
            text-align: center;
            margin-bottom: 2rem;
        }
        .footer-description {
            text-align: center;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .nav-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        .contact-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        .social-links {
            justify-content: center;
        }
        .contact-item {
            justify-content: center;
        }
        .footer-links {
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }
        .nav-title,
        .contact-title {
            text-align: center;
        }
        .nav-links {
            text-align: center;
        }
        .footer-bottom {
            flex-direction: column;
            gap: 1rem;
        }
        .footer-bottom .copyright {
            order: 2;
        }
        .footer-bottom .footer-links {
            order: 1;
            width: 100%;
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 576px) {
        .footer {
            padding: 30px 0 15px;
        }
        .footer-container {
            padding: 30px 0 15px;
        }
        .logo-text {
            font-size: 2.5rem;
        }
        .logo-placeholder {
            width: 90px;
            height: 90px;
        }
        .footer-logo {
            flex-direction: column;
            gap: 1.2rem;
        }
        .footer-description {
            font-size: 1.1rem;
            padding: 0 1rem;
        }
        .social-link {
            width: 45px;
            height: 45px;
            font-size: 1.2rem;
        }
        .contact-item {
            font-size: 1rem;
        }
        .footer-bottom-link {
            display: block;
            margin-right: 0;
            margin-bottom: 1rem;
            text-align: center;
            font-size: 1rem;
        }
        .nav-link {
            font-size: 1rem !important;
        }
        .nav-title,
        .contact-title {
            font-size: 1.3rem;
        }
    }
</style>

<!-- Footer Section -->
<footer class="footer" id="digiflow-footer">
    <div class="footer-container">
        <div class="footer-middle">
            <div class="footer-logo-section">
                <div class="footer-logo">
                    <div>
                        <img class="logo-placeholder" src="Untitled design (2).png" alt="DigiFlow Logo">
                    </div>
                    <span class="logo-text">DigiFlow</span>
                </div>
                <p class="footer-description">
                    Empowering the future with <br> cutting-edge AI technology and innovative solutions <br> for developers worldwide.
                </p>
            </div>
            <div class="footer-column">
                <h4 class="nav-title">Navigation</h4>
                <ul class="nav-links">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">Portfolio</a></li>
                    <li><a href="#services" class="nav-link">About US</a></li>
                    <li><a href="#contact" class="nav-link">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="contact-title">Contact</h4>
                <div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <span>jari@quolytech.com</span>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span>Tirana, Albania</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#twitter" class="social-link twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#linkedin" class="social-link linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#github" class="social-link github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#instagram" class="social-link instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>      

        <div class="footer-bottom">
            <p class="copyright">© 2025 DigiFlow. All rights reserved.</p>
            <div class="footer-links">
                <a href="#privacy" class="footer-bottom-link">Privacy Policy</a>
                <a href="#terms" class="footer-bottom-link">Terms of Service</a>
                <a href="#cookies" class="footer-bottom-link">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<script>
(function() {
    'use strict';
    
    function initFooterAnimation() {
        const footer = document.getElementById('digiflow-footer');
        if (!footer) return;
        
        // Check if loading screen exists
        const loadingScreen = document.getElementById('digiflow-loading-screen');
        
        if (loadingScreen) {
            // Loading screen exists, wait for it to complete (3.2 seconds total)
            setTimeout(function() {
                footer.classList.add('animate-in');
            }, 3200);
        } else {
            // No loading screen, animate immediately
            footer.classList.add('animate-in');
        }
    }
    
    function isElementPartiallyInViewport(el) {
        const rect = el.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom >= 0;
    }

    function handleFooterScrollAnimation() {
        const footer = document.getElementById('digiflow-footer');
        if (footer && !footer.classList.contains('animate-in') && isElementPartiallyInViewport(footer)) {
            footer.classList.add('animate-in');
        }
    }

    // Initialize on page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFooterAnimation);
    } else {
        initFooterAnimation();
    }

    // Fallback scroll listener
    window.addEventListener('scroll', handleFooterScrollAnimation);
    window.addEventListener('resize', handleFooterScrollAnimation);
})();
</script>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://kit.fontawesome.com/dfba5e2447.css" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/dfba5e2447.js" crossorigin="anonymous"></script>
