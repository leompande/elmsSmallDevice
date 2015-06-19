<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<body>
<h1 style="background-color:#E6E6FA;">ELMIS Electronic Logistics Management Information System</h1>

<table>
    <tr>
<!--        <td><a href="index.php">Arrival</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>-->
        <td><a href="receive.php">Receive Package</a>  &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="prepare.php">Prepare package</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="stock.php">Stock Items</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;</td>
        <td><a href="login.php">Logout</a></td>
    </tr>
</table>
<section>


    <section id="package_arrival_1">
        <h1>Package Arrival</h1>
        <form action="receive.php" method="POST" >
            <table>
                <tr>
                    <td>Scan the SSCC</td>
                    <td><input type="text" name="sscc" /></td>
                    <td><input type="submit" value="Scan"  id="scan_sscc"/></td>
                </tr>
            </table>
        </form>


    </section>


</body>
</html>
