<?php



if (!$loggedIn) {
    header("Location: SignInUp.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $table = $_POST["table"];
    $itemName = $_POST["item_name"];
    $price = $_POST["price"];
    $webUri = $_POST["web_uri"];

    $host = "localhost";
    $dbname = "dcarr10";
    $username = "root";
    $password = "";;

    $conn = new mysqli($host, $dbname, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $escapedItemName = $conn->real_escape_string($itemName);
    $escapedWebUri = $conn->real_escape_string($webUri);
    $sql = "INSERT INTO $table (item_name, price, web_uri) VALUES ('$escapedItemName', '$price', '$escapedWebUri')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item - Family Tree Deal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Add Item</h1>
    <form action="AddItem.php" method="post">
        <label for="table">Select Table:</label>
        <select id="table" name="table">
            <option value="toys">Toys</option>
            <option value="food">Food</option>
            <option value="entertainment">Entertainment</option>
        </select><br>

        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br>

        <label for="web_uri">Web URI:</label>
        <input type="text" id="web_uri" name="web_uri" required><br>

        <button type="submit">Add Item</button>
    </form>
</body>
</html>