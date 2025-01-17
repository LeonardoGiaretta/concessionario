    
    function cerca(){
        document.getElementById('cerca').addEventListener('click', function (event) {
            event.preventDefault();
        
            const marca = document.getElementById('marca').value;
            const modello = document.getElementById('modello').value;
            const annoProduzione = document.getElementById('annoProduzione').value;
            const fasciaPrezzo = document.getElementById('fasciaPrezzo').value;
        
    
            const params = new URLSearchParams({
                marca: marca,
                modello: modello,
                annoProduzione: annoProduzione,
                fasciaPrezzo: fasciaPrezzo
            });
        
            fetch(`http://localhost/api.php?${params.toString()}`)
                .then(response => response.json())
                .then(data => {
                
                    let html = "<table border='1' style='margin: 0 auto; width: 80%; text-align: center;'>";
                    html += "<tr><th>Marca</th><th>Modello</th><th>Anno</th><th>Prezzo</th></tr>";
        
                    if (data.length > 0) {
                        data.forEach(auto => {
                            html += `
                                <tr>
                                    <td>${auto.marca}</td>
                                    <td>${auto.modello}</td>
                                    <td>${auto.annoProduzione}</td>
                                    <td>${auto.prezzo}€</td>
                                </tr>
                            `;
                        });
                    } else {
                        html += "<tr><td colspan='4'>Nessun risultato trovato</td></tr>";
                    }
        
                    html += "</table>";
        
                    document.getElementById('dati-auto').innerHTML = html;
                })
                .catch(error => {
                    console.error("Errore:", error);
                    document.getElementById('dati-auto').innerHTML = "<p style='color: red;'>Errore durante il caricamento dei dati.</p>";
                });
        });
    }
    
