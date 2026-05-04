let sort_button_state = 0

let sort_by = [{
    by: 'price',
    active: 1
},
{
    by: 'name',
    active: 0
},
{
    by: 'rating',
    active: 0
}]

let is_ascending = 1


document.querySelectorAll(".sort").forEach((item, i) => {
    item.addEventListener("click", () => {
        // 1. Matikan (reset) nilai aktif di seluruh array sort_by dan hapus kelas CSS "active"
        document.querySelectorAll(".sort").forEach((btn, j) => {
            sort_by[j].active = 0;
            btn.classList.remove("active");
        });

        // 2. Tandai item yang baru saja diklik sebagai aktif (nilai 1) 
        sort_by[i].active = 1;

        // 3. Tambahkan class "active" secara visual ke dom tombol yang ditekan 
        item.classList.add("active");

        // (Opsional) Langsung sembunyikan dropdown kembali paska user memilih sortir:
        // document.querySelector(".sort-button").click(); 
    });
});

const sortirDropdown = document.querySelector(".sortir");
document.querySelector(".sort-button").addEventListener("click", () => {
    sort_button_state = !sort_button_state
    if (sort_button_state) {
        console.log("Hidup")
        document.querySelector(".sort-button").classList.add("active")
        if (sortirDropdown) {
            sortirDropdown.classList.add("show");
            document.querySelectorAll(".sort").forEach((item, i) => {
                setTimeout(() => {
                    item.classList.add("show");
                }, i * 100)
            })
        }
    }
    else {
        console.log("Mati")
        document.querySelector(".sort-button").classList.remove("active")
        if (sortirDropdown) {
            sortirDropdown.classList.remove("show");
            document.querySelectorAll(".sort").forEach((item, i) => {
                item.classList.remove("show");
            })
        }
    }
})

const ascdscButton = document.querySelectorAll(".ascend-descend-button");
const ascdscImg = document.querySelector(".arrow-sort");

ascdscButton.forEach((item, i) =>{
    item.addEventListener("click", () => {
    const ascdscText = ascdscButton[i].querySelectorAll("span");
    is_ascending = !is_ascending;
    ascdscText.textContent = is_ascending ? "Ascending" : "Descending";
    if (is_ascending) {
        ascdscImg.classList.add("ascending")
        ascdscImg.classList.remove("descending")
    }
    else {
        ascdscImg.classList.add("descending")
        ascdscImg.classList.remove("ascending")
    }
});
})


//SEARCH BARRR
let search_active = 0;
const searchBox = document.querySelectorAll(".search-input")
const searchIcon = document.querySelectorAll(".search-icon")
const searchBar = document.querySelectorAll(".search-bar")
const listSortir = document.querySelectorAll(".list-sortir")
const toolbar = document.querySelectorAll(".toolbar")


document.addEventListener("DOMContentLoaded", () => {
    toolbar.forEach((item, i) => {
        if (toolbar[i].offsetWidth <= 500) {
            searchBox[i].classList.add("compact");
            const ascdscText = ascdscButton[i].querySelectorAll("span");
            if(toolbar[i].offsetWidth <= 300){
                ascdscText[i].style.display = 'none';
            }
            else{
                ascdscText[i].style.display = 'flex';
            }
        }
        else {
            searchBox[i].classList.remove("compact");
        }
    })

    if (document.getElementById("top-container").offsetWidth <= 900) {
        console.log("Full")
        toolbar[0].classList.add("hide")
        toolbar[1].classList.remove("hide")
    }
    else {
        console.log("Compact")
        toolbar[1].classList.add("hide")
        toolbar[0].classList.remove("hide")
    }
})

window.addEventListener("resize", () => {
    toolbar.forEach((item, i) => {
        if (toolbar[i].offsetWidth <= 500) {
            searchBox[i].classList.add("compact");
            const ascdscText = ascdscButton[i].querySelectorAll("span");
            if(toolbar[i].offsetWidth <= 300){
                ascdscText[i].style.display = 'none';
            }
            else{
                ascdscText[i].style.display = 'flex';
            }
        }
        else {
            searchBox[i].classList.remove("compact");
        }
    })

    if (document.getElementById("top-container").offsetWidth <= 900) {
        console.log("Full")
        toolbar[0].classList.add("hide")
        toolbar[1].classList.remove("hide")
    }
    else {
        console.log("Compact")
        toolbar[1].classList.add("hide")
        toolbar[0].classList.remove("hide")
    }
})



searchIcon.forEach((item, i) => {
    item.addEventListener("mousedown", () => {
        event.preventDefault();
    })
})

searchBox.forEach((item, i) => {
    item.addEventListener("focus", () => {
        if (!search_active) {
            if (toolbar[i].offsetWidth <= 600) {
                listSortir[i].classList.add("hide")
                sortirDropdown.classList.remove("show");
                document.querySelectorAll(".sort").forEach((item, i) => {
                    item.classList.remove("show");
                })
            }
            search_active = 1
            searchBox[i].classList.add("focus");
            searchBar[i].classList.add("focus");
            searchBox[i].focus();
        }
    })
})

searchIcon.forEach((item, i) => {
    item.addEventListener("click", () => {

        if (!search_active) {
            if (toolbar[i].offsetWidth <= 600) {
                listSortir[i].classList.add("hide")
                sortirDropdown.classList.remove("show");
                document.querySelectorAll(".sort").forEach((item, i) => {
                    item.classList.remove("show");
                })
            }
            search_active = 1
            searchBox[i].classList.add("focus");
            searchBar[i].classList.add("focus");
            searchBox[i].focus();
        }
    })
})

searchBox.forEach((item, i) => {
    item.addEventListener("blur", () => {
        search_active = 0;
        searchBox[i].classList.remove("focus");
        searchBar[i].classList.remove("focus");
        setTimeout(() => {
            listSortir[i].classList.remove("hide");
        }, 1000);
    })
})

// document.addEventListener("DOMContentLoaded", () => {
//     ascdscText.textContent = is_ascending ? "Ascending" : "Descending";
//     document.querySelectorAll(".sort").forEach((item, i) => {
//         if (sort_by[i].active) {
//             item.classList.add("active")
//         }
//     })
// })

//Top Container - Dengarkan scroll pada .page-content
const top_container = document.getElementById("top-container");
const pageContent = document.querySelectorAll(".main-page");

if (pageContent) {
    pageContent.forEach((item, i) => {
        pageContent[i].addEventListener("scroll", () => {
            console.log("Masuk")    
            if (pageContent[i].scrollTop > 0) {
                console.log("Scrolled");
                top_container.classList.add("scrolled");
            } else {
                console.log("Not scrolled");
                top_container.classList.remove("scrolled");
            }
        });
    })
}


