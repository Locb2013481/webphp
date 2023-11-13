<?php
// echo "<script>
//  const isYes = confirm('xac nhan')
//  if(isYes === false) {
//     history.back()
//  }
// </script>";

include "../connect.php";
$id = $_GET['deleteid'];
echo $id;

$sql = "DELETE FROM `product` WHERE `id` = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: ../admin/allProduct.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>