<?php   

require_once('connection.php');

$showsqluser = "Select \"UserID\", \"UserName\", \"UserLastName\", \"UserEMail\", \"CountryName\", \"TeamName\", \"CompetitionName\" from \"User\", \"Country\", \"TeamMembers\", \"Team\", \"TeamCompetition\", \"Competition\" where \"UserCountryID\" = \"CountryID\" and \"TeamMembers_User\" = \"UserID\" and \"TeamID\" = \"TeamMembers_Team\" and \"TeamCompetition_Team\" = \"TeamID\" and \"CompetitionID\" = \"TeamCompetition_Competition\" Order by \"UserID\" asc";

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
    echo "<td style=\"text-align: center;\" >$row[4]</td>";
    echo "<td style=\"text-align: center;\" >$row[5]</td>";
    echo "<td style=\"text-align: center;\" >$row[6]</td>";
    echo "</tr>";
}

?>
