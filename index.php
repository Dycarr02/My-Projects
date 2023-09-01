<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Tree Deals</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Family Tree Deals</h1>
        <div class="sign-in-up">
            <a href="SignInUp.html">Sign In / Sign Up</a>
        </div>
    </header>
    <nav>
        <a href="#entertainment">Entertainment</a>
        <a href="#food">Food</a>
        <a href="#toys">Toys</a>
    </nav>
    <div class="search-filter">
        <input type="text" placeholder="Search deals...">
        <label for="category-filter">Filter by category:</label>
        <select id="category-filter">
            <option value="all">All</option>
            <option value="entertainment">Entertainment</option>
            <option value="food">Food</option>
            <option value="toys">Toys</option>
        </select>
    </div>

<main>
    <?php
    //testing 1 2 3
    $host = "localhost";
    $dbname = "dcarr10";
    $username = "root";
    $password = "";

    $conn = new mysqli($host, $dbname, $username, $password);

    $tables = array("toys", "food", "entertainment");

    foreach ($tables as $table) {
        echo "<section id='" . $table . "'>";
        echo "<h2>" . ucfirst($table) . "</h2>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>" . ucfirst($table) . " Item</th>";
        echo "<th>Price</th>";
        echo "<th>Web URI</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        $query = "SELECT * FROM " . $table;
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['item_name'] . "</td>";
                echo "<td>$" . $row['price'] . "</td>";
                echo "<td>" . $row['web_uri'] . "</td>";
                echo "</tr>";
            }
        }

        echo "</tbody>";
        echo "</table>";

        echo "<div class='add-item-btn-container'>";
        echo "<a class='add-item-btn' href='AddItem.php'>Add Item</a>";
        echo "</div>";

        echo "</section>";
    }

    mysqli_close($conn);
    ?>
</main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Family Tree Deals. All rights reserved.</p>
    </footer>
</body>

</html>
