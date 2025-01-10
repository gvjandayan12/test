<?php 
    session_start();
    include('sql.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
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

    <!-- Car Listings -->
    <main>
        <section class="car-listings">
            <h1>Car Listings</h1>
            <button onclick="window.location.href='car-details.php'">Add New Car</button>
            <table>
                <thead>
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Price</th>
                
                        
                    </tr>
                </thead>
                <tbody>
            

                    <?php 
                        
                        $select = "SELECT * FROM cars";
                        $SELECT = mysqli_query($sql_connection, $select);

                        if(mysqli_num_rows($SELECT) > 0){
                            while($qwe = mysqli_fetch_assoc($SELECT)){
                                echo "<tr>" .

                                    "<td>" . $qwe['Brand'] . "</td>" .
                                    "<td>" . $qwe['Model'] . "</td>" .
                                    "<td>" . $qwe['Year'] . "</td>" .
                                    "<td>" . $qwe['Price'] . "</td>" .

                                "</tr>";


                            };

                          
                        }
                    
                    
                    ?>


                </tbody>
            </table>
        </section>
    </main>


</body>
</html>

<?php 

?>
