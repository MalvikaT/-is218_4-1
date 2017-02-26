<?php
require_once('database.php');
// Get ID

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($category_id != false) {
    $query = 'DELETE FROM guitar1_categories
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Category List page
include('category_list.php');
