<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="css/categories-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <header>
        <div class="container container__header">
            <div class="row">
                <!-- 1 row = 12 slot -->
                <div class="col-md-6 ">
                    <img src="img/1.png" class="img-fluid" alt="">
                </div>

                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Home</a>
                            </button>
                            <a class="navbar-brand" href="#">Categories</a>
                            </button>
                            <a class="navbar-brand" href="#">Foods</a>
                            </button>
                            <a class="navbar-brand" href="#">Contact</a>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container ctn-categories">
            <h2 class="food-title">Explore Foods</h2>
            <div class="row food-list">
                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate-burger.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Burger</p>
                        </div>
                    </a>

                </div>

                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate_pizza.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Pizza</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate_momo.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Momo</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row food-order-website">
                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/food-order-website.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">SQL</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="footer-icon">
                <p class="text-center">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </p>

            </div>
            <div class="footer-text">
                <p class="text-center">Designed by <span style="color:red">Nheo</span></p>
            </div>
        </div>
    </footer>
    <!-- Đặt Jquery trước Bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>