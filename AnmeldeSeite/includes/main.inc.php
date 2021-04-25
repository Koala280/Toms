<div class="cForms">

    <div class="cAnmeldung">

        <h1>Anmelden</h1>
            
            <form method="post" id="idLoginForm" action="login.php">

                <div class="inputBox">
                    <input id="idInputUsername" type="text" name="ghs_t_username" required="">
                    <label>Username</label>
                </div>

                <div class="inputBox">
                    <input id="idInputPassword" type="password" name="ghs_t_password" required="">
                    <label>Password</label>
                </div>

                <div><input class="cSubmit" type="submit" value="Anmelden"></div>

                <div class="cCheckBox">
                    <input type="checkbox" name="stayloggedIn" id="idRememberLogIn">
                    <label>30 Tage angemeldet bleiben</label>
                </div>



        </form>

    </div>



    <div class="registrierung">

        <h1>Registrieren</h1>

        <form method="post" id="idRegistrationForm" action="registrate.php">

                <div class="inputBox">
                    <input id="idInputRegUsername" type="text" name="regUsername" required="">
                    <label>Username</label>
                </div>

                <div class="inputBox">
                    <input id="idInputRegPassword" type="text" name="regPassword" required="">
                    <label>Password</label>
                </div>

                <div class="inputBox">
                    <input id="idInputRegEmail" type="text" name="regEmail" required="">
                    <label>E-Mail</label>
                </div>

                <input class="cSubmit" type="submit" value="registrieren">

        </form>

    </div>

</div>