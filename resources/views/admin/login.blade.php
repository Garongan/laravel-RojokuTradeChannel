<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ $title }}</title>
    <link rel="stylesheet" href="/assets/css/style-starter.css">
</head>
<body>
    <section style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 align-items-center d-flex bg-light rounded shadow">
                    <img src="/assets/images/logo1.png" class="img-fluid logo" alt="">
                </div>
                <div class="col-12 col-md-4">
                    <form action="/admin" method="post">
                        @csrf
                        <div class="mb-3 mt-1">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Username..." autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password..." autofocus required>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <button type="submit" class="btn button-primary">
                                LOGIN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>