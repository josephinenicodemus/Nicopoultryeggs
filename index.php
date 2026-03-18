<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Nico Poultry & Eggs Ltd - Premium turkey, chicken & fresh eggs supplier in Dar es Salaam, Tanzania. Order fresh poultry products today."/>
  <meta name="keywords" content="turkey supplier, poultry Dar es Salaam, fresh eggs, Nico Poultry, Tanzania poultry, chicken supplier"/>
  <meta name="author" content="Nico Poultry & Eggs Ltd"/>
  <meta name="theme-color" content="#0b5d3b"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;0,800;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <title>Nico Poultry & Eggs Ltd | Premium Turkey & Chicken Supplier Tanzania</title>

  <style>
    :root {
      --forest:       #0b5d3b;
      --forest-deep:  #073d27;
      --forest-mid:   #116845;
      --forest-light: #1a8a5a;
      --gold:         #c9a227;
      --gold-bright:  #e8bb3e;
      --gold-muted:   #a3821a;
      --cream:        #faf7f0;
      --cream-soft:   #f3ede0;
      --dark:         #141410;
      --dark-soft:    #2a2a22;
      --ivory:        #fefcf7;
      --gray:         #5a6475;
      --gray-light:   #8a97a8;
      --white:        #ffffff;

      --g-forest:  linear-gradient(135deg, var(--forest-deep) 0%, var(--forest) 50%, var(--forest-light) 100%);
      --g-gold:    linear-gradient(135deg, var(--gold-muted) 0%, var(--gold) 50%, var(--gold-bright) 100%);
      --g-hero:    linear-gradient(160deg, rgba(7,61,39,0.93) 0%, rgba(11,93,59,0.85) 45%, rgba(0,0,0,0.78) 100%);
      --g-dark:    linear-gradient(135deg, #141410 0%, #2a2a22 100%);

      --sh-sm:   0 2px 12px rgba(0,0,0,0.07);
      --sh-md:   0 8px 30px rgba(0,0,0,0.12);
      --sh-lg:   0 20px 60px rgba(0,0,0,0.18);
      --sh-xl:   0 40px 100px rgba(0,0,0,0.24);
      --sh-glow: 0 0 50px rgba(201,162,39,0.4);
      --sh-card: 0 30px 70px rgba(11,93,59,0.22);

      --r-sm: 8px;  --r-md: 16px;
      --r-lg: 24px; --r-xl: 36px; --r-full: 9999px;

      --ease-out:    cubic-bezier(0.16, 1, 0.3, 1);
      --ease-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
      --ease-smooth: cubic-bezier(0.4, 0, 0.2, 1);
    }

    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }

    html { scroll-behavior: smooth; scroll-padding-top: 96px; font-size: 16px; }

    body {
      font-family: 'DM Sans', system-ui, sans-serif;
      background: var(--ivory);
      color: var(--dark);
      line-height: 1.65;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4 {
      font-family: 'Cormorant Garamond', Georgia, serif;
      line-height: 1.15;
      letter-spacing: -0.01em;
    }

    h1 { font-size: clamp(2.8rem, 7vw, 5.5rem); font-weight: 800; }
    h2 { font-size: clamp(2.2rem, 4.5vw, 4rem); font-weight: 700; }
    h3 { font-size: clamp(1.4rem, 2vw, 1.8rem); font-weight: 600; }
    p  { color: var(--gray); font-size: 1.1rem; line-height: 1.75; margin-bottom: 1rem; }
    a  { color: var(--forest); text-decoration: none; transition: all 300ms var(--ease-smooth); }

    .container { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 2rem; }
    .section    { padding: clamp(90px, 11vw, 140px) 0; position: relative; }

    /* ─── SECTION TITLE ─── */
    .section-title { text-align: center; margin-bottom: 5rem; }
    .section-title .eyebrow {
      display: inline-flex; align-items: center; gap: .6rem;
      font-size: .8rem; font-weight: 700; letter-spacing: 4px;
      text-transform: uppercase; color: var(--gold);
      margin-bottom: 1rem;
    }
    .section-title .eyebrow::before,
    .section-title .eyebrow::after {
      content: ''; display: block; width: 32px; height: 2px;
      background: var(--g-gold); border-radius: var(--r-full);
    }
    .section-title h2 {
      color: var(--dark); margin-bottom: 1.25rem;
      position: relative; display: inline-block;
    }
    .section-title h2::after {
      content: ''; position: absolute;
      bottom: -14px; left: 50%; transform: translateX(-50%);
      width: 70px; height: 4px;
      background: var(--g-gold); border-radius: var(--r-full);
    }
    .section-title p { max-width: 680px; margin: 1.5rem auto 0; font-size: 1.2rem; }

    /* ─── BUTTONS ─── */
    .btn {
      display: inline-flex; align-items: center; justify-content: center;
      gap: .6rem; padding: 1rem 2.5rem;
      font-family: 'DM Sans', sans-serif; font-weight: 700;
      font-size: 1.05rem; letter-spacing: .5px;
      border: none; border-radius: var(--r-full);
      cursor: pointer; position: relative; overflow: hidden;
      transition: all 350ms var(--ease-out);
      box-shadow: var(--sh-md);
    }
    .btn-gold {
      background: var(--g-gold); color: var(--dark-soft);
    }
    .btn-gold:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: var(--sh-lg), var(--sh-glow);
      color: var(--dark);
    }
    .btn-forest {
      background: var(--g-forest); color: var(--white);
    }
    .btn-forest:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: var(--sh-lg), 0 0 50px rgba(11,93,59,0.45);
    }
    .btn-outline {
      background: transparent; border: 2.5px solid var(--gold);
      color: var(--gold); box-shadow: none;
    }
    .btn-outline:hover {
      background: var(--gold); color: var(--dark-soft);
      transform: translateY(-3px);
      box-shadow: var(--sh-md), var(--sh-glow);
    }
    .btn-lg { padding: 1.25rem 3.5rem; font-size: 1.15rem; }
    .btn-xl { padding: 1.5rem 4rem;   font-size: 1.25rem; }

    /* ─── HEADER ─── */
    header {
      position: fixed; top: 0; left: 0; right: 0; z-index: 200;
      background: rgba(254,252,247,0.97);
      backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px);
      border-bottom: 2.5px solid var(--gold);
      box-shadow: 0 4px 30px rgba(0,0,0,0.08);
      transition: all 300ms var(--ease-smooth);
    }
    header.scrolled { box-shadow: 0 6px 40px rgba(0,0,0,0.13); }

    nav {
      display: flex; justify-content: space-between;
      align-items: center; padding: .9rem 2rem;
      max-width: 1440px; margin: 0 auto;
    }

    /* ─── LOGO ─── */
    .logo-wrap {
      display: flex; align-items: center; gap: 1rem;
      text-decoration: none;
    }
    .logo-img-box {
      width: 72px; height: 72px; border-radius: var(--r-full);
      border: 3px solid var(--gold);
      box-shadow: 0 4px 20px rgba(201,162,39,0.35);
      overflow: hidden; flex-shrink: 0;
      transition: all 350ms var(--ease-out);
      background: var(--forest-deep);
      display: flex; align-items: center; justify-content: center;
    }
    .logo-img-box img {
      width: 100%; height: 100%; object-fit: contain;
      display: block;
    }
    .logo-img-box .logo-svg-fallback {
      display: none; /* shown via JS if img fails */
      width: 100%; height: 100%;
      align-items: center; justify-content: center;
      flex-direction: column;
      color: var(--gold); font-family: 'Cormorant Garamond', serif;
      font-weight: 800; font-size: 1.1rem; text-align: center;
      line-height: 1.2;
    }
    .logo-wrap:hover .logo-img-box {
      transform: scale(1.08) rotate(3deg);
      box-shadow: 0 6px 30px rgba(201,162,39,0.5);
    }
    .logo-text-block { display: flex; flex-direction: column; }
    .logo-name {
      font-family: 'Cormorant Garamond', serif;
      font-weight: 800; font-size: 1.3rem; color: var(--forest);
      line-height: 1.1; letter-spacing: .02em;
    }
    .logo-tagline {
      font-size: .72rem; color: var(--gold); font-weight: 600;
      letter-spacing: 2.5px; text-transform: uppercase;
    }

    .nav-links {
      display: flex; align-items: center; gap: .25rem; list-style: none;
    }
    .nav-links a {
      padding: .7rem 1.2rem; font-weight: 600;
      font-size: .98rem; color: var(--dark-soft);
      border-radius: var(--r-sm); position: relative;
      transition: all 200ms;
    }
    .nav-links a::after {
      content: ''; position: absolute;
      bottom: 2px; left: 50%;
      transform: translateX(-50%) scaleX(0);
      width: 65%; height: 2.5px;
      background: var(--g-gold);
      border-radius: var(--r-full);
      transition: transform 250ms var(--ease-out);
      transform-origin: center;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--forest); }
    .nav-links a:hover::after, .nav-links a.active::after { transform: translateX(-50%) scaleX(1); }
    .nav-cta { margin-left: 1rem; }

    .mobile-toggle {
      display: none; flex-direction: column; gap: 5px;
      background: none; border: none; cursor: pointer; padding: .5rem; z-index: 300;
    }
    .mobile-toggle span {
      width: 26px; height: 2.5px;
      background: var(--dark); border-radius: var(--r-full);
      transition: all 300ms var(--ease-smooth);
    }
    .mobile-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(5px,5px); }
    .mobile-toggle.active span:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .mobile-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(5px,-5px); }

    /* ─── HERO ─── */
    .hero {
      min-height: 100vh; display: flex; align-items: center;
      justify-content: center; position: relative; overflow: hidden;
      padding-top: 96px;
      background:
        var(--g-hero),
        url('https://images.unsplash.com/photo-1518492104633-130d0cc84637?auto=format&fit=crop&w=3840&q=95')
        center/cover no-repeat fixed;
    }

    /* Grain overlay for cinematic feel */
    .hero::before {
      content: ''; position: absolute; inset: 0;
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
      pointer-events: none; z-index: 1; opacity: .5;
    }
    .hero::after {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(ellipse 90% 60% at 50% 100%, rgba(11,93,59,0.5) 0%, transparent 65%);
      pointer-events: none; z-index: 1;
    }

    .hero-content {
      position: relative; z-index: 2; text-align: center;
      max-width: 1100px; padding: 2rem 1.5rem;
      animation: heroReveal 1.1s var(--ease-out) both;
    }
    @keyframes heroReveal {
      from { opacity:0; transform: translateY(50px); }
      to   { opacity:1; transform: translateY(0); }
    }

    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: .75rem;
      font-size: .78rem; font-weight: 700; letter-spacing: 4px;
      text-transform: uppercase; color: var(--gold-bright);
      margin-bottom: 1.5rem; animation: heroReveal .9s .1s var(--ease-out) both;
    }
    .hero-eyebrow span { width: 40px; height: 1.5px; background: var(--gold); display: block; }

    .hero h1 {
      color: var(--white); margin-bottom: 1.5rem;
      text-shadow: 0 6px 40px rgba(0,0,0,0.45);
      animation: heroReveal 1s .2s var(--ease-out) both;
    }
    .hero h1 em { font-style: italic; color: var(--gold-bright); }

    .hero p {
      color: rgba(255,255,255,0.9);
      font-size: clamp(1.15rem, 2.2vw, 1.6rem);
      max-width: 820px; margin: 0 auto 2.5rem;
      text-shadow: 0 2px 15px rgba(0,0,0,0.3);
      animation: heroReveal 1s .3s var(--ease-out) both;
    }

    .hero-buttons {
      display: flex; gap: 1.5rem; justify-content: center;
      flex-wrap: wrap; margin-bottom: 4rem;
      animation: heroReveal 1s .4s var(--ease-out) both;
    }

    .hero-stats {
      display: flex; justify-content: center; gap: 2rem;
      flex-wrap: wrap; animation: heroReveal 1s .5s var(--ease-out) both;
    }
    .stat-pill {
      text-align: center; color: var(--white);
      padding: 1.5rem 2rem;
      background: rgba(255,255,255,0.09);
      backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
      border-radius: var(--r-xl);
      border: 1.5px solid rgba(201,162,39,0.3);
      min-width: 140px; transition: all 300ms var(--ease-smooth);
    }
    .stat-pill:hover {
      background: rgba(255,255,255,0.15);
      border-color: rgba(201,162,39,0.6);
      transform: translateY(-4px);
    }
    .stat-num {
      display: block; font-family: 'Cormorant Garamond', serif;
      font-size: 3.2rem; font-weight: 800; color: var(--gold-bright);
      line-height: 1; margin-bottom: .4rem;
    }
    .stat-lbl {
      font-size: .72rem; letter-spacing: 2.5px;
      text-transform: uppercase; opacity: .9; font-weight: 600;
    }

    .scroll-cue {
      position: absolute; bottom: 2.5rem; left: 50%;
      transform: translateX(-50%); z-index: 3;
      display: flex; flex-direction: column;
      align-items: center; gap: .4rem;
      color: rgba(255,255,255,0.7); cursor: pointer;
      animation: float 2.5s ease-in-out infinite;
    }
    @keyframes float {
      0%,100% { transform: translateX(-50%) translateY(0); }
      50%      { transform: translateX(-50%) translateY(-10px); }
    }
    .scroll-cue .scroll-line {
      width: 1.5px; height: 48px;
      background: linear-gradient(to bottom, transparent, var(--gold));
    }
    .scroll-cue span {
      font-size: .68rem; letter-spacing: 3px;
      text-transform: uppercase; font-weight: 600;
    }

    /* ─── PRODUCTS ─── */
    #products { background: var(--ivory); }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
      gap: 2.5rem;
    }
    .product-card {
      background: var(--white);
      border-radius: var(--r-xl); overflow: hidden;
      box-shadow: var(--sh-lg);
      transition: all 500ms var(--ease-out);
      position: relative; display: flex;
      flex-direction: column;
      border: 1.5px solid rgba(201,162,39,0.15);
    }
    .product-card:hover {
      transform: translateY(-16px) scale(1.01);
      box-shadow: var(--sh-xl), var(--sh-card);
      border-color: rgba(201,162,39,0.5);
    }
    .product-card::after {
      content: ''; position: absolute;
      top: 0; left: 0; right: 0; height: 4px;
      background: var(--g-gold);
      transform: scaleX(0); transform-origin: left;
      transition: transform 350ms var(--ease-out);
    }
    .product-card:hover::after { transform: scaleX(1); }

    .product-img {
      position: relative; height: 340px; overflow: hidden;
    }
    .product-img img {
      width: 100%; height: 100%;
      object-fit: cover; object-position: center;
      transition: transform 700ms var(--ease-out);
      transform: scale(1.04);
    }
    .product-card:hover .product-img img { transform: scale(1.14); }

    .product-img-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to top, rgba(7,61,39,0.6) 0%, transparent 50%);
      pointer-events: none;
    }
    .product-badge {
      position: absolute; top: 1.2rem; right: 1.2rem;
      background: var(--g-gold); color: var(--dark);
      padding: .45rem 1.1rem; border-radius: var(--r-full);
      font-size: .72rem; font-weight: 700;
      letter-spacing: 1.5px; text-transform: uppercase;
      box-shadow: var(--sh-md); z-index: 2;
    }

    .product-body { padding: 2rem; flex: 1; display: flex; flex-direction: column; }
    .product-body h3 { color: var(--forest); margin-bottom: .75rem; }
    .product-body p  { flex: 1; margin-bottom: 1.5rem; font-size: 1.05rem; }

    .product-footer {
      display: flex; align-items: center; justify-content: space-between;
      padding-top: 1.5rem; border-top: 1.5px solid var(--cream-soft);
    }
    .price {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.9rem; font-weight: 700; color: var(--forest);
    }
    .price small { font-size: .85rem; color: var(--gray); font-weight: 400; font-family: 'DM Sans', sans-serif; }

    /* ─── PRICING ─── */
    #prices { background: var(--cream); }
    .pricing-card {
      max-width: 1020px; margin: 0 auto;
      background: var(--white); border-radius: var(--r-xl);
      overflow: hidden; box-shadow: var(--sh-xl);
      border: 1.5px solid rgba(201,162,39,0.2);
    }
    .pricing-table { width: 100%; border-collapse: collapse; }
    .pricing-table thead { background: var(--g-forest); }
    .pricing-table th {
      padding: 1.5rem 2rem; text-align: left;
      color: var(--white); font-weight: 700;
      font-size: 1.05rem; letter-spacing: 1px;
      text-transform: uppercase;
    }
    .pricing-table th:last-child { text-align: right; }
    .pricing-table td {
      padding: 1.2rem 2rem; border-bottom: 1px solid var(--cream-soft);
      font-size: 1.1rem; vertical-align: middle;
    }
    .pricing-table td:last-child { text-align: right; }
    .pricing-table tbody tr { transition: background 150ms; }
    .pricing-table tbody tr:hover { background: var(--cream); }
    .pricing-table tbody tr:last-child td { border-bottom: none; }
    .price-big { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--gold-muted); }
    .price-quote { color: var(--forest); font-weight: 600; display: inline-flex; align-items: center; gap: .4rem; }

    /* ─── REVIEWS ─── */
    #reviews { background: var(--ivory); }
    .reviews-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    .review-card {
      background: var(--white); padding: 2.25rem;
      border-radius: var(--r-xl); box-shadow: var(--sh-md);
      position: relative; overflow: hidden;
      transition: all 300ms var(--ease-smooth);
      border-left: 5px solid var(--gold);
    }
    .review-card::before {
      content: '\201C';
      position: absolute; top: 1rem; right: 1.5rem;
      font-size: 7rem; font-family: 'Cormorant Garamond', serif;
      color: var(--gold); opacity: .1; line-height: 1;
      pointer-events: none;
    }
    .review-card:hover { transform: translateY(-8px); box-shadow: var(--sh-lg); }
    .review-text {
      font-style: italic; color: var(--dark-soft);
      font-size: 1.08rem; line-height: 1.75; margin-bottom: 1.5rem;
    }
    .review-author { display: flex; align-items: center; gap: 1rem; }
    .review-avatar {
      width: 52px; height: 52px; border-radius: var(--r-full);
      background: var(--g-forest); color: var(--white);
      display: flex; align-items: center; justify-content: center;
      font-weight: 700; font-size: 1.1rem; flex-shrink: 0;
      border: 3px solid var(--gold);
    }
    .review-meta h4 { margin: 0 0 .2rem; color: var(--forest); font-size: 1.15rem; }
    .review-meta span { font-size: .88rem; color: var(--gray); }
    .stars { margin-left: auto; color: var(--gold); font-size: .95rem; }

    /* ─── LOCATION ─── */
    #location { background: var(--cream); }
    .location-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem; align-items: center;
    }
    @media (max-width: 900px) { .location-grid { grid-template-columns: 1fr; } }

    .map-box {
      border-radius: var(--r-xl); overflow: hidden;
      box-shadow: var(--sh-xl); height: 460px;
      border: 3px solid rgba(201,162,39,0.25);
      transition: border-color 300ms;
    }
    .map-box:hover { border-color: rgba(201,162,39,0.6); }
    .map-box iframe { width: 100%; height: 100%; border: none; filter: saturate(0.85) contrast(1.05); }
    .map-box:hover iframe { filter: none; }

    .location-card {
      background: var(--white); border-radius: var(--r-xl);
      padding: 2.5rem; box-shadow: var(--sh-lg);
    }
    .location-card h3 { color: var(--forest); margin-bottom: 2rem; font-size: 1.8rem; }
    .loc-list { display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2rem; }
    .loc-item { display: flex; align-items: flex-start; gap: 1.1rem; }
    .loc-icon {
      width: 44px; height: 44px; border-radius: var(--r-md);
      background: linear-gradient(135deg, rgba(11,93,59,0.1), rgba(11,93,59,0.05));
      display: flex; align-items: center; justify-content: center;
      color: var(--gold); font-size: 1.2rem; flex-shrink: 0;
    }
    .loc-item strong { display: block; font-weight: 600; color: var(--dark); margin-bottom: .2rem; }
    .loc-item p { margin: 0; font-size: 1rem; }

    /* ─── ORDER FORM ─── */
    #contact { background: var(--ivory); }
    .order-wrap {
      max-width: 780px; margin: 0 auto;
      background: var(--white); border-radius: var(--r-xl);
      padding: 3.5rem; box-shadow: var(--sh-xl);
      border: 1.5px solid rgba(201,162,39,0.18);
      position: relative; overflow: hidden;
    }
    .order-wrap::before {
      content: ''; position: absolute;
      top: 0; left: 0; right: 0; height: 5px;
      background: var(--g-gold);
    }
    .order-form { display: grid; gap: 1.75rem; }

    /* Order preview */
    .order-preview {
      background: linear-gradient(135deg, var(--cream) 0%, var(--white) 100%);
      padding: 1.75rem; border-radius: var(--r-lg); margin-bottom: .5rem;
      border-left: 5px solid var(--forest); box-shadow: var(--sh-sm);
    }
    .order-preview h4 { color: var(--forest); margin-bottom: 1rem; font-size: 1.2rem; }
    .prev-row {
      display: flex; justify-content: space-between;
      padding: .7rem 0; border-bottom: 1px dashed var(--gray-light);
      font-size: 1.05rem;
    }
    .prev-row:last-child {
      border-bottom: none; font-weight: 700;
      color: var(--forest); font-size: 1.25rem;
      margin-top: .5rem; padding-top: 1rem;
    }
    .prev-row.prev-total {
      border-bottom: none; font-weight: 800;
      color: var(--forest); font-size: 1.3rem;
      margin-top: .75rem; padding-top: 1rem;
      border-top: 2px solid var(--forest);
      background: linear-gradient(135deg, rgba(11,93,59,0.06) 0%, rgba(201,162,39,0.06) 100%);
      border-radius: 0 0 var(--r-md) var(--r-md);
      padding: 1rem .75rem .5rem;
      margin: .5rem -.75rem -.25rem;
    }
    .prev-row.prev-total span:last-child {
      color: var(--gold-muted); font-size: 1.4rem;
    }

    .form-row { display: grid; grid-template-columns: 1fr; gap: 1.75rem; }
    @media (min-width: 600px) { .form-row { grid-template-columns: 1fr 1fr; } }

    .form-group { position: relative; }
    .form-label {
      display: block; margin-bottom: .5rem;
      font-weight: 600; font-size: 1rem; color: var(--dark-soft);
    }
    .req { color: var(--gold); }
    .form-input, .form-select, .form-textarea {
      width: 100%; padding: 1rem 1.25rem;
      border: 2px solid var(--cream-soft);
      border-radius: var(--r-md); font-size: 1.1rem;
      font-family: 'DM Sans', sans-serif;
      background: var(--cream); color: var(--dark);
      transition: all 250ms var(--ease-smooth);
    }
    .form-input:focus, .form-select:focus, .form-textarea:focus {
      outline: none; border-color: var(--forest);
      background: var(--white);
      box-shadow: 0 0 0 4px rgba(11,93,59,0.12);
    }
    .form-textarea { min-height: 130px; resize: vertical; }
    .form-hint { font-size: .86rem; color: var(--gray); margin-top: .4rem; }
    .form-hint i { color: var(--gold); margin-right: .3rem; }
    .form-error { color: #e53e3e; font-size: .86rem; margin-top: .4rem; display: none; }
    .form-group.error .form-input,
    .form-group.error .form-select { border-color: #e53e3e; }
    .form-group.error .form-error { display: block; }

    .submit-area { display: flex; flex-direction: column; align-items: center; gap: 1.25rem; }
    .submit-note { text-align: center; font-size: .9rem; color: var(--gray); max-width: 440px; }

    /* ─── WHATSAPP FLOAT ─── */
    .wa-float {
      position: fixed; bottom: 2rem; right: 2rem;
      width: 68px; height: 68px;
      background: #25D366; color: var(--white);
      border-radius: var(--r-full);
      display: flex; align-items: center; justify-content: center;
      font-size: 2.1rem; z-index: 400;
      box-shadow: var(--sh-xl), 0 0 0 6px rgba(37,211,102,0.2);
      transition: all 400ms var(--ease-bounce);
      animation: waPulse 2.5s infinite;
    }
    .wa-float:hover {
      transform: scale(1.18) translateY(-5px);
      box-shadow: var(--sh-xl), 0 0 0 10px rgba(37,211,102,0.25);
      color: var(--white);
    }
    @keyframes waPulse {
      0%   { box-shadow: var(--sh-xl), 0 0 0 0 rgba(37,211,102,0.5); }
      70%  { box-shadow: var(--sh-xl), 0 0 0 22px rgba(37,211,102,0); }
      100% { box-shadow: var(--sh-xl), 0 0 0 0 rgba(37,211,102,0); }
    }

    /* ─── BACK TO TOP ─── */
    .btt {
      position: fixed; bottom: 2rem; left: 2rem;
      width: 52px; height: 52px; border-radius: var(--r-full);
      background: var(--g-forest); color: var(--white);
      border: none; cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.3rem; box-shadow: var(--sh-lg);
      opacity: 0; visibility: hidden;
      transition: all 300ms var(--ease-smooth); z-index: 300;
    }
    .btt.show { opacity: 1; visibility: visible; }
    .btt:hover { transform: translateY(-4px); box-shadow: var(--sh-xl); }

    /* ─── FOOTER ─── */
    footer {
      background: var(--g-dark);
      color: var(--white); padding: 6rem 2rem 2.5rem;
      position: relative; overflow: hidden;
    }
    footer::before {
      content: ''; position: absolute; top: 0; left: 0; right: 0;
      height: 4px; background: var(--g-gold);
    }
    footer::after {
      content: ''; position: absolute;
      bottom: -200px; right: -200px;
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(11,93,59,0.2) 0%, transparent 65%);
      pointer-events: none;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 3rem; max-width: 1440px; margin: 0 auto;
      position: relative; z-index: 2;
    }
    .footer-col h3 {
      color: var(--white); font-size: 1.3rem;
      margin-bottom: 1.5rem; padding-bottom: 1rem;
      position: relative;
    }
    .footer-col h3::after {
      content: ''; position: absolute; bottom: 0; left: 0;
      width: 44px; height: 3px;
      background: var(--gold); border-radius: var(--r-full);
    }
    .footer-col p  { color: rgba(255,255,255,0.78); font-size: 1rem; line-height: 1.75; }
    .footer-links  { list-style: none; display: flex; flex-direction: column; gap: .9rem; }
    .footer-links a {
      color: rgba(255,255,255,0.78); font-size: 1rem;
      display: flex; align-items: center; gap: .7rem;
      transition: all 200ms;
    }
    .footer-links a:hover { color: var(--gold); transform: translateX(5px); }
    .footer-links i { color: var(--gold); width: 16px; font-size: .88rem; }

    .social-row { display: flex; gap: .9rem; margin-top: 1.5rem; }
    .social-row a {
      width: 48px; height: 48px; border-radius: var(--r-full);
      background: rgba(255,255,255,0.1); color: var(--white);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.35rem; border: 1.5px solid transparent;
      transition: all 300ms var(--ease-smooth);
    }
    .social-row a:hover {
      background: var(--gold); color: var(--dark);
      border-color: rgba(255,255,255,0.3);
      transform: translateY(-4px);
    }

    .footer-bottom {
      text-align: center; padding-top: 3rem; margin-top: 3rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      max-width: 1440px; margin-left: auto; margin-right: auto;
      color: rgba(255,255,255,0.55); font-size: .93rem;
    }
    .footer-bottom a { color: var(--gold); }

    /* ─── ANIMATIONS ─── */
    .fade-up {
      opacity: 0; transform: translateY(32px);
      transition: opacity .65s ease, transform .65s ease;
    }
    .fade-up.in { opacity: 1; transform: translateY(0); }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 768px) {
      .nav-links {
        position: fixed; top: 96px; left: 0; right: 0;
        background: var(--ivory); flex-direction: column;
        padding: 1.5rem 2rem; gap: 0;
        box-shadow: var(--sh-lg);
        transform: translateY(-120%);
        transition: transform 300ms var(--ease-out); z-index: 100;
      }
      .nav-links.open { transform: translateY(0); }
      .nav-links a { width: 100%; padding: 1.1rem; text-align: center; }
      .nav-cta { margin-left: 0; margin-top: 1.25rem; width: 100%; text-align: center; }
      .mobile-toggle { display: flex; }
      .hero-buttons { flex-direction: column; align-items: center; }
      .hero-buttons .btn { width: 100%; max-width: 320px; }
      .order-wrap { padding: 2rem 1.5rem; }
    }

    @media (max-width: 480px) {
      .logo-img-box { width: 56px; height: 56px; }
      .logo-name { font-size: 1.1rem; }
      .footer-col h3::after { left: 50%; transform: translateX(-50%); }
      .footer-col { text-align: center; }
      .social-row { justify-content: center; }
    }

    /* ─── ACCESSIBILITY ─── */
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: .01ms !important;
        transition-duration: .01ms !important;
      }
      html { scroll-behavior: auto; }
    }
    :focus-visible { outline: 3px solid var(--gold); outline-offset: 3px; }
    .skip-link {
      position: absolute; top: -40px; left: 0;
      background: var(--forest); color: var(--white);
      padding: .75rem 1.25rem; z-index: 500;
      transition: top 200ms;
    }
    .skip-link:focus { top: 0; }
  </style>
