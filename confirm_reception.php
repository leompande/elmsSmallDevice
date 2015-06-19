<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<body>
<h1 style="background-color:#E6E6FA;">ELMIS DATA ENTRY FORMS</h1>

<table>
    <tr>
<!--        <td><a href="index.php">Arrival</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>-->
        <td><a href="receive.php">Receive Package</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="prepare.php">Prepare package</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="stock.php">Stock Items</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="login.php">Logout</a></td>
    </tr>
</table>



        <h1>Confirm Receiving Package</h1>
        <table>
            <tr>
                <td>Confirm Receiving package with lot number : <span id="sscc_number"><?php echo @$_POST['lot'];?></span></td>

                <td><input type="submit" value="cancel"  id="cancel"/></td>
            </tr>
        </table>
        </br>

        <table border="1" cellspacing="0" cellpadding="0">
            <thead>
            <tr><th>GTN</th><th>Description</th><th>Lot</th><th>Expiry</th><th>Vials</th><th>Boxes</th></tr>
            </thead>
            <tr>
                <td>1234454656</td>
                <td>PVC 13</td>
                <td>j943111</td>
                <td>2017-02-28</td>
                <td>608000</td>
                <td>608000</td>
            </tr>
        </table>

</br>
        <table>
            <tr><td>Quantity Okay</td><td><select><option>Yes</option><option>No</option></select></td></tr>
            <tr><td>Physical Damage</td><td><select><option>None</option><option>Damaged</option></select></td></tr>
            <tr><td>VVM Status</td><td><select><option>Good</option><option>Normal</option><option>Bad</option></select></td></tr>
            <tr><td>Temp monitors Status</td><td><select><option>Good</option><option>Normal</option><option>Bad</option></select></td></tr>

        </table>

</br>
        <table>
            <tr>
                <td>Comments and Observations</td>
            </tr>
            <tr>
                <td><textarea></textarea></td>
            </tr>
        </table>
</br>
        <table><tr><td><input type="submit"></td></tr></table>



</body>
</html>
