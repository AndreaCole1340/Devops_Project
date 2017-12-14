
    

 <h1>Quote</h1>
      
    
    <form method="post" action="">
    <label>Age*:</label>&nbsp
    <input type="text" name="age">&nbsp
    <br>
    <br>
    <label>Europe/Us</label>&nbsp
    <input type="text" name="location">&nbsp
    <br>
    <br>
    <label>smoker</label>&nbsp
    <input type="text" name="smoker">&nbsp
    
<input type="submit" name = "submit" value="Get Quote"  >
    </form>
        
        <?php
        if(isset($_POST['submit'])){

        
        
            if(isset($_POST['location'])){ $location = $_POST['location']; }
            if(isset($_POST['smoker'])){ $smoker = $_POST['smoker']; }
            if(isset($_POST['age'])){ $age = $_POST['age']; }


            $total = 500;
            $percentage = 0;

            if($location == "europe")
            {
                $location = "1";
            }

            if($location == "usa")
            {
                $location = "2";
                $percentage += 20;
            }

            

            if($smoker == "yes")
            {
                $percentage += 20;
            }
          

            if($age >= 65)
            {
                $percentage += 20;
            }

            $total = ($total/100*$percentage) + $total;


            
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "link192_insurance";
            


            $servername = "localhost";
            $username = "link192_admin";
            $password = "*192*";
            $dbname = "link192_insurance";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO quote (quoteID, clientID, euUsa, price) VALUES (1, 2, '{$location}', '{$total}')";
            

            if ($conn->query($sql) === TRUE) {
                echo("New record created successfully");
            } 

            $conn->close();
}

else
echo "";
    
        ?>
     



        

<br>
<br>
    

