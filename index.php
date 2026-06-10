<!DOCTYPE html>
<html lang="ne">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>बडिगाड गाउँपालिका</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: 'Noto Sans Devanagari', sans-serif;
        }

        .top-bar{
            background:#0c6e3f;
            color:#fff;
            padding:15px;
        }

        .logo{
            width:80px;
        }

        .navbar{
            background:#004f2d !important;
        }

        .hero{
            background:url('images/banner.jpg');
            background-size:cover;
            background-position:center;
            height:450px;
            position:relative;
        }

        .hero-overlay{
            background:rgba(0,0,0,.5);
            height:100%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            text-align:center;
        }

        .section-title{
            border-left:5px solid green;
            padding-left:10px;
            margin-bottom:20px;
        }

        .notice-box{
            background:#f8f9fa;
            border-radius:10px;
            padding:20px;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .official-card{
            text-align:center;
            padding:20px;
            border:1px solid #ddd;
            border-radius:10px;
        }

        .official-card img{
            width:120px;
            height:120px;
            border-radius:50%;
            object-fit:cover;
        }

        .service-card{
            border:1px solid #ddd;
            padding:20px;
            border-radius:10px;
            transition:.3s;
        }

        .service-card:hover{
            transform:translateY(-5px);
        }

        footer{
            background:#00331d;
            color:white;
            padding:30px 0;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="top-bar">
    <div class="container d-flex align-items-center">
        <img src="images/logo.png" class="logo me-3">
        <div>
            <h3>बडिगाड गाउँपालिका</h3>
            <p class="mb-0">गाउँ कार्यपालिकाको कार्यालय, बागलुङ, गण्डकी प्रदेश</p>
        </div>
    </div>
</div>

<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Home</a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">परिचय</a></li>
                <li class="nav-item"><a class="nav-link" href="#">सूचना</a></li>
                <li class="nav-item"><a class="nav-link" href="#">सेवाहरू</a></li>
                <li class="nav-item"><a class="nav-link" href="#">वडा</a></li>
                <li class="nav-item"><a class="nav-link" href="#">सम्पर्क</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Banner -->
<section class="hero">
    <div class="hero-overlay">
        <div>
            <h1>बडिगाड गाउँपालिकामा स्वागत छ</h1>
            <p>समृद्ध बडिगाड, सुखी नागरिक</p>
        </div>
    </div>
</section>

<!-- Notice -->
<section class="py-5">
    <div class="container">
        <h3 class="section-title">ताजा सूचना</h3>

        <div class="notice-box">
            <marquee direction="up" height="150">
                <p>करार पदपूर्ति सम्बन्धी सूचना</p>
                <p>सामाजिक सुरक्षा भत्ता वितरण सम्बन्धी सूचना</p>
                <p>विद्युतीय खरिद प्रणाली सम्बन्धी सूचना</p>
                <p>निःशुल्क आयुर्वेद स्वास्थ्य शिविर</p>
            </marquee>
        </div>
    </div>
</section>

<!-- Officials -->
<section class="py-5 bg-light">
    <div class="container">

        <h3 class="section-title">जनप्रतिनिधिहरु</h3>

        <div class="row">

            <div class="col-md-4">
                <div class="official-card">
                    <img src="images/chairman.jpg">
                    <h5>गण्डकी थापा अधिकारी</h5>
                    <p>अध्यक्ष</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="official-card">
                    <img src="images/vice.jpg">
                    <h5>भिमसेन वन</h5>
                    <p>उपाध्यक्ष</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="official-card">
                    <img src="images/ceo.jpg">
                    <h5>कृष्ण प्रसाद ज्ञवाली</h5>
                    <p>प्रमुख प्रशासकीय अधिकृत</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5">
    <div class="container">

        <h3 class="section-title">नागरिक सेवाहरू</h3>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="service-card">
                    <h5>जन्म दर्ता</h5>
                    <p>घटना दर्ता सेवा</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <h5>मृत्यु दर्ता</h5>
                    <p>घटना दर्ता सेवा</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <h5>व्यवसाय दर्ता</h5>
                    <p>व्यवसाय सम्बन्धी सेवा</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <h5>नागरिकता सिफारिस</h5>
                    <p>सिफारिस सेवा</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <h4>बडिगाड गाउँपालिका</h4>
        <p>ग्वालिचौर, बागलुङ, गण्डकी प्रदेश, नेपाल</p>
        <p>© <?php echo date('Y'); ?> All Rights Reserved</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
