<!-- Dies ist der Main Bereich für die setting/profil Seite -->
<div class="cProfile">

    <div class="cUsername">
        <h2><?php echo $_SESSION['ghs_t_username']; ?></h2>
    </div>

    <!-- <div class="cProfilePicture"> TODO Profilbilder einführen

    </div>-->

    <div class="cChangePassword">
        <h4>Passwort Ändern</h4>
        <input type="text" placeholder="Altes Passwort eingeben">
        <input type="text" placeholder="Neues Passwort eingeben">
        <input type="text" placeholder="Neues Passwort bestätigen">
        <button>Passwort Ändern</button>
    </div>

    <div class="cRecoverPassword">
        <h4>Passwort Vergessen</h4>
        <button>Passwort zurücksetzen</button>
    </div>

    <div class="cChangeEmail">
        <h4>E-Mail Ändern</h4>
        <input type="text" placeholder="Neue E-Mail eingeben">
        <button>E-Mail Änderung anfordern</button>
    </div>

    <div class="cProfileSettings">

        <div class="cFirstName">
            <p>Vorname: </p>
        </div>

        <div class="cLastName">
            <p>Nachname: </p>
        </div>

        <!--<div class="cBirthday"> TODO
            
        </div>-->

        <div class="cInterests">
            <form action="#" method="post">
                <label>Interessen
                    <select name="selInterest">
                        <option value="Sport">Sport</option>
                        <option value="Musik">Musik</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Feiern">Feiern</option>
                        <option value="Essen">Essen</option>
                    </select>
                </label>
                <input type="submit" name="submitSelectedInterest" value="speichern">
            </form>
        </div>



    </div>

</div>