<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h5 class="text-center">STUDENTS</h5>
    <fieldset>
      <div class="row justify-content-center">      
        <form action="store.php" method="POST">
            
             <div class="form-group">
              <label> firstname</label>
              <input type="text" name="firstname"   class="form-control">
            </div>
              <div class="form-group">
                <label> lastname</label>
                <input type="text" name="lastname"   class="form-control">
              </div>
                <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="email"   class="form-control">
              </div>
                <div class="form-group">
                  <label >phone</label>
                  <input type="text" name="phone"   class="form-control">
               </div>
                <button type="submit" class="btn btn-primary">enregistres</button>
                <button type="reset"  class="btn btn-primary"> annuler</button>
        </form>
      </div>  
    </fieldset>
    </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>