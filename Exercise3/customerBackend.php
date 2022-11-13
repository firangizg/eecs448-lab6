<link rel="stylesheet" type="text/css" href="style.css">
<?php
    function welcome() {
        $username = $_POST["username"];
        $password = $_POST["userPassword"];

        echo "<h1>Coffee Shop</h1>";
        echo "<h3>Welcome " . $username . "!</h3>";
        echo "<h3>Password: " . $password . "</h3>";
        echo "<h4>Here is your receipt: <h4>";
    }

    function receipt() {
        $amount1 = $_POST["Latte"];
        $amount2 = $_POST["Cappucino"];
        $amount3 = $_POST["Mocha"];
        $amount4 = $_POST["Americano"];
        $amount5 = $_POST["ColdBrew"];

        $shippingMethod = $_POST["shipping"];
        $shippingCost = 0;

        if ($shippingMethod == "$50.00 over night")
        {
            $shippingCost=50;
        }
        if ($shippingMethod == "$5.00 three day")
        {
            $shippingCost=5;
        }
        if ($amount1 == 0 && $amount2 == 0 && $amount3 == 0 && $amount4 == 0 && $amount5 == 0)
        {
            $shippingCost=0;
        }

        echo "<table>";
        echo "<tr>";
        echo "<td>" . "&nbsp" . "</td>";
        echo "<td><strong>" . "Quantity" . "</strong></td>";
        echo "<td><strong>" . "Cost Per Item" . "</strong></td>";
        echo "<td><strong>" . "Sub Total" . "</strong></td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Cafè Latte" . "</strong></td>";
        echo "<td>" . $amount1 . "</td>";
        echo "<td>" . "$4.25" . "</td>";
        echo "<td>$" . 4.25*$amount1 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Cappucino" . "</strong></td>";
        echo "<td>" . $amount2 . "</td>";
        echo "<td>" . "$4.25" . "</td>";
        echo "<td>$" . 4.25*$amount2 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Cafè Mocha" . "</strong></td>";
        echo "<td>" . $amount3 . "</td>";
        echo "<td>" . "$5.05" . "</td>";
        echo "<td>$" . 5.05*$amount3 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Americano" . "</strong></td>";
        echo "<td>" . $amount4 . "</td>";
        echo "<td>" . "$3.45" . "</td>";
        echo "<td>$" . 3.45*$amount4 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Cold Brew" . "</strong></td>";
        echo "<td>" . $amount5 . "</td>";
        echo "<td>" . "$4.45" . "</td>";
        echo "<td>$" . 4.45*$amount5 . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><strong>" . "Shipping Cost" . "</strong></td>";
        echo '<td colspan="2">' . $shippingMethod . "</td>";
        echo "<td>$" . $shippingCost . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo '<td colspan="3"><strong>' . "Total Cost" . "</strong></td>";
        echo "<td>$" . ((4.25*$amount1)+(4.25*$amount2)+(5.05*$amount3)+(3.45*$amount4)+(4.45*$amount5)+$shippingCost) . "</td>";
        echo "</tr>";
        echo "</table>";
    }

    echo welcome();
    echo receipt();
?>