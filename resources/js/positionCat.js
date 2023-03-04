let cambioPos = (cat, i) => {
    try {
        let title = document
            .getElementById("titles");
        let categories = document
            .getElementById("titles")
            .querySelectorAll(".cat");
        let catContainer = document
            .getElementById("titles")
            .querySelector(".catContainer");

        let currentLocation = title.scrollTop;
        let yReference = 139;

        let diff = (70*(i));
        setTimeout(() => {

            title.scrollTop = currentLocation + diff;
            console.log('valr:');
            console.log(title.scrollTop);
            console.log('ref: ' + title.scrollHeight);
        }, 10);
        // console.log(yReference);

    } catch (err) {
        console.log(err);
    }
};
export { cambioPos };
