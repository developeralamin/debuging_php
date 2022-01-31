<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration Form!</title>
  </head>
  <body>
  
  
<?php
   
   session_start();    

    $name=$email=$password=$gender=$tearms="";
    $nameError=$emailError=$passwordError=$genderError=$tearmsError="";

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
        if (empty($_POST['name'])) {
              $nameError ='Name can not be Empty';
           }else{
              $name = $_POST['name'];
              $_SESSION['name'] = $_POST['name'];

              if (!preg_match("/^[a-zA-Z']*$/",$name)) {
                $nameError ='Only letters and white space allowed';
              }
           }
 
     if (empty($_POST['email'])) {
              $emailError ='email can not be Empty';
           }else{
              $email = $_POST['email'];
              $_SESSION['email'] = $_POST['email'];

              if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
              }
           }

     if (empty($_POST['password'])) {
              $passwordError ='password can not be Empty';
           }else{
              $password = md5($_POST['password']);
              $_SESSION['password'] = $_POST['password'];
           }

          if (empty($_POST['gender'])) {
              $genderError ='gender can not be Empty';
           }else{
              $gender = $_POST['gender'];
              $_SESSION['gender'] = $_POST['gender'];
           }    


            if (empty($_POST['tearms'])) {
              $tearmsError ='tearms can not be Empty';
           }else{
              $tearms = $_POST['tearms'];
              $_SESSION['tearms'] = $_POST['tearms'];
           }     


      }



     if($name && $email  && $password &&  $gender && $tearms){
         echo "Data inserted" . '<br>';
         echo $name . '<br>'; 
         echo $email . '<br>';
         echo $password . '<br>';    
         echo $gender . '<br>';
         echo $tearms . '<br>';

     }


?>



<?php 
  // echo $_SESSION['gender'];

?>



<section class="vh-100 gradient-custom">
   <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
			
			
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    
            <span style="color: red;"> <?php echo $nameError;?> </span>

                    <input value="<?php echo $_SESSION['name'] ?? "" ?>"  type="text" name="name" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
   <span style="color: red;"> <?php echo $emailError;?> </span>

                    <input value="<?php echo $_SESSION['email'] ?? "" ?>" type="text" name="email" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">

       <span style="color: red;"> <?php echo $passwordError;?> </span>
                    <input
                    value="<?php echo $_SESSION['password'] ?? "" ?>"
					    name="password" 
                      type="text"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                    />
                    <label for="birthdayDate" class="form-label">Password</label>
                  </div>

                </div>

<span style="color: red;"> <?php echo $genderError;?> </span>    

                <div class="col-md-6 mb-4">

                   
                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">

                    
      <input class="form-check-input" type="radio" name="gender" 
      <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] =='male' ) echo 'checked' ?>   value="male" 
      id="maleGender"    />
                 
                   <label class="form-check-label" for="maleGender">Male</label>
                 </div>

               <div class="form-check form-check-inline">
                

      <input <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] =='female' ) echo 'checked' ?> class="form-check-input" type="radio" name="gender" value="female" id="FeMale"    />
                 
        <label class="form-check-label" for="FeMale">FeMale</label>
               </div>

                  <div class="form-check form-check-inline">
         <input <?php if(isset($_SESSION['gender']) && $_SESSION['gender'] =='others' ) echo 'checked' ?> class="form-check-input" type="radio" name="gender" value="others"  id="Others"    />

          <label class="form-check-label"  for="Others">Others</label>
                  </div>

                </div>
              </div>

        <span style="color: red;"> <?php echo $tearmsError;?> </span>

           <div class="form-group">
        

          <input  type="checkbox" name="tearms"  id="terms_condition" value="1"> 
                <label for="terms_condition">Terms and Conditions</label>
                
            </div>

            
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
			
			
			
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
   
  </body>
</html>