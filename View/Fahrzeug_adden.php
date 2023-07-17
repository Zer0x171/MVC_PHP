<html>
    <body>
        <form action="../Services/FahrzeugService.php" method="POST">
            <input type="hidden" name="action" value="add">
            Hersteller: <input type="text" name="hersteller"><br>
            Kennzeichen: <input type="text" name="kennzeichen"><br>
            Ablaufdatum: <input type="text" name="ablaufdatum"><br>
            <button type="submit" value="Submit">Hinzufügen</button>
        </form>
    </body>
</html>