</head>
<body>
<a href="#main" class="skip-link">Skip to main content</a>

<!-- ══════════════════════════════════════════════════════
     HEADER
════════════════════════════════════════════════════════ -->
<header id="header">
  <nav>
    <!-- LOGO — tries LOGO.png → LOGO.jpg → LOGO.jpeg → SVG text fallback -->
    <a href="#" class="logo-wrap" aria-label="Nico Poultry & Eggs Ltd home">
      <div class="logo-img-box" id="logoBox">
        <img
          id="logoImg"
          src="LOGO.jpeg"
          alt="Nico Poultry & Eggs Ltd logo"
        >
        <!-- SVG fallback shown only if image fails -->
        <div class="logo-svg-fallback" id="logoFallback" style="display:none;width:100%;height:100%;align-items:center;justify-content:center;flex-direction:column;text-align:center;">
          <svg viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg" width="72" height="72">
            <circle cx="36" cy="36" r="36" fill="#073d27"/>
            <text x="36" y="24" font-family="Georgia,serif" font-size="10" font-weight="bold" fill="#c9a227" text-anchor="middle">NICO</text>
            <text x="36" y="36" font-family="Georgia,serif" font-size="7" fill="#e8bb3e" text-anchor="middle">POULTRY</text>
            <text x="36" y="47" font-family="Georgia,serif" font-size="6" fill="#e8bb3e" text-anchor="middle">&amp; EGGS</text>
            <!-- Simple turkey silhouette -->
            <ellipse cx="36" cy="58" rx="8" ry="5" fill="#1a8a5a" opacity=".6"/>
            <circle cx="36" cy="52" r="3.5" fill="#c9a227"/>
          </svg>
        </div>
      </div>
      <div class="logo-text-block">
        <span class="logo-name">Nico Poultry &amp; Eggs Ltd</span>
        <span class="logo-tagline">Farm Fresh · Dar es Salaam</span>
      </div>
    </a>

    <button class="mobile-toggle" id="mobileBtn" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-links" id="navLinks">
      <li><a href="#products">Products</a></li>
      <li><a href="#prices">Pricing</a></li>
      <li><a href="#reviews">Reviews</a></li>
      <li><a href="#location">Location</a></li>
      <li class="nav-cta">
        <a href="#contact" class="btn btn-forest">Order Now</a>
      </li>
    </ul>
  </nav>
