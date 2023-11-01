<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SavKon CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("app/include/header.php"); ?>
    <!-- блок карусели START -->
    <div class="container">
        <div class="row">
            <h2 class="slider-title">Топ публикации</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                        <h5><a href="">First slide label</a></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                        <h5><a href="">First slide label</a></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/img3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                        <h5><a href="">First slide label</a></h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- блок карусели END -->

    <!-- блок main START -->
    <div class="container">
        <div class="content row">
            <div class="main-content col-12 col-md-9">
                <h2>Последние публикации</h2>

                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/img3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Динамические сайты</a>
                        </h3>
                        <i class="fa fa-user">Имя автора</i>
                        <i class="fa fa-calendar">Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Aut eius non dignissimos incidunt ullam, magni maxime.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/img2.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статическая вёрстка</a>
                        </h3>
                        <i class="fa fa-user">Имя автора</i>
                        <i class="fa fa-calendar">Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Aut eius non dignissimos incidunt ullam, magni maxime.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/img3.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Динамические сайты</a>
                        </h3>
                        <i class="fa fa-user">Имя автора</i>
                        <i class="fa fa-calendar">Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Aut eius non dignissimos incidunt ullam, magni maxime.
                        </p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="assets/images/img2.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">Статическая вёрстка</a>
                        </h3>
                        <i class="fa fa-user">Имя автора</i>
                        <i class="fa fa-calendar">Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Aut eius non dignissimos incidunt ullam, magni maxime.
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar col-12 col-md-3">

                <div class="section search">
                    <h3>Поиск</h3>
                    <form action="#" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="найти...">
                    </form>
                </div>

                <div class="sction topics">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="#">Программирование</a></li>
                        <li><a href="#">QA</a></li>
                        <li><a href="#">Кейсы</a></li>
                        <li><a href="#">Дизайн</a></li>
                        <li><a href="#">Мотивация</a></li>
                        <li><a href="#">KPI</a></li>
                        <li><a href="#">DevOps</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div> 
    <!-- блок main END -->

    <!-- footer START -->
    <div class="footer container-fluid">
        <div class="footer-content container">
            <div class="row">
                <div class="footer-section about col-md-4 col-12">
                    <h3 class="logo-text">Мой блог</h3>
                    <p>
                        Здесь я буду писать про свой IT-expirience.
                    </p>
                    <div class="contact">
                        <span><i class="fas fa-phone"></i>&nbsp; 123-456-789</span>
                        <span><i class="fas fa-envelope"></i>&nbsp; info@myblog.ru</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section links col-md-4 col-12">
                    <h3>Quick Links</h3>
                    <br>
                    <ul>
                        <a href="#">
                            <li>События</li>
                        </a>
                        <a href="#">
                            <li>Команда</li>
                        </a>
                        <a href="#">
                            <li>Упражнения</li>
                        </a>
                        <a href="#">
                            <li>Галлерея</li>
                        </a>
                        <a href="#">
                            <li>Что-то ещё</li>
                        </a>
                    </ul>
                </div>

                <div class="footer-section contact-form col-md-4 col-12">
                    <h3>Контакты</h3>
                    <br>
                    <form action="index.php" method="post">
                        <input type="email" name="email" class="text-input contact-input" placeholder="your email adress">
                        <textarea name="message" rows="4" class="text-input contact-input" placeholder="your message"></textarea>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>
                            Отправить
                        </button>
                    </form>
                </div>>
            </div>
        </div>
    </div>
    <!-- footer END -->


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/02bbf82270.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Option2 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
</body>

</html>