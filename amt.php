<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

    <head>
        <link rel="stylesheet" href="styles.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Intel® Active Management Technology</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
<body>

<table class="header">
<tbody><tr><td valign="top" nowrap="nowrap">
<p class="top1">Intel<font class="r"><sup>®</sup></font> Active Management Technology
</p></td><td valign="top"><img src="logo.gif" alt="Intel" align="right">
</td></tr></tbody></table>

<h1>Log On</h1>
<p>Log on to Intel® Active Management Technology on this computer.
</p><p></p>

<form action="login.php" method="POST">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
      <input id="username" type="text" class="form-control" name="username" placeholder="Username">
      
    </div>
    <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
     
    </div>
    <button type="submit" class="btn">login </button>
    <input type="hidden" name="token" value=
        <?php 
           echo sha1(rand().date('Y-m-d', time()));
        ?>
    >
</form>
</body>
</html>