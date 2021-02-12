<?php   

require_once('connection.php');

$showsqluser = "Select \"UserID\" from \"User\" Order by \"UserID\" asc";

$showsqluser = "Select  distinct("CountryID"), "CountryName" from "Country" order by "CountryID" ASC";

$resultuserq = pg_query($conn, $showsqluser);

if (!$resultuserq) {
    echo "An error occurred.\n";
exit;
}

while ($row = pg_fetch_row($resultuserq)) {
    echo "<option id="$row[1]">$row[0]</option>";
}

?>
