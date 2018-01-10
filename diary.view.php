<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="CSS/style.css">
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <title>Welcome <?= $_SESSION['user_id']?></title>
  </head>



  <body>

    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <div class="container">
      <header>
        <nav class="navbar navbar-dark indigo">
            <a class="navbar-brand" >Welcome <?=$_SESSION['user_id']?></a>
        </nav>
      </header>


      <div class = "row justify-content-center">

        <div class="col-md-12">

          <textarea class="form-control" id="note" placeholder="Add Note" rows="3" name = "note"></textarea>

          <!-- Character count & button -->
          <div class="pull-right btnGroup">
            <br>
            <button class="btn btn-info pull-right" type="submit" name = "addnote" id="addnote">Add Todays Note</button>
          </div>
        </div>
      </div>



      </div>
    </form>
    <script src="js/global.js"></script>
  </body>
</html>
