<main class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>Spalte erstellen</h2>
        </div>
        <div class="card-body">
            <!-- Das action="#" bedeutet, dass das Formular noch nichts absendet (wie gefordert) -->
            <form action="#" method="post">

                <!-- Eingabefeld für Spaltenbezeichnung -->
                <div class="mb-3">
                    <label for="spaltenbezeichnung" class="form-label">Spalten-Bezeichnung</label>
                    <input type="text" class="form-control" id="spaltenbezeichnung" placeholder="Bezeichnung für die Spalte">
                </div>

                <!-- Mehrzeiliges Eingabefeld für Beschreibung -->
                <div class="mb-3">
                    <label for="spaltenbeschreibung" class="form-label">Spaltenbeschreibung</label>
                    <textarea class="form-control" id="spaltenbeschreibung" rows="3"></textarea>
                </div>

                <!-- Eingabefeld für Sortid -->
                <div class="mb-3">
                    <label for="sortid" class="form-label">Sortid</label>
                    <input type="text" class="form-control" id="sortid" placeholder="Sortid angeben">
                </div>

                <!-- Dropdown-Menü für das Board -->
                <div class="mb-3">
                    <label for="board" class="form-label">Board auswählen</label>
                    <select class="form-select" id="board">
                        <option selected>Allgemeine Tasks</option>
                        <option value="1">Projekt X</option>
                        <option value="2">Projekt Y</option>
                    </select>
                </div>

                <!-- Buttons: Speichern (grün) und Abbrechen (grau) -->
                <button type="submit" class="btn btn-success">Speichern</button>
                <button type="button" class="btn btn-secondary">Abbrechen</button>
            </form>
        </div>
    </div>
</main>