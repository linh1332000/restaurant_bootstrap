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
            <h1>Manage Order</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mixed Pizza</td>
                        <td>10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td style="color:green">Delivered</td>
                        <td>Jana Bush</td>
                        <td>+1(562) 101-2028</td>
                        <td>tydujy@mailinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td><button type="button" class="btn btn-success">Update Order</button></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Best Burger</td>
                        <td>4.00</td>
                        <td>4</td>
                        <td>16.00</td>
                        <td>2020-11-30 03:52:43</td>
                        <td style="color:green">Delivered</td>
                        <td>Kelly Dillard</td>
                        <td>+1(908) 914-3106</td>
                        <td>fexekihor@mailinator.com</td>
                        <td>Incidunt ipsum ad d</td>
                        <td><button type="button" class="btn btn-success">Update Order</button></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sadeko Momo</td>
                        <td>6.00</td>
                        <td>3</td>
                        <td>18.00</td>
                        <td>2020-11-30 03:49:48</td>
                        <td style="color:red">Cancelled</td>
                        <td>Bradley Farrell</td>
                        <td>+1(576) 504-4657</td>
                        <td>zuhafiq@mailinator.com</td>
                        <td>Duis aliqua Qui for</td>
                        <td><button type="button" class="btn btn-success">Update Order</button></td>
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
