<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 100px;">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <center><h4>Halaman Login Admin</h4></center>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url().'welcome/login';?>">
                    <div class="form-group has-feedback">
                        <label for="username"> Username : </label>
                        <input type="text" name="username" class="form-control" placeholder="Isi Username" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback" style="color: grey;"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password"> Password : </label>
                        <input type="password" name="password" class="form-control" placeholder="Isi Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback" style="color: grey;"></span>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remeber" value="Remember Me"> Remember Me
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit"> Login </button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>