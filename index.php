<!DOCTYPE HTML>  
<html>
<head>
    <title>Data Validation</title>
    <style>
      .template {width:523px; margin: 0 auto;background:  #808080;}
      .header, .footer{text-align: center;background: #00bfff;padding: 10px;}
      .maincontent{min-height: 565px;padding: 10px;}
      .header h2, .footer h2{margin: 0;}
    </style>
</head>
<body>  
  <div class="template">
     <section class="header">
        <h2>DATA VALIDATION </h2>
     </section>


    <section class="maincontent">
     <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
              <tr>
                  <td>Name:</td>
                  <td><input type ="text" name="name" required="" /></td>
              </tr>

              

              

              
              <tr>
                  <td>E-mail:</td>
                  <td><input type ="text" name="email" required="" /></td>
              </tr>
              <tr>
                  <td>Gender:</td>
                  <td>
                    <input type="radio" name="gender" value="male"/>Male
                    <input type="radio" name="gender" value="male"/>Female
                  </td>
              </tr>
              <tr>
                  <td>Comment</td>
                  <td><input type ="text" name="comment"/></td>
              </tr>
                <tr>
                  <td></td>
                  <td><input type = "submit" name ="submit" value="submit"/></td>

              </tr>
          </table>
        </form>

                    <?php
                      
                      $name = $email = $gender = $comment =  "";

                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = test_input($_POST["name"]);
                      
                        $email = test_input($_POST["email"]);
                        $comment = test_input($_POST["comment"]);
                        $gender = test_input($_POST["gender"]);
                       
                        //$Roll= test_input($_POST["Roll"]);
                        //$Registration  = test_input($_POST["Registration"]);
                       


                      echo "Name:".$name." </br>";
                      echo "E-mail:".$email." </br>";
                      echo "comment:".$comment." </br>";
                      echo "gender:".$gender." ";
                      }

                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                      }
                      ?>




     </section>

     <section class="footer">
        <h2>Design by Saddam</h2>
     </section>
 </div>

</body>
</html>