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
        <h3>View Customer</h3>
        <form action="viewinfo.php" method="post">
            <label for="cssn">Enter Customer SSN</label><br>
            <input type="text" id="c" name="c"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>