</header>

<main id="main">

  <!-- ══════════════════════════════════════════════════════
       HERO
  ════════════════════════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-content">
      <div class="hero-eyebrow">
        <span></span> Dar es Salaam's Premier Farm <span></span>
      </div>
      <h1>Premium <em>Turkey</em> &amp; Chicken Supplier</h1>
      <p>Supplying hormone-free turkeys, broiler chickens &amp; fresh eggs to households, restaurants, and wholesale buyers across Tanzania — farm-fresh, every single day.</p>
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-gold btn-xl">
          <i class="fab fa-whatsapp"></i> Place Your Order
        </a>
        <a href="#products" class="btn btn-outline btn-lg">
          <i class="fas fa-feather-alt"></i> Explore Products
        </a>
      </div>
      <div class="hero-stats">
        <div class="stat-pill">
          <span class="stat-num">100</span>
          <span class="stat-lbl">Happy Customers</span>
        </div>
        <div class="stat-pill">
          <span class="stat-num">10</span>
          <span class="stat-lbl">Restaurants Served</span>
        </div>
        <div class="stat-pill">
          <span class="stat-num">100%</span>
          <span class="stat-lbl">Fresh Guarantee</span>
        </div>
        <div class="stat-pill">
          <span class="stat-num">8+</span>
          <span class="stat-lbl">Years of Excellence</span>
        </div>
      </div>
    </div>
    <div class="scroll-cue" id="scrollCue" role="button" tabindex="0" aria-label="Scroll down">
      <div class="scroll-line"></div>
      <span>Scroll</span>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════════
       PRODUCTS
  ════════════════════════════════════════════════════════ -->
  <section id="products" class="section">
    <div class="container">
      <div class="section-title fade-up">
        <div class="eyebrow"><span></span>What We Offer<span></span></div>
        <h2>Our Premium Products</h2>
        <p>Every bird is raised with care under professional farm standards — hormone-free, naturally fed, and delivered fresh to your door.</p>
      </div>
      <div class="products-grid">

        <!-- CHICKEN -->
        <article class="product-card fade-up">
          <div class="product-img">
            <img
              src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?auto=format&fit=crop&w=3840&q=100"
              alt="Fresh free-range broiler chickens on farm — premium quality"
              loading="lazy" width="1920" height="1280">
            <div class="product-img-overlay"></div>
            <span class="product-badge">Best Seller</span>
          </div>
          <div class="product-body">
            <h3>Premium Broiler Chickens</h3>
            <p>Healthy broilers raised hormone-free under professional farm standards. Ideal for families, restaurants, and caterers seeking consistent quality poultry.</p>
            <div class="product-footer">
              <span class="price">From TZS 15,000 <small>/bird</small></span>
              <a href="#contact" class="btn btn-forest" style="padding:.7rem 1.5rem;font-size:.95rem;">Order</a>
            </div>
          </div>
        </article>

        <!-- GRAND TURKEYS — Local file TURKEY.jpeg (same folder as index.html) -->
        <article class="product-card fade-up" style="transition-delay:120ms">
          <div class="product-img" id="turkeyCardImg">
            <img
              id="turkeyImg"
              src="TURKEY.jpeg"
              alt="Grand heritage turkeys in green grass — Nico Poultry &amp; Eggs Ltd"
              style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"
              onerror="
                var tried = this.dataset.tried || '';
                if(!tried.includes('jpg') && this.src.indexOf('.jpg') === -1){
                  this.dataset.tried = tried + 'jpg,';
                  this.src = 'TURKEY.jpg';
                } else if(!tried.includes('png') && this.src.indexOf('.png') === -1){
                  this.dataset.tried = tried + 'png,';
                  this.src = 'TURKEY.png';
                } else if(!tried.includes('JPG') && this.src.indexOf('TURKEY.JPG') === -1){
                  this.dataset.tried = tried + 'JPG,';
                  this.src = 'TURKEY.JPG';
                } else {
                  this.onerror = null;
                  this.src = 'https://images.unsplash.com/photo-1574258495973-f010dfbb5371?auto=format&fit=crop&w=1600&q=90';
                }
              "
            >
            <div class="product-img-overlay"></div>
            <span class="product-badge">Premium</span>
          </div>
          <div class="product-body">
            <h3>Grand Heritage Turkeys</h3>
            <p>Large, majestic heritage turkeys — the crown jewel of Nico Poultry. Raised with organic feed and ample open space, perfect for restaurants, hotels, and festive family celebrations.</p>
            <div class="product-footer">
              <span class="price">From TZS 85,000 <small>/bird</small></span>
              <a href="#contact" class="btn btn-forest" style="padding:.7rem 1.5rem;font-size:.95rem;">Order</a>
            </div>
          </div>
        </article>

        <!-- EGGS -->
        <article class="product-card fade-up" style="transition-delay:240ms">
          <div class="product-img">
            <img
              src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?auto=format&fit=crop&w=3840&q=100"
              alt="Fresh organic turkey eggs — collected daily at Nico Poultry Farm"
              loading="lazy" width="3840" height="2560">
            <div class="product-img-overlay"></div>
            <span class="product-badge">Fresh Daily</span>
          </div>
          <div class="product-body">
            <h3>Fresh Turkey Eggs</h3>
            <p>Nutrient-rich turkey eggs ideal for gourmet cooking, professional baking, or incubation. Collected fresh every morning for guaranteed quality and flavour.</p>
            <div class="product-footer">
              <span class="price">TZS 3,500 <small>/egg</small></span>
              <a href="#contact" class="btn btn-forest" style="padding:.7rem 1.5rem;font-size:.95rem;">Order</a>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════════
       PRICING
  ════════════════════════════════════════════════════════ -->
  <section id="prices" class="section">
    <div class="container">
      <div class="section-title fade-up">
        <div class="eyebrow"><span></span>Rates &amp; Packages<span></span></div>
        <h2>Transparent Pricing</h2>
        <p>Competitive rates with flexible options for retail, wholesale, and corporate clients. Contact us for bulk order discounts.</p>
      </div>
      <div class="pricing-card fade-up">
        <table class="pricing-table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Weight / Unit</th>
              <th style="text-align:right;">Price (TZS)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Local Heritage Turkey</strong></td>
              <td>8–10 kg</td>
              <td><span class="price-quote"><i class="fas fa-phone-alt"></i> Contact for Quote</span></td>
            </tr>
            <tr>
              <td><strong>Improved Breed Turkey</strong></td>
              <td>10–15 kg</td>
              <td><span class="price-big">85,000 – 120,000</span></td>
            </tr>
            <tr>
              <td><strong>Premium Show Turkey</strong></td>
              <td>15+ kg</td>
              <td><span class="price-quote"><i class="fas fa-tag"></i> Negotiable</span></td>
            </tr>
            <tr>
              <td><strong>Broiler Chicken</strong></td>
              <td>1.5–2.5 kg</td>
              <td><span class="price-big">15,000 – 25,000</span></td>
            </tr>
            <tr>
              <td><strong>Fresh Turkey Eggs</strong></td>
              <td>Per Egg</td>
              <td><span class="price-big">3,500</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════════
       REVIEWS
  ════════════════════════════════════════════════════════ -->
  <section id="reviews" class="section">
    <div class="container">
      <div class="section-title fade-up">
        <div class="eyebrow"><span></span>Testimonials<span></span></div>
        <h2>What Our Customers Say</h2>
        <p>Trusted by thousands of families and businesses across Dar es Salaam for quality poultry products.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card fade-up">
          <p class="review-text">Best turkey and chicken supplier in Dar es Salaam! The turkeys are always healthy, well-fed, and delivered fresh. My restaurant customers absolutely love the quality.</p>
          <div class="review-author">
            <div class="review-avatar">JM</div>
            <div class="review-meta">
              <h4>Josephine Moshi</h4>
              <span>Restaurant Owner</span>
            </div>
            <div class="stars">★★★★★</div>
          </div>
        </div>
        <div class="review-card fade-up" style="transition-delay:100ms">
          <p class="review-text">Excellent quality poultry and reliable delivery every time. The turkeys for our Christmas event were perfect — large, fresh, and beautifully prepared. Will reorder!</p>
          <div class="review-author">
            <div class="review-avatar">AN</div>
            <div class="review-meta">
              <h4>Annette Nara</h4>
              <span>Event Planner</span>
            </div>
            <div class="stars">★★★★★</div>
          </div>
        </div>
        <div class="review-card fade-up" style="transition-delay:200ms">
          <p class="review-text">Fresh turkey eggs every time I order! They are a game-changer for my baking business. Professional service, great communication, and always on time.</p>
          <div class="review-author">
            <div class="review-avatar">GM</div>
            <div class="review-meta">
              <h4>Gisela Msemwa</h4>
              <span>Bakery Owner</span>
            </div>
            <div class="stars">★★★★½</div>
          </div>
        </div>
        <div class="review-card fade-up" style="transition-delay:300ms">
          <p class="review-text">Very healthy chickens and turkeys. Nico Poultry has been our trusted supplier for over 3 years. Highly recommended for hotel and wholesale orders!</p>
          <div class="review-author">
            <div class="review-avatar">JM</div>
            <div class="review-meta">
              <h4>Jacqueline Mtui</h4>
              <span>Hotel Procurement</span>
            </div>
            <div class="stars">★★★★★</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════════
       LOCATION
  ════════════════════════════════════════════════════════ -->
  <section id="location" class="section">
    <div class="container">
      <div class="section-title fade-up">
        <div class="eyebrow"><span></span>Find Us<span></span></div>
        <h2>Visit Our Farm</h2>
        <p>Conveniently located in Tabata Sundown, Dar es Salaam — easy access for pickups and deliveries across the region.</p>
      </div>
      <div class="location-grid">
        <div class="map-box fade-up">
          <iframe
            src="https://www.google.com/maps?q=-6.8310507,39.2031136&output=embed&z=15"
            title="Nico Poultry Farm — Tabata Sundown, Dar es Salaam"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="location-card fade-up">
          <h3>Tabata Sundown, Dar es Salaam</h3>
          <div class="loc-list">
            <div class="loc-item">
              <div class="loc-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div>
                <strong>Address</strong>
                <p>Tabata Sundown, Dar es Salaam, Tanzania</p>
              </div>
            </div>
            <div class="loc-item">
              <div class="loc-icon"><i class="fas fa-clock"></i></div>
              <div>
                <strong>Operating Hours</strong>
                <p>Mon – Sat: 7:00 AM – 7:00 PM<br>Sunday: 8:00 AM – 2:00 PM</p>
              </div>
            </div>
            <div class="loc-item">
              <div class="loc-icon"><i class="fas fa-truck"></i></div>
              <div>
                <strong>Delivery Areas</strong>
                <p>Dar es Salaam Region • Same-day delivery available • Nationwide shipping for bulk orders</p>
              </div>
            </div>
            <div class="loc-item">
              <div class="loc-icon"><i class="fas fa-phone-alt"></i></div>
              <div>
                <strong>Direct Line</strong>
                <p><a href="tel:+255689583281" style="color:var(--forest);font-weight:600;">+255 689 583 281</a></p>
              </div>
            </div>
          </div>
          <a href="https://maps.google.com/?q=-6.8310507,39.2031136" target="_blank" rel="noopener" class="btn btn-outline">
            <i class="fas fa-directions"></i> Get Directions
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════════
       ORDER FORM
  ════════════════════════════════════════════════════════ -->
  <section id="contact" class="section" style="background:var(--cream);">
    <div class="container">
      <div class="section-title fade-up">
        <div class="eyebrow"><span></span>Get Started<span></span></div>
        <h2>Place Your Order</h2>
        <p>Fill in the form below and we'll confirm your order via WhatsApp within 15 minutes.</p>
      </div>
      <div class="order-wrap fade-up">
        <form class="order-form" id="orderForm" novalidate>

          <!-- Live preview -->
          <div class="order-preview">
            <h4><i class="fas fa-receipt"></i> Live Order Summary</h4>
            <div class="prev-row"><span>Product:</span><span id="pvProduct">Not selected</span></div>
            <div class="prev-row"><span>Quantity:</span><span id="pvQty">—</span></div>
            <div class="prev-row"><span>Unit Price:</span><span id="pvUnit">TZS 0</span></div>
            <div class="prev-row"><span>Subtotal:</span><span id="pvSubtotal">TZS 0</span></div>
            <div class="prev-row"><span>Delivery Fee:</span><span id="pvDelivery">Free</span></div>
            <div class="prev-row prev-total"><span>💵 Grand Total:</span><span id="pvTotal">TZS 0</span></div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="name">Full Name <span class="req">*</span></label>
              <input type="text" id="name" class="form-input" placeholder="e.g. John Mwakasege" required autocomplete="name">
              <span class="form-error">Please enter your full name</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="phone">Phone Number <span class="req">*</span></label>
              <input type="tel" id="phone" class="form-input" placeholder="+255 6XX XXX XXX" required autocomplete="tel">
              <span class="form-error">Enter a valid Tanzanian number (e.g. +255689583281)</span>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="product">Product <span class="req">*</span></label>
              <select id="product" class="form-select" required>
                <option value="" disabled selected>Select a product…</option>
                <option value="turkey-local">Local Heritage Turkey (8–10 kg)</option>
                <option value="turkey-improved">Improved Breed Turkey (10–15 kg)</option>
                <option value="turkey-premium">Premium Show Turkey (15 kg+)</option>
                <option value="chicken">Broiler Chicken (1.5–2.5 kg)</option>
                <option value="eggs">Fresh Turkey Eggs</option>
              </select>
              <span class="form-error">Please select a product</span>
            </div>
            <div class="form-group">
              <label class="form-label" for="qty">Quantity <span class="req">*</span></label>
              <input type="number" id="qty" class="form-input" placeholder="e.g. 2" min="1" max="100" required>
              <p class="form-hint"><i class="fas fa-info-circle"></i> Orders of 10+ qualify for bulk discounts</p>
              <span class="form-error">Enter a quantity between 1–100</span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="delivery">Delivery Preference</label>
            <select id="delivery" class="form-select">
              <option value="pickup">Farm Pickup (Free)</option>
              <option value="delivery-dar">Dar es Salaam Delivery (+TZS 5,000)</option>
              <option value="delivery-nationwide">Nationwide Shipping (Quote Required)</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Special Instructions</label>
            <textarea id="message" class="form-textarea" placeholder="e.g. preferred delivery time, preparation requests, event type…"></textarea>
            <p class="form-hint"><i class="fas fa-lightbulb"></i> Let us know your event — we'll help you choose the right bird!</p>
          </div>

          <div class="submit-area">
            <button type="submit" class="btn btn-forest btn-xl" id="submitBtn">
              <i class="fab fa-whatsapp"></i> Send Order via WhatsApp
            </button>
            <p class="submit-note">
              <i class="fas fa-shield-alt" style="color:var(--gold);"></i>
              Your information is secure. Orders confirmed within 15 minutes via WhatsApp.
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>

