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


<?php $a_num = $_POST['view']; ?>

<body>
    <div>
        <h3>Account <?php echo $a_num ?></h3>
    </div>
</body>
<?php
    $cnx = new mysqli('localhost', 'cs331', 'termproject' , 'cs331');

    if ($cnx->connect_error)
        die('Connection failed: ' . $cnx->connect_error);

    $query = "SELECT * FROM transaction WHERE account_number=$a_num ORDER BY dateHour desc";
    $cursor = $cnx->query($query);
?>
<body>
    <div>
        <table>
            <tr>
                <th>Transaction Code</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Timestamp</th>
                <th>Charge</th>
            </tr>
            <?php while($row = $cursor->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['transaction_code']; ?></td>
                    <td><?php echo $row['t_type']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['dateHour']; ?></td>
                    <td><?php echo $row['charge']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
<?php
    $cnx->close();
?>