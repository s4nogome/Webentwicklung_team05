<main class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2>Spalten</h2>
        </div>
        <div class="card-body">

            <!-- Button zum Erstellen (Der Link führt später zu Aufgabe 3) -->
            <a href="<?= base_url('home/spalten_erstellen') ?>" class="btn btn-primary mb-3">Erstellen</a>

            <!-- Die Tabelle -->
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Board</th>
                    <th>Sortid</th>
                    <th>Spalte</th>
                    <th>Spaltenbeschreibung</th>
                    <th>Bearbeiten</th>
                </tr>
                </thead>
                <tbody>
                <!-- Zeile 1 (aus Abbildung 2) -->
                <tr>
                    <td>1</td>
                    <td>Allgemeine Tasks</td>
                    <td>100</td>
                    <td>Zu besprechen</td>
                    <td>Noch zu besprechende Tasks</td>
                    <td>
                        <!-- Icons für Bearbeiten und Löschen -->
                        <a href="#" class="text-primary me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <!-- Zeile 2 (aus Abbildung 2) -->
                <tr>
                    <td>2</td>
                    <td>Allgemeine Tasks</td>
                    <td>200</td>
                    <td>In Bearbeitung</td>
                    <td>Tasks die aktuell bearbeitet werden</td>
                    <td>
                        <!-- Icons für Bearbeiten und Löschen -->
                        <a href="#" class="text-primary me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>