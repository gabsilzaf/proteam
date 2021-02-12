select "UserName", "UserLastName", "UserEMail", "CountryName", "TeamName"
from "User" 
join "Country" on "UserCountryID" = "CountryID" 
join "TeamMembers" on "TeamMembers_User" = "UserID"
join "Team" on "TeamID" = "TeamMembers_Team"
join "TeamCompetition" on "TeamCompetition_Team" = "TeamID"
join "Competition" on "CompetitionID" = "TeamCompetition_Competition"



select "UserName", "UserLastName", "UserEMail", "CountryName", "TeamName", "CompetitionName"
from "User" 
join "Country" on "UserCountryID" = "CountryID" 
join "TeamMembers" on "TeamMembers_User" = "UserID"
join "Team" on "TeamID" = "TeamMembers_Team"
join "TeamCompetition" on "TeamCompetition_Team" = "TeamID"
join "Competition" on "CompetitionID" = "TeamCompetition_Competition"


Select "UserName", "UserLastName", "UserEMail", "CountryName", "TeamName", "CompetitionName"
from "User", "Country", "TeamMembers", "Team", "TeamCompetition", "Competition"
and "UserCountryID" = "CountryID" and "TeamMembers_User" = "UserID" and "TeamID" = "TeamMembers_Team" and "TeamCompetition_Team" = "TeamID" and "CompetitionID" = "TeamCompetition_Competition"

Select UserName, UserLastName, UserEMail, CountryName, TeamName, CompetitionName
from User, Country, TeamMembers, Team, TeamCompetition, Competition
and UserCountryID = CountryID and TeamMembers_User = UserID and TeamID = TeamMembers_Team and TeamCompetition_Team = TeamID and CompetitionID = TeamCompetition_Competition