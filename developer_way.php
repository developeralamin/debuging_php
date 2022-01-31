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

       $error = "";
       $errorCode = '';

        if($_SERVER['REQUEST_METHOD']=='POST'){
           
         try{
            if(empty($_POST['name']) )
              throw new Exception("Name can not be empty",1);

            if(empty($_POST['email']))
              throw new Exception("email can not be empty",2);

            if(empty($_POST['password']))
              throw new Exception("password can not be empty",3);

            if(empty($_POST['gender']))
              throw new Exception("gender can not be empty",4);

           if(empty($_POST['tearms']))
              throw new Exception("tearms can not be empty",5);
              
         }
         catch(Exception $msg){
             $error =  $msg->getMessage();
             $errorCode =  $msg->getCode();

         }




if($_POST['name'] && $_POST['email']  && md5($_POST['password']) && $_POST['gender'] && $_POST['tearms']) 
             {
          
            echo $_POST['name'] . '<br>';
            echo $_POST['email'] . '<br>';
            echo $_POST['password'] . '<br>';
            echo $_POST['gender'] . '<br>';
            echo $_POST['tearms'] . '<br>';
            exit();
           }

        }
      

        ?>



        <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
			
			
            <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <?php 
                      if($errorCode == 1){
                         ?>
                          <span style="color: red"> <?php echo $error; ?> </span>
                          <?php
                      }


                    ?>

                    

                    <input type="text" name="name" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">

                       <?php 
                      if($errorCode == 2){
                         ?>
                          <span style="color: red"> <?php echo $error; ?> </span>
                          <?php
                      }


                    ?>

                    <input type="email" name="email" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">

                      <?php 
                      if($errorCode == 3){
                         ?>
                          <span style="color: red"> <?php echo $error; ?> </span>
                          <?php
                      }


                    ?> 
                    <input
					    name="password" 
                      type="text"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                    />
                    <label for="birthdayDate" class="form-label">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                      <?php 
                      if($errorCode == 4){
                         ?>
                          <span style="color: red"> <?php echo $error; ?> </span>
                          <?php
                      }


                    ?>
                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">

                    
                 <input class="form-check-input" type="radio" name="gender"  value="option2"  name="inlineRadioOptions"id="maleGender"    />
                 
                   <label class="form-check-label" for="maleGender">Male</label>
                 </div>

               <div class="form-check form-check-inline">
                

                 <input class="form-check-input" type="radio" name="gender" value="option2"  name="inlineRadioOptions"id="FeMale"    />
                 
                   <label class="form-check-label" for="FeMale">FeMale</label>
               </div>

                  <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="gender" value="option2"  name="inlineRadioOptions"id="Others"    />
                 
                   <label class="form-check-label"  for="Others">Others</label>
                  </div>

                </div>
              </div>

                 <?php 
                      if($errorCode == 5){
                         ?>
                          <span style="color: red"> <?php echo $error; ?> </span>
                          <?php
                      }


                    ?>
           <div class="form-group">
        

                <input type="checkbox" name="tearms"  id="terms_condition" value="1"> 
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