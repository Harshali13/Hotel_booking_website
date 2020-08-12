<?php
//creating database at once
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "sakura_sky";

$conn = new mysqli($servername, $username, $password,$dbname);
/*Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/


$sql = "CREATE TABLE CUSTOMER_DETAIL (
REG_ID INT(6) PRIMARY KEY AUTO_INCREMENT,
FIRST_NAME VARCHAR(30) NOT NULL,
LAST_NAME VARCHAR(30) NOT NULL,
USERNAME VARCHAR(30) NOT NULL,
E_MAIL VARCHAR(30) NOT NULL,
CONTACT_NO VARCHAR(12) NOT NULL,
PASSCODE VARCHAR(20) NOT NULL,
ROOM_TYPE VARCHAR(20) NOT NULL,
REG_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

/*if ($conn->query($sql) === TRUE) {
    echo "Table customer_detail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

$sql = "CREATE TABLE CUSTOM_ROOMS (
ROOM_NO INT(4) PRIMARY KEY,
REG_ID INT(6) NOT NULL,
FOREIGN KEY(REG_ID) REFERENCES CUSTOMER_DETAIL(REG_ID),
ROOM_TYPE VARCHAR(20) NOT NULL,
ROOM_SCENE VARCHAR(20) NOT NULL,
PERSON INT(2) NOT NULL,
ADULT INT(2) NOT NULL,
CHILD INT(2) NOT NULL,
CHECKIN VARCHAR(12) NOT NULL,
CHECKOUT VARCHAR(12) NOT NULL,
WIFI VARCHAR(5) NOT NULL,
TRAVEL_GUIDE VARCHAR(5) NOT NULL,
SPECIAL_INSTRUCT VARCHAR(200),
BOOK_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

/*if ($conn->query($sql) === TRUE) {
    echo "Table custom rooms created successfully";
}-- else {
    echo "Error creating table: " . $conn->error;
}*/

$sql = "CREATE TABLE PREMIUM_ROOMS (
ROOM_NO INT(4) PRIMARY KEY,
REG_ID INT(6) NOT NULL,
FOREIGN KEY(REG_ID) REFERENCES CUSTOMER_DETAIL(REG_ID),
ROOM_TYPE VARCHAR(20) NOT NULL,
ROOM_SCENE VARCHAR(20) NOT NULL,
PERSON INT(2) NOT NULL,
ADULT INT(2) NOT NULL,
CHILD INT(2) NOT NULL,
CHECKIN VARCHAR(12) NOT NULL,
CHECKOUT VARCHAR(12) NOT NULL,
WIFI VARCHAR(5) NOT NULL,
TRAVEL_GUIDE VARCHAR(5) NOT NULL,
SPECIAL_INSTRUCT VARCHAR(200),
BOOK_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

/*if ($conn->query($sql) === TRUE) {
    echo "Table premium rooms created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
$sql = "CREATE TABLE SUPER_DELUXE_ROOMS (
ROOM_NO INT(4) PRIMARY KEY,
REG_ID INT(6) NOT NULL,
FOREIGN KEY(REG_ID) REFERENCES CUSTOMER_DETAIL(REG_ID),
ROOM_TYPE VARCHAR(20) NOT NULL,
ROOM_SCENE VARCHAR(20) NOT NULL,
PERSON INT(2) NOT NULL,
ADULT INT(2) NOT NULL,
CHILD INT(2) NOT NULL,
CHECKIN VARCHAR(12) NOT NULL,
CHECKOUT VARCHAR(12) NOT NULL,
WIFI VARCHAR(5) NOT NULL,
TRAVEL_GUIDE VARCHAR(5) NOT NULL,
SPECIAL_INSTRUCT VARCHAR(200),
BOOK_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

/*if ($conn->query($sql) === TRUE) {
    echo "Table super deluxe rooms created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/


 
?>