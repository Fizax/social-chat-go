<?php
/**
 * Created by PhpStorm.
 * User: Bas
 * Date: 27-8-2019
 * Time: 16:03
 */

require 'config.php';

?>
<div class="container">
        <div class="login">
            <?php
            /*
             * Hier checken we of we al ooit eens een 'id' key hebben opgeslagen in de
             * $_SESSION variabele. de ENIGE plek waar we dit doen is als we onszelf inloggen
             * en onze gegevens kloppen. Kijk maar in de logincontroller.php
             *
             * Als we dus al een id in onze session hebben (dus onze klant is al ingelogd) willen we niet dat onze
             * klanten zich nogmaals kunnen registreren of inloggen...
             *
             */
            if ( isset($_SESSION['id']) ) {
                echo "You are currently logged in. Want to <a href='logout.php'>logout?</a>";
            } else {
                echo "<a href='login.php'>Login</a> &nbsp;  &nbsp; <a href='index.php'> Home </a>";
            }
            ?>
        </div>
        <form action="loginController.php" method="post">
            <input type="hidden" name="type" value="register">

            <div class="form-group">
                <label for="username">Vul je username hieronder in</label>
                <input class="input" type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="email">Vul je E-mail adres hieronder in</label>
                <input class="input" type="text" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Vul je wachtwoord hieronder in</label>
                <input class="input" type="text" name="password" id="password" required minlength="7">
            </div>

            <div class="form-group">
                <label for="password_confirm">Bevestig je wachtwoord</label>
                <input class="input" type="text" name="passwordconfirm" id="passwordconfirm" required minlength="7">
            </div>
            <div>
                <input type="checkbox" name="check" value="on" ><a href="algemenevoorwaarden.php" target="_blank">Accepteer de algemene voorwaarden</a>
            </div>

            <input class="button" type="submit" value="Register">
        </form>
    </div>
</div>