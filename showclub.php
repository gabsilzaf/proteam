<?php   

require_once('./database/connection.php');

$showsqluser = "Select \"ClubID\", \"ClubName\", \"CountryName\",  \"InviteCode\"
from \"Club\", \"Country\"
where \"Club_Country\" = \"CountryID\"
Order by \"ClubID\" asc";

$resultuserq = pg_query($conn, $showsqluser);

if (!$resultuserq) {
    echo "An error occurred.\n";
exit;
}

while ($row = pg_fetch_row($resultuserq)) {
    echo "<tr>";
    echo "<td style=\"text-align: center;\" >$row[0]</td>";
    echo "<td style=\"text-align: center;\" >$row[1]</td>";
    echo "<td style=\"text-align: center;\" >$row[2]</td>";
    echo "<td style=\"text-align: center;\" >$row[3]</td>";
    echo "</tr>";
}

?>