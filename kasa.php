<?php 
$CASH_SUMMARY = $_POST['cash'];
$RESPONSE = "Gratulujemy zakupu!";
?>
<html>
<h1 style="color: #e43737;
    margin: auto;
    width: 700px;
    padding-top: 250px;
    text-shadow: 1px 1px #000;">
<?php echo "$RESPONSE "."Wydałeś "."$CASH_SUMMARY zł";?></html>