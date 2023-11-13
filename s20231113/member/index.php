<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>首頁</title>
    <style>
        .text {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>hello</h1>
        <!-- <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul> -->
        <header class="d-flex justify-content-evenly">

            <?php
            if (isset($_SESSION['user'])) {
                echo "歡迎回來" . $_SESSION['user'];
                echo "<a href='logout.php'>登出</a>";
            } else {
            ?>

                <button type="button" class="btn btn-primary "><a class="text-white text-decoration-none" href="./reg.php">註冊</a></button>
                <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="./login_form.php">登入Primary</a></button>
            <?php
            }
            ?>
        </header>
    </div>
</body>

</html>