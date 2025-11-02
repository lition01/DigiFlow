<?php
// background.php
// Ky file kthen vetëm stilin për background-in — përfshihet brenda <head> të index.php
?>
<style>
  :root{
    --bg-dark:#071024;
    --accent1:#3b82f6; /* blu */
    --accent2:#00f5ff; /* cyanish */
    --glow: 0 30px 60px rgba(59,130,246,0.12);
  }

  /* siguro që body të mbulojë ekranin */
  html,body{
    height:100%;
    margin:0;
    padding:0;
    background: var(--bg-dark);
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  }

  /* Shtresat e background-it (dy "ngjyra të mëdha" që lëvizin + pattern i lehtë) */
  body::before,
  body::after{
    content: "";
    position: fixed;
    inset: 0; /* top:0; right:0; bottom:0; left:0; */
    pointer-events: none;
    z-index: -1;
  }

  /* Ngjyra e butë dhe e zbardhur (forma e madhe majtas) */
  body::before{
    background: radial-gradient(600px 400px at 10% 20%, rgba(59,130,246,0.18), transparent 20%),
                radial-gradient(500px 350px at 85% 80%, rgba(0,245,255,0.12), transparent 20%);
    filter: blur(60px);
    transform: translate3d(0,0,0);
    animation: floatLeft 18s ease-in-out infinite alternate;
    mix-blend-mode: screen;
  }

  /* Një shtresë e dytë me lëvizje të ngadaltë dhe gradient bazë */
  body::after{
    background:
      linear-gradient(120deg, rgba(7,16,36,0.9), rgba(7,10,20,0.85));
    opacity: 1;
  }

  /* Shtojmë një pattern të lehtë (stripes) me blend për një efekt "teksture" */
  .bg-texture{
    position: fixed;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    background-image: repeating-linear-gradient(
      45deg,
      rgba(255,255,255,0.012) 0px,
      rgba(255,255,255,0.012) 1px,
      transparent 1px,
      transparent 8px
    );
    mix-blend-mode: overlay;
    opacity: 0.5;
    transform: translateZ(0);
  }

  /* Efekt llambaje/glow rreth butonave ose kartelave kur duash (opsionale) */
  .bg-glow {
    position: fixed;
    inset: 0;
    z-index: -2;
    pointer-events: none;
    box-shadow: var(--glow);
  }

  /* Animacion i butë për lëvizjen e radials */
  @keyframes floatLeft {
    0%   { transform: translate3d(-4%, -2%, 0) scale(1); }
    50%  { transform: translate3d(4%, 2%, 0)  scale(1.04); }
    100% { transform: translate3d(-4%, -2%, 0) scale(1); }
  }

  /* Opsionale: në pajisje të vogla ul pak blur-in dhe intensitetin */
  @media (max-width:768px){
    body::before{ filter: blur(40px); }
    .bg-texture{ opacity: 0.25; }
  }
</style>
