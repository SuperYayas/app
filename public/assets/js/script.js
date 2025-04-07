const items = ["Manzana", "Banana", "Naranja", "Uva", "Pera", "Sandía"];
      
//Barra de buscador

function searchFunction() {
    let input = document.getElementById("search").value.toLowerCase();
    let resultsDiv = document.getElementById("results");
    resultsDiv.innerHTML = "";
    if (input === "") {
        resultsDiv.style.display = "none";
        return;
    }
    let filtered = items.filter(item => item.toLowerCase().includes(input));
    if (filtered.length > 0) {
        resultsDiv.style.display = "block";
        filtered.forEach(item => {
            let div = document.createElement("div");
            div.textContent = item;
            div.onclick = () => {
                document.getElementById("search").value = item;
                resultsDiv.style.display = "none";
            };
            resultsDiv.appendChild(div);
        });
    } else {
        resultsDiv.style.display = "none";
    }
}