<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/17/2019
 * Time: 9:31 AM
 */

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>



    <form style="width: 90%;margin-left: 2%" >
        <div class="form-group">
            <label for="exampleInputEmail1">CID</label>
            <input type="text" class="form-control" id="cid" aria-describedby="emailHelp" placeholder="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Salary</label>
            <input type="text " class="form-control" id="salary" placeholder="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Tell</label>
            <input type="tel " class="form-control" id="tell" placeholder="">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="button" class="btn btn-primary" id="btnValidate">Submit</button>


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/validation.js"></script>
    </form>






</body>
</html>

