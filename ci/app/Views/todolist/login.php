   <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Login
                </h1>
            </div>
        </div>

        <div class="container">
            <form>
                <div class="form-group">
                    <label for="email">Email-Adresse:</label><br>
                    <input type="email" id="email" name="fname" size="50" placeholder="Email-Adresse eingeben"><br>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Passwort:</label><br>
                    <input type="password" id="password" name="fname" size="50" placeholder="Passwort eingeben"><br>
                </div>
                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="materialUnchecked">
                    <label class="form-check-label" for="materialUnchecked">AGBs und Datenschutzbedingung akzeptieren</label>
                </div>
                <br>

                <button type="button" name="but1">Einloggen</button>
            </form>
            <br>
            <br>
            <text>
                Noch nicht registriert?
            </text>
            <a href="#">
                Registrierung
            </a>
            <br>
            <br>
            <text>
                Da der Login Vorgang technisch noch nicht realisiert wurde:
            </text>

            <a href="<?php echo site_url('Start/index')?>">
                Überspringen
            </a>
        </div>
    </body>
</html>