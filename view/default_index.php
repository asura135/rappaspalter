
<div >
    <div class="login">login</div>
    <!-- Main Form -->
    <div >
        <form method="post" action="/controller/DefaultController.php">
            <div >
                <div >
                    <div>
                        <label for="username" >Haushalt</label>
                        <input type="text" class="form-control" name="username" placeholder="haushalt">
                    </div>
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input type="password" class="form-control"  name="password" placeholder="passwort">
                    </div>
                    <div >
                        <input type="submit" name="submit">
                    </div>
                </div>
            </div>
        </form>
        <div>
        <p> <a href="#">Passwort vergessen?</a></p>
        <p> <a href="/user/create">Neuer Haushalt?</a></p>
        </div>
    </div>
