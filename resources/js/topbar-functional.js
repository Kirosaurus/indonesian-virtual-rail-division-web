document.addEventListener("DOMContentLoaded", () => {
    const textTitle = document.querySelector(".title > h1");
    const imgTitle = document.querySelector(".title > img");
    if (document.getElementById("top-container").offsetWidth <= 400) {
        textTitle.style.display = 'none';
        imgTitle.style.display = 'flex';
    }
    else {
        imgTitle.style.display = 'none';
        textTitle.style.display = 'flex';
    }
})

window.addEventListener("resize", () => {
    const textTitle = document.querySelector(".title > h1");
    const imgTitle = document.querySelector(".title > img");
    if (document.getElementById("top-container").offsetWidth <= 600) {
        textTitle.style.display = 'none';
        imgTitle.style.display = 'flex';
    }
    else {
        imgTitle.style.display = 'none';
        textTitle.style.display = 'flex';
    }
})