<?php 
    session_start();
    include('sql.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="cars.php">Cars</a></li>
                <li><a href="customer.php">Customers</a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
        </nav>
    </header>

    <!-- Car Form -->
    <main>
        <section class="car-details">
            <h1>Add/Edit Customer</h1>
            <form action="#" method="POST">
                <label for="make">Customer ID</label>
                <input type="text" id="make" name="make" placeholder="Enter make">

                <label for="model">Name</label>
                <input type="text" id="model" name="model" placeholder="Enter model">

                <label for="year">Phone</label>
                <input type="number" id="year" name="year" placeholder="Enter year">

                <label for="price">Email</label>
                <input type="text id="price" name="price" name="email" placeholder="Enter price">

                <button type="submit" name="submit">Save Customer"</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Car Management System</p>
    </footer>

</body>
</html>

<?php 

    $carmake = $_POST['make'];
    $carmodel = $_POST['model'];
    $caryear = $_POST['year'];
    $carprice = $_POST['price'];
    $email = $_POST['email'];

    $_SESSION['carmake'] = $carmake;


    if(isset($_POST['submit'])){
        $addcar = "INSERT INTO customers(CustomerID, Name, Phone, Email)
                    VALUES('$carmake', '$carmodel', '$caryear', '$carprice', '$email')";

                    $port = mysqli_query($sql_connection, $addcar);

                    if(mysqli_num_rows($port) > 0){
                        while($test = mysqli_fetch_assoc($port)){
                            echo "<tr>" .

                            "<td>" . $port['CustomerID'] . "</td>" .
                            "<td>" . $port['Name'] . "</td>" .
                            "<td>" . $port['Phone'] . "</td>" .
                            "<td>" . $port['Email'] . "</td>" .

                        "</tr>";
                        }
                    }
    }

    mysqli_close($sql_connection);

?>