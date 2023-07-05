<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP AJAX CRUD</title>
</head>
<style>
    
</style>
<body>
      <br>
      <div class="container card">
        <br>
       <div class="row">
        <div class="col-md-8 mx-auto col-sm-12">
        <h1 class="text-center">PHP AJAX CRUD</h1>
        <br> 
         
        <input id="name" class="form-control"  type="text" name="name" placeholder="Name.." require>
        <br> 
        <input id="email" class="form-control"  type="email" name="email" placeholder="Email.." require>
        <br> 
        <input id="pass" class="form-control" type="text" name="pass" placeholder="Password.." require>
        <br> 
       
        <button class="btn btn-success">Insert Data</button>
        </div>
       </div>

        <br>
        <hr>
        <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody id="tbody">
      
    </tbody>
  </table>
      </div>

       <script src="./assets/js/bootstrap.min.js"></script>
       <script src="./assets/js/jquery.min.js"></script>
       <script src="./assets/js/main.js"></script>
</body>
</html>