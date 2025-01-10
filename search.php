    <?php 
        session_start();
        include('sql.php');

        $carmake = $_SESSION['carmake'];

    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style.css">
        <title>Search Cars</title>
    
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

        <!-- Search Form -->
        <main>
            <section class="car-search">
                <h1>Search Cars</h1>
                <form action="#" method="POST">
                    <label for="make">Make</label>
                    <input type="text" id="make" name="make" placeholder="Search by make">

                    <button type="submit" name="submit">Search</button>


                </form>
                
                <!-- Display search results 
                <h2>Search Results</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                
                    </tbody>
                </table>
                -->
            </section>
    

    </body>
    </html>

    <?php 


        if(isset($_POST['submit'])){
            $make = $_POST['make'];

            $search = "SELECT * FROM cars";
            $look = mysqli_query($sql_connection, $search);

            if(mysqli_num_rows($look) > 0){
                while($find = mysqli_fetch_assoc($look)){
                    if($make == $find['Brand']){
                    
                        echo "Brand -" . "            " . $find['Brand'] . "<br>";
                        echo "Model -" . "            " . $find['Model'] . "<br>";
                        echo "Year -" . "             " . $find['Year'] . "<br>";
                        echo "Price -" . "            " . $find['Price'] . "<br>";
                        }
                }

        
            }
        }

        /*
        $sd = "DELETE FROM cars";
        mysqli_query($sql_connection, $sd);
        */

        /*
        $ds = "UPDATE cars SET Brand = 'Toyota' WHERE Brand = 'Aenan'"; 
        mysqli_query($sql_connection, $ds);

        mysqli_close($sql_connection);
        */
        
        /*
        $ds = "SELECT * FROM cars";
        $find = mysqli_query($sql_connection, $ds);

        if(mysqli_num_rows($find) > 0){
            while($result = mysqli_fetch_assoc($find)){
                echo "Brand :           " . $result['Brand'] . "<br>";
                echo "Model :           " . $result['Model'] . "<br>";
                echo "Price :           " . $result['Price'] . "<br>";
                echo "Year :           " . $result['Year'] . "<br>";
            }
        }
            */
    ?>