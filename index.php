<html>
<head>mundo de la bitreserva</head>
<body>
<?php echo "Hola mundo de la bitreserva"; 
if (isset($_GET['code'])) {
    echo $_GET['code'];
}else{
    // Fallback behaviour goes here
}

?>
</body>
</html>