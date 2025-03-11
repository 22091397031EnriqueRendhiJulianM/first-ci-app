<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .service-card {
            position: relative;
            background: linear-gradient(to bottom, rgba(0, 170, 181, 0.05), rgba(255, 255, 255, 0.8));
            border: 2px solid #00AAB5;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            max-width: 300px;
            margin: auto;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background-color: #00AAB5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            margin: 0 auto 10px;
        }

        .service-title {
            color: #00AAB5;
            font-weight: bold;
            margin-bottom: 0;
        }

        .service-description {
            color: #454545;
            margin-top: 10px;
            display: none;
            transition: opacity 0.3s ease-in-out;
        }

        .service-card:hover .service-description,
        .service-card.active .service-description {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <!-- Service Card 1 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="service-card" onclick="toggleService(this)">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="service-title">Skrining & Check Up</h3>
                    <p class="service-description">Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata.</p>
                </div>
            </div>
            
            <!-- Service Card 2 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="service-card" onclick="toggleService(this)">
                    <div class="service-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3 class="service-title">Medical Check Up</h3>
                    <p class="service-description">Pemeriksaan kesehatan menyeluruh untuk mendeteksi masalah kesehatan.</p>
                </div>
            </div>
            
            <!-- Service Card 3 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="service-card" onclick="toggleService(this)">
                    <div class="service-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3 class="service-title">Konsultasi Dokter</h3>
                    <p class="service-description">Konsultasi langsung dengan dokter spesialis untuk penanganan optimal.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleService(element) {
            element.classList.toggle('active');
        }
    </script>
</body>
</html>
