let search = document.getElementById("search");

search.addEventListener("keyup", function () {

    let filter = search.value.toLowerCase();

    let cards = document.querySelectorAll(".travel-card");

    cards.forEach(function(card) {

        let text = card.innerText.toLowerCase();

        if(text.includes(filter)) {

            card.style.display = "block";

        } else {

            card.style.display = "none";
        }

    });

});