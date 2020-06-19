<head>
<?php
    include_once ("Book_Model.php");
?>
</head>
<body>
    <h1>Danh sach cac sach</h1>
    <?php
    $bookModel = new Book_Model();
    $books = $bookModel->getAllBooks();
    $i = 1;
    echo "<table>";
    echo "<tr><td>TT</td><td>ISBN</td><td>Title</td>
    <td>Author</td><td>Price</td><td>Edit/Delete</td></tr>";
    while ($row = mysqli_fetch_array($books)){
        echo "<tr>";
        $isbn = $row['isbn'];
        echo "<td>" . $i . "</td>";
        echo "<td>" . $row['isbn'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        $link = "displaybooks.php?isbn=$isbn";
        echo "<td><a href='" . $link . "'> Edit </a></td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    ?>
</body>