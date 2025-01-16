<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2 style="text-align: center">CONCESSIONARIO</h2>
    
    <form action="" method="post">
        <div style="text-align: center"  name="barra di Ricerca">
      
        </div>
    </form>

    <form action="">
        <div style="text-align: center">
            <label for="">
                Inserisci la marca : <input type="text" placeholder="Marca...">
            </label>
         <br><br>
            <label for="">
                inserisci il Modello : <input type="text" placeholder="Modello...">
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
                <option value="10001-20000">10.001€ - 20.000€</option>
                <option value="20001-50000">20.001€ - 50.000€</option>
                <option value="50001+">Oltre 50.000€</option>
            </select>
            <br><br>
        
            <button id="ricerca">Cerca</button>

            <script src="script.js"></script>
        </div>
    </form>
   
    



</body>
</html>