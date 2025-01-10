<?php 
    session_start();
    include('sql.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Listings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="cars.php">Cars</a></li>
                <li><a href="customer.php">Customer </a></li>
                <li><a href="search.php">Search</a></li>
            </ul>
        </nav>
    </header>

    <!-- Car Listings -->
    <main>
        <section class="customer-listings">
            <h1>Customers</h1>
            <button onclick="window.location.href='customer-details.php'">Insert Customer</button>
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                
                        
                    </tr>
                </thead>
                <tbody>
            

                    <?php 
                        
                        $select = "SELECT * FROM customers";
                        $SELECT = mysqli_query($sql_connection, $select);

                        if(mysqli_num_rows($SELECT) > 0){
                            while($qwe = mysqli_fetch_assoc($SELECT)){
                                echo "<tr>" .

                                    "<td>" . $qwe['CustomerID'] . "</td>" .
                                    "<td>" . $qwe['Name'] . "</td>" .
                                    "<td>" . $qwe['Phone'] . "</td>" .
                                    "<td>" . $qwe['Email'] . "</td>" .

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
