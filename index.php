<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Bling Bling Nagelstudio Chantal</h2>

<form id="myForm" action="AfspraakController.php?action=opslaanAfspraak" method="POST">


    <p> Kies 4 basis kleuren voor uw nagels: </p>
    <div>
        <input type="color" id="roze" name="roze" value="#FFC0CB"/>
        <input type="color" id="blauw" name="blauw" value="#0000FF"/>
        <input type="color" id="roze2" name="roze2" value="#E48686"/>
        <input type="color" id="geel" name="geel" value="#FFFF00"/>
    </div>

    <br>
    <p>Uw telefoonnummer:</p>
    <input type="tel" id="phone" name="phone" 
    placeholder="+31 6 1234 56 78" required />

    <br>
    <br>
    <p>Uw email adres:</p>
    <input type="email" name="" id="" placeholder="randomguy@nowhere.com">

    <br> 
    <br> 

    <p>Afspraak datum:</p>
    <input type="datetime-local" name="date" id="date">

    <br>
    <br>
    <p>Soort behandeling:</p>
    <input type="checkbox" id="optie1" name="optie1" value="Bike">
    <label for="optie1">Nagelbijt arrangement (termijnbetaling mogelijk) $180</label><br>
    <input type="checkbox" id="optie2" name="optie2" value="Car">
    <label for="optie2">Luxe manicure (massage en handpakking) $30</label><br>
    <input type="checkbox" id="optie3" name="optie3" value="Boat">
    <label for="optie3">Nagelreparatie per nagel (in eerste week gratis) $5,00</label><br>

    <button type="submit">Opslaan</button>

    <button type="reset">Reset</button>


    <input type="hidden" id="verzendDatumTijd" name="verzendDatumTijd">
</form>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var verzendDatumTijd = new Date().toISOString();
        document.getElementById('verzendDatumTijd').value = verzendDatumTijd;
    });
</script>

</body>
</html>
