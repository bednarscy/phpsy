<?php

$CUSTOMER_NAME = $_POST['firstname'];
$CUSTOMER_SURNAME = $_POST['surname'];
$CUSTOMER_COUNTRY = $_POST['country'];

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Dane klienta:</h2>
    <?php

echo "Imię klienta: ".$CUSTOMER_NAME."<br/>";


echo "Nazwisko klienta: ".$CUSTOMER_SURNAME."<br/>";

echo "Kraj wysyłki: ".$CUSTOMER_COUNTRY."<br/>";
    ?>
</body>
</html>