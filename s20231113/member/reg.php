<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>會員註冊</title>
    <style>
        .w-80 {
            width: 80%;
        }

        .h-60 {
            height: 60vh;
        }

        .bd-1 {
            border: 1px solid black;

        }

        h2 {
            text-align: center;
            margin: 20px;
        }

        body {
            display: flex;
            height: 90vh;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1581888227599-779811939961?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-repeat: no-repeat;
            background-size: cover;

        }

        .my-container {
            width: 50%;

            /* margin: auto; */
            border: 3px double lightblue;
            padding: 5px;
            border-radius: 10px;
            background-color: white;
        }

        .container {
            /* background-color: bisque; */
        }

        .btn-100 {
            width: 100px;
        }
    </style>
</head>

<body>

    <div class="container m-auto">
        <div class="my-container m-auto h-60  ">
            <h2>會員註冊</h2>
            <form action="./add_user.php" method="POST" enctype="multipart/form-data">
                <div class="row w-80 m-auto mb-2 ">
                    <div class="col-md-3 ">
                        <label for="" class="form-label">帳號</label>
                    </div>
                    <div class="col-md-9 ">
                        <input type="text" class="form-control" name="acc" id="acc">
                    </div>
                </div>
                <div class="row w-80 m-auto mb-2">
                    <div class="col-md-3 ">
                        <label for="" class="form-label">密碼</label>
                    </div>
                    <div class="col-md-9 ">
                        <input type="password" class="form-control" name="pw" id="pw">
                    </div>
                </div>
                <div class="row w-80 m-auto mb-2">
                    <div class="col-md-3 ">
                        <label for="" class="form-label">姓名</label>
                    </div>
                    <div class="col-md-9 ">
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="row w-80 m-auto mb-2">
                    <div class="col-md-3 ">
                        <label for="email" class="form-label">電子郵件</label>
                    </div>
                    <div class="col-md-9 ">

                        <input type="text" class="form-control" name="email" id="email">

                    </div>
                </div>
                <div class="row w-80 m-auto mb-2">
                    <div class="col-md-3 ">
                        <label for="" class="form-label">地址</label>
                    </div>
                    <div class="col-md-9 ">
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6 text-end">
                        <input type="submit" class="btn btn-primary mb-2 " value="送出">
                    </div>
                    <div class="col-md-6">
                        <input type="reset" class="btn btn-primary mb-2 " value="重置">
                    </div>
                </div>

            </form>
        </div>


    </div>
    </div>
</body>

</html>