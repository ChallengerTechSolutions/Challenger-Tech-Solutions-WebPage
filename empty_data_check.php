<?php 
include 'mysqli_connect.php';
include 'form_validation.php';

table
usersName (varchar) | usersEmail (varchar) | usersPassword (varchar)

DELETE FROM `test` WHERE
(`usersName` IS NULL OR `usersName` = '')
AND
(`usersEmail` IS NULL OR `usersEmail` = '')
AND
(`usersPassword` IS NULL OR `usersPassword` = '')
?>