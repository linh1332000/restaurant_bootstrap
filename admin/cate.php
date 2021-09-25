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
    <div class="container-fluid bg-secondary bg-gradient bg-opacity-25">
            <h1>Manage Category</h1>
            <button type="button" class="btn btn-primary">Add Category</button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pizza</td>
                        <td><img style="width: 110px; height:120px;" src="../images/pizza.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">2</th>
                        <td>Burger</td>
                        <td><img style="width: 110px; height:120px;" src="../images/burger.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">3</th>
                        <td>MoMo</td>
                        <td><img style="width: 110px; height:120px;" src="../images/momo.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">4</th>
                        <td>Quis est ipsum id id</td>
                        <td><img style="width: 110px; height:120px;" src="../images/pizza.jpg" alt=""></td>
                        <td>No</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

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
