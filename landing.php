<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionario</title>
</head>
<body>
    <h2 style="text-align: center">CONCESSIONARIO</h2>
    <form>
        <div style="text-align: center">
            <label>
                Inserisci la marca: <input type="text" id="marca" placeholder="Marca...">
            </label>
            <br><br>
            <label>
                Inserisci il modello: <input type="text" id="modello" placeholder="Modello...">
            </label>
            <br><br>
            <label for="annoProduzione">Anno di Produzione:</label>
            <select id="annoProduzione">
                <option value="" disabled selected>Seleziona un anno</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
            </select>
            <br><br>
            <label for="fasciaPrezzo">Fascia di Prezzo:</label>
            <select id="fasciaPrezzo">
                <option value="" disabled selected>Seleziona una fascia</option>
                <option value="0-5000">0 - 5.000€</option>
                <option value="5001-10000">5.001€ - 10.000€</option>
                <option value="10001-15000">10.001€ - 15.000€</option>
                <option value="15001-20000">15.001€ - 20.000€</option>
                <option value="20001-25000">20.001€ - 25.000€</option>
                <option value="25001-30000">25.001€ - 30.000€</option>
                <option value="30001-35000">30.001€ - 35.000€</option>
                <option value="35001-40000">35.001€ - 40.000€</option>
                <option value="40001+">Oltre 40.000€</option>
            </select>
            <br><br>
            <button id="cerca">Cerca</button>
        </div>
    </form>
    <div id="dati-auto" style="text-align: center; margin-top: 20px;"></div>
    <script src="script.js"></script>
</body>
</html>
