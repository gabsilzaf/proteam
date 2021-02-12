<a class="toggle-button" onclick="showteamuser()" id="centered-toggle-button">Toggle</a>

<div class="modal" id="modal">
    <?php
    $showsqluserteam = "
    select DISTINCT(\"UserID\"), \"TeamName\"
    from \"User\"
    left join \"Profile\" on \"ProfileID\" = \"User_Profile\"
    left join \"TeamMembers\" on \"TeamMembers_Profile\" = \"User_Profile\"
    left join \"Team\" on \"TeamID\" = \"TeamMembers_Team\"
    left join \"TeamCompetition\" on \"TeamCompetition_Team\" = \"TeamID\"
    left join \"Competition\" on \"CompetitionID\" = \"TeamCompetition_Competition\"
    Where \"UserID\" = '$useredit'
    Order by \"UserID\" ASC
    ";
    $resultuserqt = pg_query($conn, $showsqluserteam);
    while ($rowct = pg_fetch_row($resultuserqt)) {
        echo"<div class=\"form-group\">";
        echo "<input type=\"text\" class=\"form-control\" id=\"userteam\" value=\"$rowct[1]\" disabled> <i class=\"fas fa-trash\"></i>";
        echo "</div>";
    }
    ?>
    <div class="actions">
        <button class="toggle-button">OK</button>
    </div>
</div>

<style>
    .modal {
        display: none;
        background: white;
        border: 1px solid #ccc;
        transition: 1.1s ease-out;
        box-shadow:
            -2rem 2rem 2rem rgba(black, 0.2);
        filter: blur(0);
        transform: scale(1);
        opacity: 1;
        visibility: visible;

        &.off {
            opacity: 0;
            visibility: hidden;
            filter: blur(8px);
            transform: scale(0.33);
            box-shadow: 1rem 0 0 rgba(black, 0.2);
        }

        @supports (offset-rotate: 0deg) {
            // OLD
            // offset-rotation: 0deg;
            // NEW
            offset-rotate: 0deg;
            offset-path: path("M 250,100 S -300,500 -700,-200");

            &.off {
                offset-distance: 100%;
            }
        }

        @media (prefers-reduced-motion) {
            offset-path: none;
        }

        h2 {
            border-bottom: 1px solid #ccc;
            padding: 1rem;
            margin: 0;
        }

        .content {
            padding: 1rem;
        }

        .actions {
            border-top: 1px solid #ccc;
            background: #eee;
            padding: 0.5rem 1rem;

            button {
                border: 0;
                background: #78f89f;
                border-radius: 5px;
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
                line-height: 1;
            }
        }
    }

    .toggle-button {}

    #centered-toggle-button {
        position: inline-block;
        width: 100%;
        height: 50px;
        cursor: pointer;
        color: #000;
        text-transform: uppercase;

    }

    div#model.modal {
        position: fixed;
        width: 600px;
        height: 500px;
        z-index: 999;
        padding: 25px;
    }

</style>

<script type="text/javascript">
    function showteamuser() {
        var x = document.getElementById("modal");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

</script>
