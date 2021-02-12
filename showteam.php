<?php   

require_once('./database/connection.php');

$showsqlteam = "select \"TeamID\", \"TeamName\", \"ClubName\", \"SportName\", \"CompetitionName\"
From \"Team\"
join \"Sport\" on \"Team_Sport\" = \"SportID\"
join \"Club\" on \"Team_Club\" = \"ClubID\"
join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
join \"Competition\" on \"TeamCompetition_Competition\" = \"CompetitionID\"
order by \"TeamID\" asc";

$resultteamq = pg_query($conn, $showsqlteam);

if (!$resultteamq) {
    echo "An error occurred.\n";
exit;
}

while ($rowteam = pg_fetch_row($resultteamq)) {
    echo "<tr>";
    echo "<td style=\"text-align: center;\" >$rowteam[0]</td>";
    echo "<td style=\"text-align: center;\" >$rowteam[1]</td>";
    echo "<td style=\"text-align: center;\" >$rowteam[2]</td>";
    echo "<td style=\"text-align: center;\" >$rowteam[3]</td>";
    echo "<td style=\"text-align: center;\" >$rowteam[4]</td>";
    echo "</tr>";
}

?>
