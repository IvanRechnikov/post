<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>
    <div class="container mt-5" style="width: 700px">
        <form action="assets/action.php" method="post" id="get-form">
            <input type="number" name="postId" class="form-control" placeholder="поле ввода Post ID" aria-label="поле ввода Post ID" aria-describedby="addon-wrapping">
            <button type="button" class="btn btn-primary mt-3 get-btn">Найти</button>
        </form>
    </div>
    <div class="container" style="margin-top: 150px;">
        <table class="table" id="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <div class="container" style="width: 500px; margin-top: 200px;">
        <form action="assets/action.php" method="post" id="post-form">
            <input type="text" name="title" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="addon-wrapping" required>
            <input type="text" name="body" class="form-control mt-3" placeholder="Body" aria-label="Body" aria-describedby="addon-wrapping" required>
            <input type="number" name="userId" class="form-control mt-3" placeholder="User ID" aria-label="User ID" aria-describedby="addon-wrapping" required>
            <button type="button" class="btn btn-primary mt-3 post-btn">Добавить</button>
        </form>
    </div>

    <div class="container" style="margin-top: 150px;">
        <table class="table" id="tablePost">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>