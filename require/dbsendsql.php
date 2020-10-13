<?php
echo "<br>"
try {
    $conn->commit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>