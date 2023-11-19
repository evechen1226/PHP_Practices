<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
</head>

<body>
    <div class="container mt-2">
        <h2>會員登入</h2>
        <form action="./login.php" method="POST">
            <?php
            if (isset($_GET['error'])) {
                echo "<span style='color:red'>";
                echo $_GET['error'];
                echo "</span>";
            }
            ?>
            <div class="mb-3 mt-3">
                <label for="" class="form-label">帳號</label>
                <input type="text" class="form-control" name="acc" id="acc">
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="form-label">密碼</label>
                <input type="password" class="form-control" name="pw" id="pw">
            </div>

            <div class="mb-3 mt-3 d-flex justify-content-evenly">
                <input type="submit" class="btn btn-primary" value="送出">
                <input type="reset" class="btn btn-primary" value="重置">
            </div>
        </form>
    </div>
</body>

</html>