</main>

<!-- ══════════════════════════════════════════════════════
     FOOTER
════════════════════════════════════════════════════════ -->
<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <h3>Nico Poultry &amp; Eggs Ltd</h3>
      <p>Premium turkey and chicken supplier in Dar es Salaam. Committed to quality, freshness, and exceptional customer service since 2018.</p>
      <div class="social-row">
        <a href="https://wa.me/255689583281" target="_blank" rel="noopener" aria-label="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/nicodemus_moshi/" target="_blank" rel="noopener" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="footer-col">
      <h3>Quick Links</h3>
      <ul class="footer-links">
        <li><a href="#products"><i class="fas fa-chevron-right"></i> Our Products</a></li>
        <li><a href="#prices"><i class="fas fa-chevron-right"></i> Pricing Guide</a></li>
        <li><a href="#reviews"><i class="fas fa-chevron-right"></i> Customer Reviews</a></li>
        <li><a href="#location"><i class="fas fa-chevron-right"></i> Farm Location</a></li>
        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Place an Order</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>Contact Us</h3>
      <ul class="footer-links">
        <li><a href="tel:+255689583281"><i class="fas fa-phone-alt"></i> +255 689 583 281</a></li>
        <li><a href="https://wa.me/255689583281" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp Order Line</a></li>
        <li><a href="mailto:josephinenicodemus05@gmail.com"><i class="fas fa-envelope"></i> josephinenicodemus05@gmail.com</a></li>
        <li><span><i class="fas fa-map-marker-alt"></i> Tabata Sundown, Dar es Salaam</span></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>Business Hours</h3>
      <ul class="footer-links">
        <li><i class="far fa-clock"></i> Mon – Sat: 7:00 AM – 7:00 PM</li>
        <li><i class="far fa-clock"></i> Sunday: 8:00 AM – 2:00 PM</li>
        <li><i class="fas fa-truck"></i> Deliveries: 8:00 AM – 6:00 PM</li>
        <li><i class="fas fa-star"></i> Emergency Orders: 24/7 via WhatsApp</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <span id="yr"></span> Nico Poultry and Eggs Ltd. All rights reserved.
    <br>Crafted with <i class="fas fa-heart" style="color:var(--gold);"></i> for Tanzania's finest poultry experience.</p>
  </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/255689583281?text=Hello%20Nico%20Poultry!%20I%27d%20like%20to%20place%20an%20order"
   class="wa-float" target="_blank" rel="noopener"
   aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<!-- Back to top -->
