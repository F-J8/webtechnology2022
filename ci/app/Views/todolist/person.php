 <body>
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="title">
                    Aufgabenplaner: Personen
                </h1>
            </div>
        </div>

        <div class="row">
            <?php
            include (APPPATH . '/Views/templates/sidebar.php');
            ?>
            <div class="col-md-10">

                <div>
                    <table>
                        <thead>
                            <tr id="tab">
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th>In Projekt</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($personen) && is_array($personen)) {
                            foreach ($personen as $person) {
                                echo '<tr>';
                                if(isset($person) && is_array($person)) {
                                    foreach ($person as $i => $item) {
                                        echo('<td>');
                                        if ($i == "inproject" && $item == true) {
                                            echo('
                                        <input type="checkbox" class="form-check-input" onclick="return false;" checked>
                                        <button class="btn" style="float: right;"><i class="fa fa-trash"></i></button>
                                        <button class="btn" style="float: right;"><i class="fa fa-pencil"></i></button>');
                                        } else if ($i == "inproject" && $item == false) {
                                            echo('
                                        <input type="checkbox" class="form-check-input" onclick="return false;">
                                        <button class="btn" style="float: right;"><i class="fa fa-trash"></i></button>
                                        <button class="btn" style="float: right;"><i class="fa fa-pencil"></i></button>');
                                        } else {
                                            echo($item);
                                        }
                                        echo('</td>');
                                    }
                                }
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <div>
                    <h2>
                        Bearbeiten/erstellen:
                    </h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Username:</label><br>
                            <input type="text" id="name" name="fname" size="81" placeholder="Username"><br>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail-Adresse:</label><br>
                            <input type="email" id="email" name="email" size="81" placeholder="E-Mail-Adresse eingeben"><br>
                        </div>
                        <div class="form-group">
                            <label for="password">Passwort:</label><br>
                            <input type="password" id="password" name="password" size="81" placeholder="Passwort"><br>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ch1">
                            <label class="form-check-label" for="Ch1">
                                AGBs und Datenschutzbedingung akzeptieren
                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="project">Zugehöriges Projekt:</label><br>
                            <select id="project" name="selects">
                                <option value=""disabled selected>- bitte auswählen -</option>
                                <option >Projekt 1</option>
                                <option >Projekt 2</option>
                            </select>
                        </div>
                        <button type="button" name="but1">Speichern</button>
                        <button type="button" name="but3">Reset</button>
                    </form>
                </div>
            </div>
        </div>


    </body>
</html>