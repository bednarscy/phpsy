<?php
define ('TSHIRT', 14.99);
define ('TROUSERS', 49.99);
define ('CAP', 9.99);
define ('SHOES', 100);
define ('VAT', 0.23);

$TSHIRT_QUANTITY = $_POST['tshirt'];
$TROUSERS_QUANTITY = $_POST['trousers'];
$CAP_QUANTITY = $_POST['cap'];
$SHOES_QUANTITY = $_POST['shoes'];
$CUSTOMER_NAME = $_POST['firstname'];
$CUSTOMER_SURNAME = $_POST['surname'];
$CUSTOMER_COUNTRY = $_POST['country'];

$TSHIRT_PRICE = $TSHIRT_QUANTITY * TSHIRT;
$TROUSERS_PRICE = $TROUSERS_QUANTITY * TROUSERS;
$CAP_PRICE = $CAP_QUANTITY * CAP;
$SHOES_PRICE = $SHOES_QUANTITY * SHOES;

$ORDER_VALUE = $TSHIRT_PRICE + $TROUSERS_PRICE + $CAP_PRICE + $SHOES_PRICE;

$TSHIRT_GROSS_PRICE = $TSHIRT_PRICE + $TSHIRT_PRICE * VAT;
$TROUSERS_GROSS_PRICE = $TROUSERS_PRICE + $TROUSERS_PRICE * VAT;
$CAP_GROSS_PRICE = $CAP_PRICE + $CAP_PRICE * VAT;
$SHOES_GROSS_PRICE = $SHOES_PRICE + $SHOES_PRICE * VAT;
$ORDER_GROSS_VALUE = $TSHIRT_GROSS_PRICE + $TROUSERS_GROSS_PRICE + $CAP_GROSS_PRICE + $SHOES_PRICE;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie</title>
</head>
<body>
    <h2>Podsumowanie zakupów:</h2>

 <?php
 if ($TSHIRT_QUANTITY <= 0)
 {
     echo "BRAK DANYCH"."<br/>";
 }  
 else{
echo "Kwota netto zamówionych koszulek: ".$TSHIRT_PRICE."<br/>";}
echo "Kwota netto zamówionych spodni: ".$TROUSERS_PRICE."<br/>";
echo "Kwota netto zamówionych czapek: ".$CAP_PRICE."<br/>";
echo "Kwota netto zamówionych butów: ".$SHOES_PRICE."<br/>";
echo "Wartość netto całego zamówienia: ".$ORDER_VALUE."<br/>";
echo "Kwota brutto zamówionych koszulek: ".$TSHIRT_GROSS_PRICE."<br/>";
echo "Kwota brutto zamówionych spodni: ".$TROUSERS_GROSS_PRICE."<br/>";
echo "Kwota brutto zamówionych butów: ".$SHOES_GROSS_PRICE."<br/>";
echo "Wartość brutto całego zamówienia: ".$ORDER_GROSS_VALUE."<br/>";
echo "Imię klienta: ".$CUSTOMER_NAME."<br/>";
echo "Nazwisko klienta: ".$CUSTOMER_SURNAME."<br/>";
echo "Kraj wysyłki: ".$CUSTOMER_COUNTRY."<br/>";

?> 
<html>
<form action="kasa.php" method="post">
<h2>Kontynuuj zakupy</h2>
<input style="padding: 10px;font-size: 20px;" value="<?php echo $ORDER_GROSS_VALUE?>" type="hidden" name="cash" />
 <input style="WIDTH: 250px;
    height: 50px;
    margin: 35px;" type="submit" value="Potwierdź i przejdź dalej" />
</body>
 </html>