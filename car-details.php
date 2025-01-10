<?php 
    session_start();
    include('sql.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
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
            <h1>Add/Edit Car</h1>
            <form action="#" method="POST">
                <label for="make">Car Make</label>
                <input type="text" id="make" name="make" placeholder="Enter make">

                <label for="model">Car Model</label>
                <input type="text" id="model" name="model" placeholder="Enter model">

                <label for="year">Car Year</label>
                <input type="number" id="year" name="year" placeholder="Enter year">

                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Enter price">

                <button type="submit" name="submit">Save Car"</button>
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

    $_SESSION['carmake'] = $carmake;


    if(isset($_POST['submit'])){
        $addcar = "INSERT INTO cars(Brand, Model, Year, Price)
                    VALUES('$carmake', '$carmodel', '$caryear', '$carprice')";

                    mysqli_query($sql_connection, $addcar);
    }

    mysqli_close($sql_connection);

?>