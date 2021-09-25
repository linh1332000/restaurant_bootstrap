<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <?php include('menu.php') ?>
    </div>
    <div class="container-fluid bg-secondary bg-gradient bg-opacity-25 p-5">
            <h1>Manage Users</h1>
            <button type="button" class="btn btn-primary">Add New User</button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Arserio Leach</td>
                        <td>toduwaxobi</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>

                        <th scope="row">2</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>

                        <th scope="row">3</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>

                </tbody>
            </table>
        </div>

    <div>
        <?php include ('footer.php')?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</html>
