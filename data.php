<html>
<?php
include_once 'includes/dbh_connect.php';

echo "<center>"."CUSTOMER DETAIL - Entries and imformation made by customers"."</center><br>";

$result = mysqli_query($conn,"SELECT * FROM CUSTOMER_DETAIL");

echo "<table border='1'>
<tr>
<th>REG_ID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>USERNAME</th>
<th>E_MAIL</th>
<th>CONTACT</th>
<th>PASSWORD</th>
<th>ROOM_TYPE</th>
<th>REG_DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['REG_ID'] . "</td>";
echo "<td>" . $row['FIRST_NAME'] . "</td>";
echo "<td>" . $row['LAST_NAME'] . "</td>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>" . $row['E_MAIL'] . "</td>";
echo "<td>" . $row['CONTACT_NO'] . "</td>";
echo "<td>" . $row['PASSCODE'] . "</td>";
echo "<td>" . $row['ROOM_TYPE'] . "</td>";
echo "<td>" . $row['REG_DATE'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "<br><br><center>"."CUSTOM ROOMS - Entries and imformation made by customers"."</center><br>";

$result = mysqli_query($conn,"SELECT * FROM CUSTOM_ROOMS");

echo "<table border='1'>
<tr>
<th>ROOM_NO</th>
<th>REG_ID</th>
<th>ROOM_TYPE</th>
<th>ROOM_SCENE</th>
<th>PERSON</th>
<th>ADULT</th>
<th>CHILD</th>
<th>CHECKIN</th>
<th>CHECKOUT</th>
<th>WIFI</th>
<th>TRAVEL_GUIDE</th>
<th>SPECIAL_INSTRUCT</th>
<th>BOOK_DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ROOM_NO'] . "</td>";
echo "<td>" . $row['REG_ID'] . "</td>";
echo "<td>" . $row['ROOM_TYPE'] . "</td>";
echo "<td>" . $row['ROOM_SCENE'] . "</td>";
echo "<td>" . $row['PERSON'] . "</td>";
echo "<td>" . $row['ADULT'] . "</td>";
echo "<td>" . $row['CHILD'] . "</td>";
echo "<td>" . $row['CHECKIN'] . "</td>";
echo "<td>" . $row['CHECKOUT'] . "</td>";
echo "<td>" . $row['WIFI'] . "</td>";
echo "<td>" . $row['TRAVEL_GUIDE'] . "</td>";
echo "<td>" . $row['SPECIAL_INSTRUCT'] . "</td>";
echo "<td>" . $row['BOOK_DATE'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "<br><br><center>"."PREMIUM ROOMS - Entries and imformation made by customers"."</center><br>";

$result = mysqli_query($conn,"SELECT * FROM PREMIUM_ROOMS");

echo "<table border='1'>
<tr>
<th>ROOM_NO</th>
<th>REG_ID</th>
<th>ROOM_TYPE</th>
<th>ROOM_SCENE</th>
<th>PERSON</th>
<th>ADULT</th>
<th>CHILD</th>
<th>CHECKIN</th>
<th>CHECKOUT</th>
<th>WIFI</th>
<th>TRAVEL_GUIDE</th>
<th>SPECIAL_INSTRUCT</th>
<th>BOOK_DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ROOM_NO'] . "</td>";
echo "<td>" . $row['REG_ID'] . "</td>";
echo "<td>" . $row['ROOM_TYPE'] . "</td>";
echo "<td>" . $row['ROOM_SCENE'] . "</td>";
echo "<td>" . $row['PERSON'] . "</td>";
echo "<td>" . $row['ADULT'] . "</td>";
echo "<td>" . $row['CHILD'] . "</td>";
echo "<td>" . $row['CHECKIN'] . "</td>";
echo "<td>" . $row['CHECKOUT'] . "</td>";
echo "<td>" . $row['WIFI'] . "</td>";
echo "<td>" . $row['TRAVEL_GUIDE'] . "</td>";
echo "<td>" . $row['SPECIAL_INSTRUCT'] . "</td>";
echo "<td>" . $row['BOOK_DATE'] . "</td>";
echo "</tr>";
}
echo "</table>";

echo "<br><br><center>"."SUPER DELUXE ROOMS - Entries and imformation made by customers"."</center><br>";

$result = mysqli_query($conn,"SELECT * FROM SUPER_DELUXE_ROOMS");

echo "<table border='1'>
<tr>
<th>ROOM_NO</th>
<th>REG_ID</th>
<th>ROOM_TYPE</th>
<th>ROOM_SCENE</th>
<th>PERSON</th>
<th>ADULT</th>
<th>CHILD</th>
<th>CHECKIN</th>
<th>CHECKOUT</th>
<th>WIFI</th>
<th>TRAVEL_GUIDE</th>
<th>SPECIAL_INSTRUCT</th>
<th>BOOK_DATE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ROOM_NO'] . "</td>";
echo "<td>" . $row['REG_ID'] . "</td>";
echo "<td>" . $row['ROOM_TYPE'] . "</td>";
echo "<td>" . $row['ROOM_SCENE'] . "</td>";
echo "<td>" . $row['PERSON'] . "</td>";
echo "<td>" . $row['ADULT'] . "</td>";
echo "<td>" . $row['CHILD'] . "</td>";
echo "<td>" . $row['CHECKIN'] . "</td>";
echo "<td>" . $row['CHECKOUT'] . "</td>";
echo "<td>" . $row['WIFI'] . "</td>";
echo "<td>" . $row['TRAVEL_GUIDE'] . "</td>";
echo "<td>" . $row['SPECIAL_INSTRUCT'] . "</td>";
echo "<td>" . $row['BOOK_DATE'] . "</td>";
echo "</tr>";
}
echo "</table>";
		
?>		
</html>