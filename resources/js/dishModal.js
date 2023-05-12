export default () => {
    let titles = document.getElementById("titles");
    let cardDishes = titles.querySelectorAll(".dishCard");

    let modals = titles.querySelectorAll(".modalDish");
    // Definir una función para remover la clase en todos los elementos
    const removerClaseEnElementos = (dish) => {
        modals.forEach((modal) => {
            modal.classList.replace("flex", "hidden");
        });
        dish.querySelector(".modalBlack").classList.toggle("hidden");
        console.log(dish.querySelector(".modalBlack"));
    };

    cardDishes.forEach((dish) => {
        let modal = dish.querySelector(".modalDish");
        dish.querySelectorAll(".touch").forEach((d) => {
            d.addEventListener("click", (e) => {
                let modalClasses = modal.classList;
                if (modalClasses.contains("hidden")) {
                    modalClasses.replace("hidden", "flex");
                    dish.querySelector(".modalBlack").classList.toggle(
                        "hidden"
                    );
                }
                console.log(modal);
            });
        });

        modal.querySelector(".closeB").addEventListener("click", () => {
            removerClaseEnElementos(dish);
        });
        dish.querySelector(".modalBlack").addEventListener("click", () => {
            removerClaseEnElementos(dish);
        });

        dish

    });

};
