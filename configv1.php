<?php

            $server = mysqli_connect("localhost","root", "password");
            
             //$query = mysqli_query($server,"select * from customer");

            mysqli_select_db($server, "polo");
      $result = mysqli_query($server, "SELECT Customer_FirstName FROM customer");
      $result2 = mysqli_query($server, "INSERT INTO customer (Customer_FirstName, Customer_Surname, Customer_Phone, Customer_email, Customer_Address, Quote ) VALUES 
        ('Cathal', 'keany', '564866', 'ck@gmail', 'gort', 1500)");
      while ($row = mysqli_fetch_array($result)) {
        print("<tr>");
        print("<td>" . $row['Customer_FirstName'] . "</td>");
        //print("<td>" . '<a href="/Website/stationMap.php">'. $row['name'] .'</a>' .  "</td>");
        print("</tr>");
      }
?>

 
        <h1>Quote</h1>
      
    
    <form method="post" action="">
    <label>First Name*:</label>&nbsp
    <input type="text" name="fName" id = "fname">&nbsp
    <label>Last Name*:</label>&nbsp
    <input type="text" name="lName">&nbsp
    <label>Age*:</label>&nbsp
    <input type="text" name="age">&nbsp
    <br>
    <br>
    <label>Phone:</label>&nbsp
    <input type="text" name="phone">
    <label>Email*:</label>&nbsp
    <input type="text" name="eMail">&nbsp
    <br>
    <br>
    <label>Address*:</label>&nbsp
    <input type="text" name="address">&nbsp
    <br>
    <br>
    <label>Europe/Us</label>&nbsp
    <label>
        <input type="radio" name="addRemoveRadioGrp" value="radio" id="addRemoveRadioGrp_0">
        Europe</label>
        <label>
        <input type="radio" name="addRemoveRadioGrp" value="radio" id="addRemoveRadioGrp_1">
        US</label>
        <br>
        <br>
        <label>Smoker/Non Smoker</label>&nbsp
        <label>
        <input type="radio" name="smoke" value="radio" id="smoke_0">
        Smoker</label>
        <label>
        <input type="radio" name="smoke" value="radio" id="smoke_1">
        Non Smoker</label>

        <!-- <div id = name> <?php echo $total ?> </div> -->

     <form>
        <input id = "submit" type="submit" value="Get Quote">
    </form>
   

         <!-- <?php
        if(isset($_POST['submit'])){
        $int = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
        $ageInt = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $total = 1000;
        $percentage = 0;
        $location = $_POST['addRemoveRadioGrp'];
        $smoker = $_POST['smoke'];
        //$fname = document.getElementById.value("fname");
        //console.log(fname);

         if($ageInt >= 65)
         {
             $percentage +=20;
         }
        if($location == "addRemoveRadioGrp_1")
        {
            $percentage += 20;
        }
        if($smoker == "smoke_0")
        {
        $percentage += 20;
        }

        $total = ($total/100* $percentage) + $total;
        // echo $total;
        print $total;

        if ( ! empty ($_POST )){
         $mysqli = new mysqli ('localhost','root', 'password', 'polo');
        

    if( $mysqli->connect_error ){
        die( 'Connect Error: ' . $mysqli->connect_error . ': ' . $mysqli->connect_error );
    }
        $sql = "INSERT INTO customer (Customer_FirstName, Customer_Surname, Customer_Phone, Customer_email, Customer_Address, Quote ) VALUES 
        ('Cathal', 'keany', '564866', 'ck@gmail', 'gort', 1000)";
     
        if($mysqli->query($sql)== true)
        {
            echo "successfull";
        }

        else
            console.log("not working") ;




     //$insert = $mysqli->query($sql);

//echo "Your quote is" + $total;
     $mysqli->close();


}

}      
        ?>



        

<br>
<br>
<div id = "total" value= "<?php echo $total?>">   </div> --> -->