export default () => {
    let titles = document.getElementById("titles");
    let listDishes = titles.querySelectorAll(".dish");

    let modals = titles.querySelectorAll(".modalDish");
    // Definir una función para remover la clase en todos los elementos
    const removerClaseEnElementos = () => {
        modals.forEach((modal) => {
            modal.classList.replace("flex", "hidden");

        });
    };
    document.addEventListener("click", (e) => {
        const clickElement = Array.from(modals).some((modals) =>
            modals.contains(e.target)
        );
        const clickMenu = Array.from(listDishes).some((listDishes) =>
            listDishes.contains(e.target)
        );
        if (!clickElement && !clickMenu) {
            removerClaseEnElementos();
        }
    });

    listDishes.forEach((dish) => {
        dish.querySelectorAll(".touch").forEach((d) => {
            let modal = dish.querySelector(".modalDish");
            d.addEventListener("click", (e) => {
                let modalClasses = modal.classList;

                if (modalClasses.contains("hidden")) {
                    console.log(dish);
                    modalClasses.replace("hidden", "flex");
                    modalClasses.replace("hidden", "flex");
                    dish.querySelector(".modalBlack").classList.toggle('hidden');

                }
            });
            modal.querySelector(".closeB").addEventListener('click', () => {
            removerClaseEnElementos();
            });

        });
    });
};
