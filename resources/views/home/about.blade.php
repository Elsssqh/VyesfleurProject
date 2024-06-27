<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Our History</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body { margin-top: 20px; }
    .history-wrapper {
        position: relative;
        padding: 50px 0 50px;
    }
    .history-wrapper:after {
        content: "";
        width: 3px;
        height: 100%;
        background: #ededed;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }
    .history-wrapper .title-wrap {
        opacity: 0.2;
        padding: 100px 0 0 45px;
    }
    .history-wrapper .timeline-box {
        position: relative;
    }
    .one-of-two {
        width: 50%;
        float: left;
    }
    .history-wrapper .timeline-box:not(:last-child) {
        margin-bottom: 140px;
    }
    .timeline-box:nth-child(2n) {
        padding: 0 0 0 140px;
    }
    .history-wrapper .timeline-box:nth-child(2n) {
        margin-bottom: 140px;
    }
    .history-wrapper .timeline-box:nth-child(2n + 1) {
        margin-top: -24%;
        text-align: right;
    }
    .timeline-box:nth-child(2n + 1) {
        padding: 0 140px 0 0;
    }
    .year {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        background: #fff;
        top: 30%;
        color: #3b3b3b;
        transform: translateY(-50%);
        border: 1px solid #dbdbdb;
        line-height: 100px;
        text-align: center;
        font-size: 24px;
        font-weight: 700;
    }
    .timeline-box:nth-child(2n) .year {
        left: 25px;
    }
    .timeline-box:nth-child(2n + 1) .year {
        right: 32px;
    }
    .year:before {
        content: "";
        width: 15px;
        height: 15px;
        border-left: 1px solid #dbdbdb;
        border-bottom: 1px solid #dbdbdb;
        background: #ffffff;
        position: absolute;
        top: 50%;
        margin-top: -7.5px;
    }
    .timeline-box:nth-child(2n) .year:before {
        left: -8px;
        transform: rotate(45deg);
    }
    .timeline-box:nth-child(2n + 1) .year:before {
        right: -8px;
        transform: rotate(-135deg);
    }
    .timeline-box:after {
        content: "";
        width: 3px;
        height: 0;
        background: #ffa200;
        position: absolute;
        top: 30%;
        transform: translateY(-50%);
        z-index: 1;
        transition: all 0.3s ease-in-out;
    }
    .timeline-box:nth-child(2n):after {
        left: -1.5px;
    }
    .timeline-box:nth-child(2n + 1):after {
        right: -1.5px;
    }
    .timeline-box:hover:after {
        height: 97px;
    }
    .timeline-box:before {
        content: "";
        width: 21px;
        height: 21px;
        border-radius: 50%;
        border: 5px solid #ededed;
        position: absolute;
        background: #fff;
        z-index: 2;
        top: 30%;
        transform: translateY(-50%);
        transition: all 0.3s ease-in-out;
    }
    .timeline-box:nth-child(2n):before {
        left: -10.5px;
    }
    .timeline-box:nth-child(2n + 1):before {
        right: -10.5px;
    }
    .timeline-box:hover:before {
        border: 5px solid #ffa200;
    }
    @media screen and (max-width: 1199px) {
        .year {
            width: 90px;
            height: 90px;
            line-height: 90px;
            font-size: 22px;
        }
    }
    @media screen and (max-width: 991px) {
        .history-wrapper {
            padding: 30px 0 30px;
        }
        .history-wrapper .title-wrap {
            padding: 0;
            margin-bottom: 30px;
        }
        .title-wrap.one-of-two {
            width: 100%;
        }
        .history-wrapper:after {
            left: 0;
        }
        .history-wrapper .timeline-box:nth-child(2n) {
            padding: 0 0 0 140px;
        }
        .history-wrapper .timeline-box:not(:last-child) {
            margin-bottom: 40px;
        }
        .timeline-box.one-of-two,
        .timeline-box .img img {
            width: 100%;
        }
        .history-wrapper .timeline-box:nth-child(2n + 1) {
            margin-top: 0;
            text-align: left;
        }
        .timeline-box:nth-child(2n + 1) .year {
            left: 32px;
        }
        .timeline-box:nth-child(2n + 1):before {
            left: -10.5px;
        }
        .timeline-box:nth-child(2n + 1) .year:before {
            left: -8px;
            transform: rotate(45deg);
        }
        .timeline-box:nth-child(2n + 1):after {
            left: -1.5px;
        }
        .history-wrapper .timeline-box:nth-child(2n + 1) {
            margin-top: 0;
            text-align: left;
        }
        .timeline-box:nth-child(2n + 1) {
            padding: 0 0 0 140px;
        }
    }
    @media screen and (max-width: 767px) {
        .history-wrapper:after,
        .year,
        .timeline-box:before {
            display: none;
        }
        .history-wrapper {
            padding: 0;
        }
        .history-wrapper .timeline-box:nth-child(2n),
        .history-wrapper .timeline-box:nth-child(2n + 1) {
            padding: 0 15px;
        }
        .history-wrapper .timeline-box:not(:last-child) {
            margin-bottom: 30px;
        }
        .timeline-box .content {
            text-align: center;
        }
        .timeline-box:nth-child(2n):after,
        .timeline-box:nth-child(2n + 1):after {
            display: none;
        }
    }
    .mb-1-6, .my-1-6 {
        margin-bottom: 1.6rem;
    }

    .resize-image {
        width: 150px;
        height: auto;
    }

</style>
</head>
<body>
<section>
<div class="container">
<div class="section-heading wow fadeIn">
<h1>Our History</h1>
<div class="heading-separator"></div>
</div>
<div class="row">
<div class="history-wrapper">
<div class="title-wrap text-center one-of-two">
</div>
<div class="timeline-box one-of-two">
<img class="mb-1-6 rounded resize-image" src="images/fl.jpg" alt="...">
<div class="content">
<h3 class="h4 mb-2 mb-md-3">Start with small space</h3>
<p class="mb-0">Vyes Fleur began its journey by launching their brand on Instagram, utilizing the platform to connect with a broad audience and showcase their unique floral designs. Through engaging content and beautiful imagery, they quickly built a loyal following and established a strong online presence, laying the foundation for their future growth and success</p>
</div>
<div class="year">2020</div>
</div>
<div class="timeline-box one-of-two">
<img class="mb-1-6 rounded resize-image" src="images/picc.jpg" alt="...">
<div class="content">
<h3 class="h4 mb-2 mb-md-3">Vyes Fleur Studio</h3>
<p class="mb-0">Vyes Fleur Studio has evolved into a thriving offline destination. What started as a digital storefront showcasing exquisite floral arrangements and gifts has blossomed into a physical space where creativity and craftsmanship meet. </p>
</div>
<div class="year">2021</div>
</div>
<div class="timeline-box one-of-two">
<img class="mb-1-6 rounded resize-image" src="images/piccc.jpg" alt="...">
<div class="content">
<h3 class="h4 mb-2 mb-md-3">Expanded to Tokopedia</h3>
<p class="mb-0">Having expanded its presence to Tokopedia, Vyes Fleur Studio brings its renowned floral artistry and impeccable service to a broader audience. From our vibrant online beginnings to now, customers can explore and purchase our curated floral collections with ease and convenience. </p>
</div>
<div class="year">2022</div>
</div>
<div class="timeline-box one-of-two">
<img class="mb-1-6 rounded resize-image" src="images/pic4.jpg" alt="...">
<div class="content">
<h3 class="h4 mb-2 mb-md-3"> Delivery out of city </h3>
<p class="mb-0">Expanding our reach beyond city limits, Vyes Fleur Studio now offers nationwide delivery, ensuring our exquisite floral arrangements can be enjoyed anywhere in the country. Whether you're sending heartfelt congratulations, expressing sympathy, or celebrating life's special moments, our flowers convey your sentiments with beauty and grace.</p>
</div>
<div class="year">2023</div>
</div>
<div class="timeline-box one-of-two">
<img class="mb-1-6 rounded resize-image" src="images/pic5.jpg" alt="...">
<div class="content">
<h3 class="h4 mb-2 mb-md-3">Vyes Fleur Flower Class</h3>
<p class="mb-0">At Vyes Fleur, our flower classes offer more than just floral arrangements; they provide an immersive experience in the artistry of blooms. Led by passionate floral designers, each class invites you into a world where creativity blossoms. Whether you're a novice or an enthusiast, our workshops cater to all skill levels, guiding you through the techniques of crafting stunning bouquets and arrangements</p>
</div>
<div class="year">2024</div>
</div>
</div>
</div>
</div>
<br>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>