<button class="btt" id="btt" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
/* ════════════════════════════════════
   LOGO — multi-extension fallback
════════════════════════════════════ */
(function(){
  const img = document.getElementById('logoImg');
  const fallback = document.getElementById('logoFallback');
  const extensions = ['LOGO.jpg','LOGO.jpeg','LOGO.PNG','LOGO.JPG','LOGO.JPEG','logo.png','logo.jpg'];
  let attempt = 0;

  img.addEventListener('error', function tryNext(){
    if(attempt < extensions.length){
      img.src = extensions[attempt++];
    } else {
      // All attempts failed — show SVG text fallback
      img.style.display = 'none';
      fallback.style.display = 'flex';
    }
  });
})();

/* ════════════════════════════════════
   UTILITIES
════════════════════════════════════ */
const $ = s => document.querySelector(s);
const $$ = s => document.querySelectorAll(s);

/* Year */
$('#yr').textContent = new Date().getFullYear();

/* ════════════════════════════════════
   SCROLL EVENTS
════════════════════════════════════ */
const header = $('#header');
const btt = $('#btt');

window.addEventListener('scroll', () => {
  const y = window.scrollY;
  header.classList.toggle('scrolled', y > 80);
  btt.classList.toggle('show', y > 500);
}, { passive: true });

btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

/* ════════════════════════════════════
   MOBILE NAV
════════════════════════════════════ */
const mobileBtn = $('#mobileBtn');
const navLinks = $('#navLinks');

mobileBtn.addEventListener('click', () => {
  const open = navLinks.classList.toggle('open');
  mobileBtn.classList.toggle('active', open);
  mobileBtn.setAttribute('aria-expanded', open);
});

$$('#navLinks a').forEach(a => {
  a.addEventListener('click', () => {
    navLinks.classList.remove('open');
    mobileBtn.classList.remove('active');
    mobileBtn.setAttribute('aria-expanded', 'false');
  });
});

document.addEventListener('keydown', e => {
  if(e.key === 'Escape' && navLinks.classList.contains('open')){
    navLinks.classList.remove('open');
    mobileBtn.classList.remove('active');
    mobileBtn.setAttribute('aria-expanded', 'false');
    mobileBtn.focus();
  }
});

/* ════════════════════════════════════
   SMOOTH SCROLL
════════════════════════════════════ */
$$('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if(target){
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.pageYOffset - header.offsetHeight;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});

/* Scroll cue */
const cue = $('#scrollCue');
if(cue){
  cue.addEventListener('click', () => window.scrollTo({ top: window.innerHeight - 80, behavior: 'smooth' }));
  cue.addEventListener('keydown', e => { if(e.key==='Enter'||e.key===' '){ e.preventDefault(); cue.click(); } });
}

