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
    <!-- FORM -->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="reg.php">
            <h2 class="clo-12">Форма регистрации</h2>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="введите ваше логин">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputEmail1" class="form-label">Адрес почтыы</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ваша почта не будет использована для спама</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Подтверидить пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <button type="button" class="btn btn-secondary">Регистрация</button>
                <a href="aut.php">Войти</a>
            </div>
        </form>
    </div>
    <!-- END FORM-->

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
                        <input type="email" name="email" class="text-input contact-input"
                            placeholder="your email adress">
                        <textarea name="message" rows="4" class="text-input contact-input"
                            placeholder="your message"></textarea>
                        <button type="submit" class="btn btn-big contact-btn">
                            <i class="fas fa-envelope"></i>
                            Отправить
                        </button>
                    </form>
                </div>
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