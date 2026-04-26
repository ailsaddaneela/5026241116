<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ailsa's Creative Portofolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(#f4f6fb, #fff);
            color: #333
        }

        .container {
            max-width: 1100px
        }

        .jumbotron {
            background: linear-gradient(135deg, #4e73df, #7c6cff);
            color: #fff;
            text-align: center;
            padding: 70px 30px;
            border-radius: 14px;
            margin: 30px 0
        }

        .jumbotron h1 {
            font-weight: 800;
            font-size: 46px
        }

        .section {
            margin-top: 65px
        }

        .section-title {
            text-align: center;
            font-weight: 700;
            font-size: 26px;
            margin-bottom: 35px;
            color: #2f2c79
        }

        .section-title:after {
            content: "";
            display: block;
            width: 70px;
            height: 4px;
            margin: 10px auto;
            border-radius: 5px;
            background: linear-gradient(90deg, #4e73df, #7c6cff)
        }

        .services,
        .about {
            background: #fff;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .05)
        }

        .card-style {
            background: #f8f9ff;
            padding: 25px;
            border-radius: 14px;
            text-align: center;
            border: 1px solid #e4e8ff;
            box-shadow: 0 6px 15px rgba(0, 0, 0, .05);
            transition: .3s;
            height: 100%
        }

        .card-style:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .12);
            background: #eef1ff
        }

        .card-style i {
            font-size: 28px;
            color: #4e73df;
            margin-bottom: 10px
        }

        .card-style h5 {
            font-weight: 600;
            color: #4e73df
        }

        .portofolio {
            background: #eef2ff;
            padding: 45px;
            border-radius: 14px
        }

        .portofolio-img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .08);
            transition: .3s
        }

        .portofolio-img:hover {
            transform: scale(1.05)
        }

        .portfolio-title {
            margin-top: 16px;
            font-weight: 500;
            font-size: 16px
        }

        .about-box {
            background: #f5f7ff;
            padding: 25px;
            border-radius: 12px
        }

        footer {
            margin-top: 70px;
            padding: 20px;
            background: #2f2f2f;
            color: #fff;
            text-align: center
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="jumbotron">
            <h1>Ailsa's Creative Portofolio</h1>
            <p>Photography • Videography • Content Creation</p>
            <hr>
            <button class="btn btn-light btn-lg" data-toggle="tooltip" title="Klik untuk melihat karya saya">Lihat
                Portofolio</button>
        </div>

        <div class="section services">
            <h3 class="section-title">Layanan</h3>

            <div class="row">

                <div class="col-md-3 mb-4">
                    <div class="card-style" data-toggle="tooltip" title="Jasa foto profesional">
                        <i class="bi bi-camera"></i>
                        <h5>Photography</h5>
                        <p>Dokumentasi foto untuk event, produk, dan media sosial.</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card-style" data-toggle="tooltip" title="Produksi video cinematic">
                        <i class="bi bi-camera-video"></i>
                        <h5>Videography</h5>
                        <p>Pembuatan video cinematic untuk konten digital.</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card-style" data-toggle="tooltip" title="Strategi konten kreatif">
                        <i class="bi bi-lightbulb"></i>
                        <h5>Content Creation</h5>
                        <p>Membantu brand membuat konten yang engaging.</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card-style" data-toggle="tooltip" title="Editing foto dan video">
                        <i class="bi bi-magic"></i>
                        <h5>Editing</h5>
                        <p>Proses editing untuk meningkatkan kualitas visual.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="section portofolio">
            <h3 class="section-title">Portofolio</h3>

            <div class="row">

                <div class="col-md-4 text-center mb-4">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
                        class="img-fluid portofolio-img" data-toggle="tooltip" title="Landscape Photography Project">
                    <p class="portfolio-title" data-toggle="tooltip" title="Foto landscape alam">Landscape Photography
                    </p>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7"
                        class="img-fluid portofolio-img" data-toggle="tooltip" title="Event Photography Project">
                    <p class="portfolio-title" data-toggle="tooltip" title="Dokumentasi event">Event Photography</p>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32"
                        class="img-fluid portofolio-img" data-toggle="tooltip" title="Product Photography Project">
                    <p class="portfolio-title" data-toggle="tooltip" title="Foto produk komersial">Product Photography
                    </p>
                </div>

            </div>
        </div>

        <div class="section about">
            <h3 class="section-title">Tentang</h3>

            <div class="row">

                <div class="col-md-8">
                    <div class="about-box">
                        <p><b>Ailsa's Creative</b> merupakan portofolio yang menampilkan karya fotografi, videografi,
                            serta konten visual kreatif untuk menunjukkan kemampuan dalam menghasilkan konten visual
                            yang menarik dan profesional.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7" class="img-fluid rounded">
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-primary btn-lg" data-toggle="tooltip" title="Hubungi untuk kerja sama">Contact
                Me</button>
        </div>

    </div>

    <footer>
        <p>© 2026 Ailsa's Creative Portofolio</p>
    </footer>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>
