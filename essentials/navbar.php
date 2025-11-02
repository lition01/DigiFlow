<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - QuolyGames</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        

        /* Animated background particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: rgba(0, 245, 255, 0.3);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        .navbar-container {
            position: relative;
            z-index: 100;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 245, 255, 0.15);
            padding: 16px 24px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: fit-content;
            margin: 30px auto 0;
            gap: 32px;
            box-shadow: 0 4px 35px rgba(0, 245, 255, 0.2);
            opacity: 0;
            transform: translateY(-30px);
            animation: slideDown 2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
            animation-delay: 3000ms;
        }

        @keyframes slideDown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar:hover {
            box-shadow: 0 4px 75px rgba(0, 245, 255, 0.3);
            border-color: rgba(0, 245, 255, 0.25);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: rgba(0, 245, 255, 0.1);
            border: 2px solid rgba(0, 245, 255, 0.3);
            border-radius: 50%;
            font-size: 32px;
            color: #00f5ff;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: logoSlide 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.2s backwards;
        }

        @keyframes logoSlide {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .logo-link:hover {
            transform: scale(1.15);
            background: rgba(0, 245, 255, 0.2);
            border-color: rgba(0, 245, 255, 0.5);
        }

        .logo-link:active {
            transform: scale(1.05) rotate(2deg);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
            list-style: none;
        }

        .nav-item {
            color: #e7d6d6;
            text-decoration: none;
            font-size: 22px;
            font-weight: 400;
            padding: 10px 16px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            cursor: pointer;
            opacity: 0;
            transform: translateY(-20px);
            animation: navSlide 0.5s ease forwards;
        }

        @keyframes navSlide {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-item:hover {
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #00f5ff;
            transform: translateY(-2px);
        }
         .nav-item.active {
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
            color: #00f5ff;
            transform: translateY(-2px);
        }

       

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            cursor: pointer;
            user-select: none;
        }

        .dropdown-icon {
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .dropdown-icon {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-10px);
            background: rgba(3, 29, 30, 0.95);
            backdrop-filter: blur(30px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 15px;
            padding: 15px 0;
            min-width: 250px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            list-style: none;
            margin-top: 10px;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            color: #e7d6d6;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            transition: all 0.3s ease;
            width: 100%;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(0, 245, 255, 0.15) 0%, rgba(59, 130, 246, 0.15) 100%);
            color: #00f5ff;
            transform: translateX(5px);
            padding-left: 25px;
        }

        .login-btn {
            background: linear-gradient(135deg, #00f5ff 0%, #0061ff 100%);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateX(30px);
            animation: btnSlide 0.6s ease forwards;
            
        }

        @keyframes btnSlide {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .login-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .login-btn:hover::before {
            left: 100%;
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #0061ff 0%, #003366 100%);
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 245, 255, 0.4);
        }

        .login-icon {
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .login-btn:hover .login-icon {
            transform: rotate(10deg) scale(1.1);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #00f5ff;
            font-size: 24px;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .mobile-menu-toggle:hover {
            background: rgba(0, 245, 255, 0.1);
            transform: scale(1.1);
        }

        .mobile-menu-toggle:active {
            transform: scale(0.95);
        }
        .trail-particle {
    position: fixed;
    pointer-events: none;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(0,255,255,1), rgba(0,255,255,0));
    animation: fadeOut 1s ease-out forwards;
    mix-blend-mode: screen;
}

@keyframes fadeOut {
    0% { transform: scale(1); opacity: 1; }
    100% { transform: scale(3); opacity: 0; }
}


        /* Mobile Responsive */
        @media (max-width: 768px) {
            .navbar {
                max-width: 95%;
                padding: 16px 24px;
                border-radius: 25px;
                gap: 20px;
            }

            .logo-link {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(2, 0, 18, 0.98);
                backdrop-filter: blur(30px);
                border: 1px solid rgba(0, 245, 255, 0.2);
                border-radius: 20px;
                margin-top: 15px;
                padding: 25px 20px;
                flex-direction: column;
                gap: 0;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
                z-index: 1000;
                animation: slideDownMobile 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .nav-menu.mobile-open {
                display: flex;
            }

            .nav-menu li {
                width: 100%;
                margin-bottom: 8px;
            }

            .nav-item {
                width: 100%;
                padding: 16px 20px;
                font-size: 18px;
                font-weight: 500;
                text-align: center;
                border-radius: 12px;
                justify-content: center;
                opacity: 1;
                transform: none;
                animation: none;
                border: 1px solid transparent;
            }

            .nav-item:hover {
                background: linear-gradient(135deg, rgba(0, 245, 255, 0.15) 0%, rgba(59, 130, 246, 0.15) 100%);
                border-color: rgba(0, 245, 255, 0.3);
                color: #ffffff;
            }

            .dropdown-menu {
                position: static;
                transform: none;
                opacity: 0;
                visibility: hidden;
                background: rgba(0, 245, 255, 0.05);
                border: 1px solid rgba(0, 245, 255, 0.1);
                margin: 8px 0 0 0;
                box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                max-height: 0;
                overflow: hidden;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                padding: 0;
            }

            .dropdown.mobile-open .dropdown-menu {
                opacity: 1;
                visibility: visible;
                max-height: 200px;
                padding: 10px 0;
            }

            .dropdown.mobile-open .dropdown-icon {
                transform: rotate(180deg);
            }

            .dropdown-item {
                padding: 12px 20px;
                font-size: 16px;
                text-align: center;
                color: rgba(231, 214, 214, 0.9);
                border-radius: 8px;
                margin: 2px 10px;
                justify-content: center;
            }

            .dropdown-item:hover {
                padding-left: 20px;
                background: linear-gradient(135deg, rgba(0, 245, 255, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
                color: #00f5ff;
                transform: scale(1.02);
            }

            .login-btn {
                display: none;
                opacity: 1;
                transform: none;
                animation: none;
            }

            .mobile-menu-toggle {
                display: block;
            }

            @keyframes slideDownMobile {
                0% {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        }

        @media (max-width: 480px) {
            .navbar {
                margin: 10px auto 0;
                padding: 12px 18px;
                gap: 15px;
            }

            .logo-link {
                width: 50px;
                height: 50px;
                font-size: 22px;
            }

            .mobile-menu-toggle {
                font-size: 22px;
                padding: 6px;
            }

            .nav-menu {
                padding: 20px 15px;
                margin-top: 12px;
            }

            .nav-item {
                padding: 14px 16px;
                font-size: 16px;
            }

            .dropdown-item {
                font-size: 15px;
                padding: 10px 16px;
            }
        }

        /* Content area */
        .content {
            position: relative;
            z-index: 2;
            padding: 60px 20px;
            text-align: center;
        }

        .content h1 {
            color: #00f5ff;
            font-size: 56px;
            margin-bottom: 20px;
            text-shadow: 0 0 20px rgba(0, 245, 255, 0.3);
        }

        .content p {
            color: #e7d6d6;
            font-size: 20px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Animated background particles -->
    <div class="particles" id="particles"></div>

    <!-- Navbar Container -->
    <div class="navbar-container">
        <nav class="navbar" id="navbar">
            <!-- Logo -->
            <div class="logo">
                <img src="Untitled design (2).png" class="logo-link" alt="sorry">
            </div>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-item active">Home</a></li>
                <li><a href="#portfolio" class="nav-item">Portfolio</a></li>
                <li><a href="#about" class="nav-item">About Us</a></li>
                <li><a href="#contact" class="nav-item">Contact Us</a></li>
                
               
                
            </ul>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Login Button -->
                </nav>
    </div>

    

    <script>
        const particles = [];
const MAX_PARTICLES = 100;

document.addEventListener("mousemove", (e) => {
    createParticle(e.clientX, e.clientY);
});

function createParticle(x, y) {
    const particle = document.createElement("div");
    particle.className = "trail-particle";
    particle.style.left = x + "px";
    particle.style.top = y + "px";

    const size = Math.random() * 8 + 3;
    particle.style.width = size + "px";
    particle.style.height = size + "px";

    document.body.appendChild(particle);
    particles.push(particle);

    setTimeout(() => {
        particle.remove();
        particles.shift();
    }, 1000);
}

        // Mobile Menu Toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('mobile-open');
            
            const icon = this.querySelector('i');
            if (navMenu.classList.contains('mobile-open')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Mobile dropdown toggle
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 768) {
                const dropdown = event.target.closest('.dropdown');
                const dropdownToggle = event.target.closest('.dropdown-toggle');
                
                if (dropdown && dropdownToggle) {
                    event.preventDefault();
                    event.stopPropagation();
                    
                    document.querySelectorAll('.dropdown').forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('mobile-open');
                        }
                    });
                    
                    dropdown.classList.toggle('mobile-open');
                }
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navMenu.contains(event.target);
            const isClickOnToggle = mobileToggle.contains(event.target);
            
            if (!isClickInsideNav && !isClickOnToggle && navMenu.classList.contains('mobile-open')) {
                navMenu.classList.remove('mobile-open');
                
                const icon = mobileToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    dropdown.classList.remove('mobile-open');
                });
            }
        });

        // Initialize
        createParticles();
    </script>
</body>
</html>