/* ════════════════════════════════════
   FADE-IN OBSERVER
════════════════════════════════════ */
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in'); obs.unobserve(e.target); } });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

$$('.fade-up').forEach(el => obs.observe(el));

/* ════════════════════════════════════
   ORDER FORM
════════════════════════════════════ */
const prices = {
  'turkey-local': 85000, 'turkey-improved': 100000,
  'turkey-premium': 150000, 'chicken': 20000, 'eggs': 3500
};
const names = {
  'turkey-local': 'Local Heritage Turkey',
  'turkey-improved': 'Improved Breed Turkey',
  'turkey-premium': 'Premium Show Turkey',
  'chicken': 'Broiler Chicken',
  'eggs': 'Fresh Turkey Eggs'
};

function updatePreview(){
  const p   = $('#product').value;
  const q   = parseInt($('#qty').value) || 0;
  const d   = $('#delivery').value;
  const fmt = n => `TZS ${n.toLocaleString()}`;

  const unitPrice    = prices[p] || 0;
  const subtotal     = unitPrice * q;
  const deliveryCost = d === 'delivery-dar' ? 5000 : 0;
  const grandTotal   = subtotal + deliveryCost;

  /* Product & Qty */
  $('#pvProduct').textContent = p ? names[p] : 'Not selected';
  $('#pvQty').textContent     = q || '—';

  /* Unit price */
  if (!p) {
    $('#pvUnit').textContent = '—';
  } else if (unitPrice === 0) {
    $('#pvUnit').textContent = 'Quote required';
    $('#pvUnit').style.color = 'var(--forest)';
  } else {
    $('#pvUnit').textContent = fmt(unitPrice);
    $('#pvUnit').style.color = '';
  }

  /* Subtotal */
  $('#pvSubtotal').textContent = (p && q && unitPrice > 0)
    ? `${fmt(unitPrice)} × ${q} = ${fmt(subtotal)}`
    : '—';

  /* Delivery fee */
  if (d === 'delivery-nationwide') {
    $('#pvDelivery').textContent = 'Quote required';
    $('#pvDelivery').style.color = 'var(--forest)';
  } else if (d === 'delivery-dar') {
    $('#pvDelivery').textContent = `+${fmt(deliveryCost)}`;
    $('#pvDelivery').style.color = '';
  } else {
    $('#pvDelivery').textContent = 'Free (Farm Pickup)';
    $('#pvDelivery').style.color = 'var(--forest-light)';
  }

  /* Grand total */
  const needsQuote = unitPrice === 0 || d === 'delivery-nationwide';
  if (!p || !q) {
    $('#pvTotal').textContent = 'TZS 0';
  } else if (needsQuote) {
    $('#pvTotal').textContent = 'To be quoted';
    $('#pvTotal').style.color = 'var(--gold-muted)';
  } else {
    $('#pvTotal').textContent = fmt(grandTotal);
    $('#pvTotal').style.color = '';
  }
}

