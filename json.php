 <?php//connect to mysql db
    $con = mysql_connect("username","password","") or die('Could not connect: ' . mysql_error());
    //connect to the employee database
    mysql_select_db("employee", $con);
    ?>

<?php
    //read the json file contents
    $jsondata = file_get_contents('empdetails.json');
?>
<?php
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
?>
<?php
    //get the employee details
    $id = $data['empid'];
    $name = $data['personal']['name'];
    $gender = $data['personal']['gender'];
    $age = $data['personal']['age'];
    $streetaddress = $data['personal']['address']['streetaddress'];
    $city = $data['personal']['address']['city'];
    $state = $data['personal']['address']['state'];
    $postalcode = $data['personal']['address']['postalcode'];
    $designation = $data['profile']['designation'];
    $department = $data['profile']['department'];
?>
<?php
    //insert into mysql table
    $sql = "INSERT INTO tbl_emp(empid, empname, gender, age, streetaddress, city, state, postalcode, designation, department)
    VALUES('$id', '$name', '$gender', '$age', '$streetaddress', '$city', '$state', '$postalcode', '$designation', '$department')";
    if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>	
