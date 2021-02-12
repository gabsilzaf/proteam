<select name="countryid" class="form-control">
<?php
echo "<option value=\"\">Without Country</option>";
$showsqluser = "select \"CountryID\", \"CountryName\" from \"Country\" order by \"CountryName\" asc";
$resultuserq = pg_query($conn, $showsqluser);
if (!$resultuserq) {
    echo "An error occurred.\n";
    exit;
}
while ($row = pg_fetch_row($resultuserq)) {
    echo "<option valus=".$row[0]." >".$row[1]."</option>";
}
?>
</select>