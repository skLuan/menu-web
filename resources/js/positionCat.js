let cambioPos = (cat, i) => {
    try {
        let categories = document
            .getElementById("titles")
            .querySelectorAll(".cat");
        let catContainer = document
            .getElementById("titles")
            .querySelector(".catContainer");
        let currentY = catContainer.offsetTop;

        let yReference = 139;

        let diff = yReference - (70*(i+2));

        catContainer.style.top = `${ diff }px`;
        // console.log(yReference);
        console.log('valr:');
        console.log(diff);
        console.log('ref: ' + yReference);

    } catch (err) {
        console.log(err);
    }
};
export { cambioPos };