$('#product').addEventListener('change', updatePreview);
$('#qty').addEventListener('input', updatePreview);
$('#delivery').addEventListener('change', updatePreview);

function validate(field){
  const v = field.value.trim();
  const g = field.closest('.form-group');
  if(field.required && !v){ g.classList.add('error'); return false; }
  if(field.id==='phone' && v && !/^\+255[0-9]{9}$/.test(v)){ g.classList.add('error'); return false; }
  if(field.id==='qty' && v){ const n=parseInt(v); if(n<1||n>100){ g.classList.add('error'); return false; } }
  g.classList.remove('error'); return true;
}

$$('.form-input, .form-select').forEach(f => {
  f.addEventListener('blur', ()=>validate(f));
  f.addEventListener('input', ()=>{ if(f.closest('.form-group').classList.contains('error')) validate(f); });
});

$('#orderForm').addEventListener('submit', e => {
  e.preventDefault();
  let ok = true;
  $$('.form-input[required], .form-select[required]').forEach(f=>{ if(!validate(f)) ok=false; });
  if(!ok){ const err=$('.form-group.error'); if(err) err.scrollIntoView({behavior:'smooth',block:'center'}); return; }

  const name        = $('#name').value.trim();
  const phone       = $('#phone').value.trim();
  const productKey  = $('#product').value;
  const product     = $('#product').options[$('#product').selectedIndex].text;
  const qtyVal      = parseInt($('#qty').value) || 0;
  const deliveryKey = $('#delivery').value;
  const delivery    = $('#delivery').options[$('#delivery').selectedIndex].text;
  const msg         = $('#message').value.trim();

  /* ── Compute amounts exactly as the preview does ── */
  const unitPrice    = prices[productKey] || 0;
  const subtotal     = unitPrice * qtyVal;
  const deliveryCost = deliveryKey === 'delivery-dar' ? 5000 : 0;
  const grandTotal   = subtotal + deliveryCost;

  const fmtTZS = n => `TZS ${n.toLocaleString()}`;
  const priceNote = unitPrice === 0
    ? '(Quote required — contact us)'
    : `${fmtTZS(unitPrice)} × ${qtyVal} = ${fmtTZS(subtotal)}`;
  const deliveryNote = deliveryKey === 'delivery-nationwide'
    ? '(Nationwide — quote required)'
    : deliveryKey === 'delivery-dar'
      ? `+${fmtTZS(deliveryCost)}`
      : 'Free (Farm Pickup)';
  const totalNote = unitPrice === 0 || deliveryKey === 'delivery-nationwide'
    ? 'To be confirmed — please contact us'
    : fmtTZS(grandTotal);

  const text = [
    '🦃 *NEW ORDER — Nico Poultry & Eggs Ltd*',
    '━━━━━━━━━━━━━━━━━━━━━━━━',
    `👤 *Name:*      ${name}`,
    `📱 *Phone:*     ${phone}`,
    '━━━━━━━━━━━━━━━━━━━━━━━━',
    `🛒 *Product:*   ${product}`,
    `🔢 *Quantity:*  ${qtyVal} bird(s)/unit(s)`,
    `💰 *Unit Price:* ${unitPrice > 0 ? fmtTZS(unitPrice) : 'Quote required'}`,
    `📊 *Subtotal:*  ${priceNote}`,
    `🚚 *Delivery:*  ${delivery} — ${deliveryNote}`,
    `💵 *TOTAL:*     *${totalNote}*`,
    '━━━━━━━━━━━━━━━━━━━━━━━━',
    `📝 *Notes:*     ${msg || 'None'}`,
    `⏰ *Ordered:*   ${new Date().toLocaleString('en-TZ')}`
  ].join('\n');

  const btn = $('#submitBtn');
  btn.disabled = true;
  btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Opening WhatsApp…';

  setTimeout(()=>{
    window.open(`https://wa.me/255689583281?text=${encodeURIComponent(text)}`, '_blank');
    setTimeout(()=>{
      $('#orderForm').reset();
      updatePreview();
      btn.disabled = false;
      btn.innerHTML = '<i class="fab fa-whatsapp"></i> Send Order via WhatsApp';
      showToast('✅ Order sent! Check WhatsApp for confirmation.');
    }, 900);
  }, 700);
});

function showToast(msg){
  const t = document.createElement('div');
  Object.assign(t.style, {
    position:'fixed', bottom:'24px', left:'50%',
    transform:'translateX(-50%) translateY(80px)',
    background:'linear-gradient(135deg,#073d27,#116845)',
    color:'#fff', padding:'1rem 1.75rem',
    borderRadius:'16px', boxShadow:'0 20px 60px rgba(0,0,0,0.25)',
    fontWeight:'600', fontSize:'1.05rem',
    zIndex:'600', transition:'transform .35s ease',
    maxWidth:'90vw', textAlign:'center'
  });
  t.textContent = msg;
  document.body.appendChild(t);
  requestAnimationFrame(()=>{
    requestAnimationFrame(()=>{ t.style.transform='translateX(-50%) translateY(0)'; });
  });
  setTimeout(()=>{ t.style.transform='translateX(-50%) translateY(80px)'; setTimeout(()=>t.remove(),400); }, 4000);
}

/* ════════════════════════════════════
   IMAGE ERROR FALLBACK (global)
════════════════════════════════════ */
$$('img').forEach(img => {
  if(img.id==='logoImg' || img.id==='turkeyImg') return;
  img.addEventListener('error', function(){
    if(!this.dataset.errored){
      this.dataset.errored='1';
      this.src='data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="800" height="600"%3E%3Crect fill="%23edf2f7" width="800" height="600"/%3E%3Ctext fill="%2394a3b8" font-family="sans-serif" font-size="20" x="50%25" y="50%25" text-anchor="middle" dy=".35em"%3EImage unavailable%3C/text%3E%3C/svg%3E';
    }
  });
});

/* ════════════════════════════════════
   TURKEY IMAGE — local file TURKEY.jpeg
   Loaded directly as a local file alongside index.html.
   onerror on the img tag handles extension variants (.jpg, .png).
════════════════════════════════════ */
</script>
</body>
</html>