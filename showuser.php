<?php   

require_once('./database/connection.php');

$showsqluser = "
select DISTINCT(\"UserID\"), \"ProfileName\", \"ProfileLastName\", \"UserEMail\", \"CountryName\",\"TeamName\", \"CompetitionName\"
from \"User\"
left join \"Country\" on \"CountryID\" = \"User_Country\"
left join \"Profile\" on \"ProfileID\" = \"User_Profile\"
left join \"TeamMembers\" on \"TeamMembers_Profile\" = \"User_Profile\"
left join \"Team\" on \"TeamID\" = \"TeamMembers_Team\"
left join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
left join \"Competition\" on \"CompetitionID\" = \"TeamCompetition_Competition\"
Order by \"UserID\" ASC
";

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
