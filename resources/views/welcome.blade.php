
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AROMAÉ — Discover Your Signature Scent</title>
    <meta name="description" content="Temukan parfum lokal pilihan dengan karakter dan aroma yang khas di AROMAÉ.">

    <style>
        :root {
            --cream: #f7f3ec;
            --dark: #201e1b;
            --brown: #8b7158;
            --muted: #77716a;
            --white: #fffdf9;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--cream);
            color: var(--dark);
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .announcement {
            padding: 11px 20px;
            background: var(--dark);
            color: var(--cream);
            text-align: center;
            font-size: 11px;
            letter-spacing: 2px;
        }

        .navbar {
            min-height: 82px;
            padding: 0 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e6ded2;
        }

        .logo {
            font-family: Georgia, serif;
            font-size: 29px;
            letter-spacing: 4px;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .nav-links a:hover {
            color: var(--brown);
        }

        .hero {
            min-height: 570px;
            padding: 70px 10%;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 55px;
        }

        .eyebrow {
            color: var(--brown);
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero h1 {
            max-width: 600px;
            margin: 25px 0;
            font-family: Georgia, serif;
            font-size: clamp(44px, 5.4vw, 76px);
            font-weight: normal;
            line-height: 1.08;
        }

        .hero h1 em {
            color: var(--brown);
            font-weight: normal;
        }

        .hero p {
            max-width: 420px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.9;
        }

        .button {
            display: inline-block;
            margin-top: 30px;
            padding: 17px 27px;
            background: var(--dark);
            color: white;
            font-size: 11px;
            letter-spacing: 1.5px;
            transition: background 0.25s, transform 0.25s;
        }

        .button:hover {
            background: var(--brown);
            transform: translateY(-2px);
        }

        .hero-visual {
            min-height: 410px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #e9dfd0;
        }

        .hero-visual::before {
            content: "";
            position: absolute;
            width: 290px;
            height: 290px;
            border: 1px solid rgba(139, 113, 88, 0.35);
            border-radius: 50%;
        }

        .perfume-bottle {
            position: relative;
            width: 145px;
            height: 225px;
            margin-top: 35px;
            border: 1px solid rgba(64, 48, 33, 0.35);
            border-radius: 15px 15px 28px 28px;
            background: linear-gradient(100deg, #d8c5a8, #f8edda 45%, #c6ad8d);
            box-shadow: 20px 30px 45px rgba(50, 37, 25, 0.16);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .perfume-bottle::before {
            content: "";
            position: absolute;
            top: -38px;
            width: 48px;
            height: 39px;
            border-radius: 5px 5px 2px 2px;
            background: linear-gradient(90deg, #24211d, #50473c, #24211d);
        }

        .bottle-label {
            padding: 18px 8px;
            background: rgba(255, 253, 249, 0.8);
            text-align: center;
        }

        .bottle-label strong {
            display: block;
            font-family: Georgia, serif;
            font-size: 13px;
            letter-spacing: 2px;
        }

        .bottle-label span {
            display: block;
            margin-top: 8px;
            font-size: 7px;
            letter-spacing: 2px;
        }

        .visual-caption {
            position: absolute;
            right: 20px;
            bottom: 18px;
            color: #655849;
            font-family: Georgia, serif;
            font-size: 12px;
            font-style: italic;
        }

        .collection {
            padding: 85px 7%;
            background: var(--white);
            text-align: center;
        }

        .collection h2 {
            margin: 16px 0;
            font-family: Georgia, serif;
            font-size: 39px;
            font-weight: normal;
        }

        .collection > p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .product-grid {
            margin-top: 45px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
            text-align: left;
        }

        .product-image {
            min-height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eee7dc;
        }

        .product-image:nth-child(2) {
            background: #e5dfd5;
        }

        .mini-bottle {
            width: 75px;
            height: 125px;
            border: 1px solid #b9a58b;
            border-radius: 9px 9px 15px 15px;
            background: linear-gradient(90deg, #c4ad8c, #f2e5d0, #c4ad8c);
            position: relative;
        }

        .mini-bottle::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 24px;
            width: 27px;
            height: 20px;
            background: #39332c;
            border-radius: 3px 3px 0 0;
        }

        .product-info {
            padding: 19px 0;
        }

        .product-info h3 {
            font-family: Georgia, serif;
            font-size: 20px;
            font-weight: normal;
        }

        .product-info p {
            margin-top: 8px;
            color: var(--muted);
            font-size: 12px;
        }

        .price {
            display: block;
            margin-top: 13px;
            font-size: 13px;
        }

        footer {
            padding: 35px 20px;
            background: var(--dark);
            color: var(--cream);
            text-align: center;
            font-size: 11px;
            letter-spacing: 1px;
        }

        .reveal {
            animation: appear 0.8s ease both;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 760px) {
            .navbar {
                padding: 22px 6%;
                flex-wrap: wrap;
                gap: 18px;
            }

            .logo {
                font-size: 24px;
            }

            .nav-links {
                width: 100%;
                gap: 22px;
                flex-wrap: wrap;
                font-size: 11px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 55px 7%;
                gap: 40px;
            }

            .hero-visual {
                min-height: 350px;
            }

            .product-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .product-image {
                min-height: 230px;
            }

            .collection {
                padding: 65px 7%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <div class="announcement">
        YOUR SCENT. YOUR SIGNATURE.
    </div>

    <header class="navbar">
        <a href="#" class="logo">AROMAÉ</a>

        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#">BERANDA</a>
            <a href="#koleksi">KOLEKSI</a>
            <a href="#tentang">TENTANG KAMI</a>
            <a href="#kontak">KONTAK</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-copy reveal">
                <span class="eyebrow">The art of fragrance</span>

                <h1>Temukan aroma <em>yang bercerita.</em></h1>

                <p>
                    Setiap aroma memiliki cerita. Temukan parfum lokal pilihan
                    yang mencerminkan karakter, suasana, dan identitas dirimu.
                </p>

                <a href="#koleksi" class="button">JELAJAHI KOLEKSI &rarr;</a>
            </div>

            <div class="hero-visual reveal" role="img" aria-label="Ilustrasi botol parfum AROMAÉ">
                <div class="perfume-bottle">
                    <div class="bottle-label">
                        <strong>AROMAÉ</strong>
                        <span>EAU DE PARFUM</span>
                    </div>
                </div>
                <span class="visual-caption">A scent to remember.</span>
            </div>
        </section>

        <section class="collection" id="koleksi">
            <span class="eyebrow">Curated for you</span>
            <h2>Koleksi Pilihan</h2>
            <p>Kenali karakter aromamu melalui koleksi parfum lokal pilihan.</p>

            <div class="product-grid">
                <article class="product-card">
                    <div class="product-image">
                        <div class="mini-bottle" aria-label="Ilustrasi parfum" role="img"></div>
                    </div>
                    <div class="product-info">
                        <h3>Amber Woods</h3>
                        <p>Warm · Woody · Elegant</p>
                        <span class="price">Rp189.000</span>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <div class="mini-bottle" aria-label="Ilustrasi parfum" role="img"></div>
                    </div>
                    <div class="product-info">
                        <h3>Soft Petals</h3>
                        <p>Floral · Soft · Graceful</p>
                        <span class="price">Rp159.000</span>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <div class="mini-bottle" aria-label="Ilustrasi parfum" role="img"></div>
                    </div>
                    <div class="product-info">
                        <h3>Midnight Musk</h3>
                        <p>Musky · Deep · Refined</p>
                        <span class="price">Rp199.000</span>
                    </div>
                </article>
            </div>
        </section>

        <section class="collection" id="tentang">
            <span class="eyebrow">Our philosophy</span>
            <h2>Aroma yang menjadi identitas.</h2>
            <p>
                AROMAÉ adalah proyek toko parfum lokal sebagai portofolio pengembangan web.
                Produk dan harga yang ditampilkan saat ini merupakan data demo.
            </p>
        </section>
    </main>

    <footer id="kontak">
        <p>AROMAÉ · DISCOVER YOUR SIGNATURE SCENT</p>
        <p style="margin-top: 10px;">Demo e-commerce portfolio · 2026</p>
    </footer>
</body>
</html>
