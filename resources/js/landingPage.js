
let tab1 = document.getElementById("btn1")
let tab2 = document.getElementById("btn2")
let tab3 = document.getElementById("btn3")

let tab1info = document.getElementById('tabOneInfo')
let tab2info = document.getElementById('tabTwoInfo')
let tab3info = document.getElementById('tabThreeInfo')

tab1info.classList.remove("hidden")
tab2info.classList.add("hidden")
tab3info.classList.add("hidden")

tab1.classList.add("bg-blue-300")
tab2.classList.remove("bg-blue-300")
tab3.classList.remove("bg-blue-300")

function clickTabOne() {
    tab1info.classList.remove("hidden")
    tab2info.classList.add("hidden")
    tab3info.classList.add("hidden")

    tab1.classList.add("bg-blue-300")
    tab2.classList.remove("bg-blue-300")
    tab3.classList.remove("bg-blue-300")
}

function clickTabTwo() {
    tab1info.classList.add("hidden")
    tab2info.classList.remove("hidden")
    tab3info.classList.add("hidden")

    tab1.classList.remove("bg-blue-300")
    tab2.classList.add("bg-blue-300")
    tab3.classList.remove("bg-blue-300")
}

function clickTabThree() {
    tab1info.classList.add("hidden")
    tab2info.classList.add("hidden")
    tab3info.classList.remove("hidden")

    tab1.classList.remove("bg-blue-300")
    tab2.classList.remove("bg-blue-300")
    tab3.classList.add("bg-blue-300")
}
tab1.addEventListener('click',clickTabOne);
tab2.addEventListener('click',clickTabTwo);
tab3.addEventListener('click',clickTabThree);