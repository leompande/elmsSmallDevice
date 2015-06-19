<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<script src="js/jquery-1.11.3.min.js"></script>
<body>
<h1 style="background-color:#E6E6FA;">ELMIS Electronic Logistics Management Information System</h1>
<script>
$(document).ready(function(){
$("#lot_number_field").focus();
    $( "#lot_number_field" ).keyup(function( event ) {
       alert($( "#lot_number_field").val());
    }).keydown(function( event ) {

    });

});
</script>
<table>
    <tr>
<!--        <td><a href="index.php">Arrival</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>-->
        <td><a href="receive.php">Receive Package</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="prepare.php">Prepare package</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="stock.php">Stock Items</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="login.php">Logout</a></td>
    </tr>
</table>

        <h1>Package Arrival</h1>
        <table>
            <tr>
                <td>Receiving Package With SSCC:<span id="sscc_number"><?php echo $_POST['sscc']; ?></span></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Scan Lot Number</td>
                <td><input type="text"   name="lot_number" id="lot_number_field"/></td>
            </tr>
        </table>

        <table border="1" cellspacing="0" cellpadding="0" id="description_table">
            <thead>
            <tr><th>GTN</th><th>Description</th><th>Lot</th><th>Expiry</th><th>Boxes</th></tr>
            </thead>
            <tr>
                <td>1234454656</td>
                <td>PVC 13</td>
                <td>pitfizer</td>
                <td>j943111</td>
                <td>608000</td>
            </tr>
            <tr>
                <td>1234454656</td>
                <td>PVC 13</td>
                <td>pitfizer</td>
                <td>2017-02-28</td>
                <td>608000</td>
            </tr>
        </table>



</body>
</html>
