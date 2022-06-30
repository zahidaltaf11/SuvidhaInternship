<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registration Form</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
    <div class="cont">
     
      <h2>Registration Form</h2>
      <div id = "Reg-form">
         <form action="VolunteersDb.php" method="post" enctype="multipart/form-data">
            <div class="input-name" id="name">
                <i class="fa fa-user lock"></i>
            <input type="text" name="FirstName" placeholder = "First Name" required class="name">
                <i class="fa fa-user lock x"></i>
            <input type="text" name="LastName" placeholder = "Last Name" class="name x" required>

            </div>
            
            <div class="input-name">
               <label for ="Male">Male</label>
               <input type="radio" name="gender" value="m" class="radio">
               <label for ="Female">Female</label>
               <input type="radio" name="gender" value="f" class="radio">
               <label for ="Other">Other</label>
               <input type="radio" name="gender" value="o" class="radio">
            </div>
            <div>
               <div class="input-name">
                <i class="fa fa-phone lock"></i>
               <input type="number" name="ContactNo" placeholder="Phone Number"  class="a"><br>
               </div>
               <div class="input-name">
                <i class="fa fa-envelope email"></i>
               <input type="email" name="Email" placeholder="Email" class="a"><br>
               </div>
              <div class="input-name">
                <!-- <i class="fa fa-address-card lock"></i> -->
                <label for="Address">Address</label>
               <textarea name="Address" placeholder="Enter Your Full Address" class="a"></textarea>
               <br>
            </div>
               <div class="input-name">
                <i class="fa fa-user lock"></i>
               <select name="VolunteerRole" id="" class="a">
                  <option selected disabled value="">Select Role</option>
                  <option value="Volunteer">Volunteer</option>
               </select>
               <br>
            </div>
            <div class="form-group">
        <label class="col-md-4 control-label">Picture</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input name="file"  class="form-control" type="file">
          </div>
        </div>
      </div>
               <div class="input-name">
                <i class="fa fa-user lock"></i>
               <input type="text" name="CurrentJobRole" placeholder="Current Job Rule"   class="a"><br>
               </div>
               <div class="input-name">
                <i class="fa fa-user lock"></i>
               <input type="text" name="CurrentCompany" placeholder="Current Company" class="a"><br>
               </div>
               <div class="input-name">
                <i class="fa fa-user lock"></i>
               <input type="number" name="AadharNo" placeholder="Aadhar Number" class="a"><br>
               </div>
               <div class="input-name">
                <i class="fa fa-whatsapp lock"></i>
               <input type="number" name="WhatsAppNo" placeholder="Whatsapp Number" class="a"><br>
            </div>
               <div class="input-name">
                <i class="fa fa-calendar lock"></i>
               <input type="date" name="DOB" placeholder="" class="a"><br>
            </div>
              
               <div class="input-name">
                <i class="fa fa-lock lock"></i>
               <input type="password" id="password" name="Password" placeholder="Password" class="a" required><br>
            </div>
               <div class="input-name">
                <i class="fa fa-lock lock"></i>
               <input type="password" id="confirm_password" name="ConfirmPassword" placeholder="Confirm Password" class="a" required>
            </div>
            </div>
            </br>
            <div class="input-name">
                <input type="submit" value="Submit" class="btn">
            </div>
      </div>
      </form>
      </div>
    </div>
      <script>
         var password = document.getElementById("password")
           , confirm_password = document.getElementById("confirm_password");
         
         function validatePassword(){
           if(password.value != confirm_password.value) {
             confirm_password.setCustomValidity("Passwords Don't Match");
           } else {
             confirm_password.setCustomValidity('');
           }
         }
         password.onchange = validatePassword;
         confirm_password.onkeyup = validatePassword;
      </script>
   </body>
</html>