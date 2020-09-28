  <?php
      session_start();
      function OpenCon()
       {
       $dbhost = "localhost";
       $dbuser = "root";
       $dbpass = "123";
       $db = "foodex0.1";
       $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
       $username=$_POST["username"];
       $password=$_POST["password"];
       $conf_pass=$_POST["confirm_password"];
       $email=$_POST["email"];
       $address=$_POST["address"];
       $contact=$_POST["contact"];
       $query1 = "SELECT user_name FROM users WHERE user_name = '$username'";
       $query2 = "SELECT email FROM users WHERE email = '$email'";
       $run_q1 = mysqli_query($conn,$query1);
       $run_q2=mysqli_query($conn,$query2);
        if (mysqli_num_rows($run_q1) > 0 && mysqli_num_rows($run_q2) > 0) {
           echo "Already registered. Please Login";
         }
         elseif (mysqli_num_rows($run_q1) == 1) {
           echo "Username already available, try another one...!";
         }
         elseif (mysqli_num_rows($run_q2) == 1) {
           echo "Email already available, try another one...!";
         }
         else{
           if ($password == $conf_pass) {
             $query3="INSERT INTO users(role_id,user_name,address,contact_no,email,password) VALUES ('2','$username','$address','$contact','$email','$password') ";
             $result = mysqli_query($conn,$query3);
             if($result){
               header('location:login.php');
             }
           }
           else{
             echo "Password not matched";
           }

         }
     }
       OpenCon();
?>
