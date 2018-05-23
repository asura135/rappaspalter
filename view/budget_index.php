<div>
    <div class="row">
    <p> Budget für Heute: </p>
    </div>
    <div class="row">
        <p> Letzte Ausgaben: </p>
    </div>
    <form method="post" action="">
    <div>
        <div class="row">
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="auswahl">Ausgaben
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="auswahl">Einnahmen
            </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-3>
        <input type="text" name="ausgabe" placeholder="Ausgaben">
        </div>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kategorie
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Sonstiges</a></li>
                <li><a href="#">Essen & Trinken</a></li>
                <li><a href="#">Transport</a></li>
                <li><a href="#">Bekleidung</a></li>
                <li><a href="#">Freizeit</a></li>
                <li><a href="#">Geschenke</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="col-md-3">
        <input id="add" name="add" type="submit" class="btn btn-primary" value="+">
    </div>
    </form>
</div>