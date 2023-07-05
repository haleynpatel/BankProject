<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HS Banks</title>
    <nav>
        <li><a href="index.php">Home</a></li>
        <li><a href="customerdata.php">View Customers</a></li>
        <li><a href="customeraccounts.php">View Accounts</a></li>
        <li><a href="createcustomer.php">Create Customer</a></li>
    </nav>
</head>
<!-- include css and js files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">

<body>
    <div>
        <form action="viewinfo.php" method="post">
            <label for="cssn">Enter Customer SSN</label><br>
            <input type="text" id="c" name="c"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
<?php
    $cnx = new mysqli('localhost', 'cs331', 'termproject' , 'cs331');
    if ($cnx->connect_error)
        die('Connection failed: ' . $cnx->connect_error);


    $cssn = $_POST['c'];
    $query = "SELECT * FROM Customer WHERE cssn=$cssn";
    $cursor = $cnx->query($query);
?>
<div>
    <table>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Apt Number</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
        </tr>
        <?php while($row = $cursor->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['middle_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['apt_num']; ?></td>
                <td><?php echo $row['street_name']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state_name']; ?></td>
                <td><?php echo $row['zipcode']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php
    $cnx->close();
?>
