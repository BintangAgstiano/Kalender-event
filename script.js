// const images = document.querySelectorAll("img");

// if (images != null) {
//     images.forEach(function (i) {
//         images[i].setAttribute('draggable', false);
//     });
// }

const menu = document.querySelector(".menu");
const nav = document.querySelector(".link-nav");
menu.addEventListener('click', function () {
    menu.classList.toggle("open");
    nav.classList.toggle("buka");
});

const a = document.querySelectorAll(".link-nav a");
a.forEach(function (el) {
    el.addEventListener("click", function () {
        const Aactive = document.querySelector(".link-nav a.active");
        if (Aactive) {
            Aactive.classList.remove("active");
        }
        el.classList.add("active");
    });
});
const date = new Date();


const renderCalender = () => {
    let month = date.getMonth();
    const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ]
    document.querySelector(".bulan").innerHTML = months[month];
    document.querySelector(".tahun").innerHTML = date.getFullYear();
    let cTanggal = "";
    const contentTanggal = document.querySelector(".content-tanggal");
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    date.setDate(1);
    const firstDayIndex = date.getDay();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    date.setDate(1);
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    const nextDays = 7 - lastDayIndex - 1;
    for (let x = firstDayIndex; x > 0; x--) {
        cTanggal += `<li class="prevDate">${prevLastDay - x + 1}</li>`;
    }
    for (let i = 1; i <= lastDay; i++) {
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            cTanggal += `<li class="today">${i}</li>`;
        } else {
            cTanggal += `<li>${i}</li>`;
        }
    }
    for (let j = 1; j <= nextDays; j++) {
        cTanggal += `<li class="nextDate">${j}</li>`;
    }
    contentTanggal.innerHTML = cTanggal;
}


document.querySelector(".prevLeft").addEventListener("click", function () {
    date.setMonth(date.getMonth() - 1);
    renderCalender();
});


document.querySelector(".prevRight").addEventListener("click", function () {
    date.setMonth(date.getMonth() + 1);
    renderCalender();
});

renderCalender();


const i = document.querySelectorAll("#i");
for (let b = 0; b < i.length; b++) {

    const c2 = document.querySelector(".container2");

    i[b].addEventListener("click", function () {
        c2.style.display = "flex"
    });

    const batal = document.querySelector(".batal");
    batal.addEventListener('click', function () {
        batal.parentElement.parentElement.parentElement.parentElement.style.display = "none"
    });
}

const clear = document.querySelector(".bersihkan");
clear.addEventListener("click", function () {
    const pc = document.querySelector(".parent-c")
    pc.style.display = "none"
});

const add = document.querySelector(".tambah");
add.addEventListener('click', function () {
    const c3 = document.querySelector(".container3");
    c3.style.display = "flex"
});
const batal2 = document.querySelector(".batal2");
batal2.addEventListener('click', function () {
    batal2.parentElement.parentElement.parentElement.parentElement.style.display = "none"
});

const addEv = document.querySelector(".tambah-e");
addEv.addEventListener('click', function () {
    const c4 = document.querySelector(".container4");
    c4.style.display = "flex"
});
const batal3 = document.querySelector(".batal3");
batal3.addEventListener('click', function () {
    batal3.parentElement.parentElement.parentElement.parentElement.style.display = "none"
});

const remove = document.querySelectorAll("#remove");
remove.forEach(e => {
    e.addEventListener('click', function () {
        e.parentElement.parentElement.style.display = "none"
    });
});
const remove2 = document.querySelectorAll("#remove2");
remove2.forEach(e => {
    e.addEventListener('click', function () {
        e.parentElement.parentElement.style.display = "none"
    });
});

