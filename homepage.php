<!DOCTYPE html >
<html >
  <head>
    <title>MyBook || <?php echo $_SESSION['Name'] ;?></title>
    <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <script src='behaviour.js' type='text/javascript'></script>
     <script src='//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js' type='text/javascript'></script>

    <link rel="stylesheet" type="text/css" href="homepage.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/DB/bootstrap-3.1.1-dist/css/bootstrap.css">
    <script src"/DB/bootstrap-3.1.1-dist/js/bootstrap.js" type='text/javascript'></script>

  </head>
 
  <body id='body'>

    <nav class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyBook</a>
        </div>

    
      <form class="navbar-form navbar-left" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default-lg">
         <span class="glyphicon glyphicon-search"></span>Serach</button>
      </form>


      <ul class="nav navbar-nav navbar-right" id="headLinks">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="friends.php">Friends</a></li>
        <li><a href="action.php?a=logout">Logout</a></li>

        
      </ul>
       </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->

     </nav>
     <div id = "container">

        <div class="row">
          <div class="col-md-4">
            <div id ="uinfo">
              <img src="/DB/images/tablet.jpg">
            </div>

            <div id="taskbar">
              <li>
                <h4><span class="glyphicon glyphicon-list-alt col-md-2"></span>News Feed</h4>
              </li>

              <li>
                <h4><span class="glyphicon glyphicon-th-large col-md-2"></span>Groups</h4>
              </li>

              <li>
                <h4><span class="glyphicon glyphicon-user col-md-2"></span>Friends</h4>

              </li>
            </div>
          
          </div>


          <div class="col-md-8">
            hi
            <textarea class="form-control" rows="3"></textarea>
          </div>

        </div>


       <div id = "pinfo">

    <table width="400" border="10" align="center" cellpadding="10" cellspacing="1" bgcolor="#A52A2A">
    </table>

       </div>
     </div>


    <div id="footer">
      Copyright © Cary Nicole Shantel Jodi
    </div>
  </body>
</html>