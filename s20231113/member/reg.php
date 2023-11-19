<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>會員註冊</title>

</head>

<body>

    <div class="container mt-2">
            <h2>會員註冊</h2>
    <form action="./add_user.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="" class="form-label">帳號</label>
            <input type="text" class="form-control" name="acc" id="acc">
        </div>
        <div class="mb-3 mt-3">
            <label for="" class="form-label">密碼</label>
            <input type="password" class="form-control"  name="pwd" id="pwd">
        </div>
        <div class="mb-3 mt-3">
            <label for="" class="form-label">姓名</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="mail" class="form-label">電子郵件</label>
            <input type="mail" class="form-control"  name="mail" id="mail">
        </div>
        <div class="mb-3 mt-3">
            <label for="" class="form-label">地址</label>
            <input type="text" class="form-control"  name="address" id="address">
        </div>
        <div class="mb-3 mt-3 d-flex justify-content-evenly" >
            <input type="submit"  class="btn btn-primary" value="送出">
            <input type="reset" class="btn btn-primary" value="重置">
        </div>
    </form>
    </div>
</body>

</html>