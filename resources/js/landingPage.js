// Glenn's scotch tape javascript:
let v_tab1 = document.getElementById("v-btn1")
let v_tab2 = document.getElementById("v-btn2")
let v_tab3 = document.getElementById("v-btn3")
let v_tab4 = document.getElementById("v-btn4")

let v_tab1info = document.getElementById('v-tabOneInfo')
let v_tab2info = document.getElementById('v-tabTwoInfo')
let v_tab3info = document.getElementById('v-tabThreeInfo')
let v_tab4info = document.getElementById('v-tabFourInfo')

v_tab1info.classList.remove("hidden")
v_tab2info.classList.add("hidden")
v_tab3info.classList.add("hidden")
v_tab4info.classList.add("hidden")

v_tab1.classList.add("bg-blue-300")
v_tab2.classList.remove("bg-blue-300")
v_tab3.classList.remove("bg-blue-300")
v_tab4.classList.remove("bg-blue-300")

let h_tab1 = document.getElementById("h-btn1")
let h_tab2 = document.getElementById("h-btn2")
let h_tab3 = document.getElementById("h-btn3")

let h_tab1info = document.getElementById('h-tabOneInfo')
let h_tab2info = document.getElementById('h-tabTwoInfo')
let h_tab3info = document.getElementById('h-tabThreeInfo')

h_tab1info.classList.remove("hidden")
h_tab2info.classList.add("hidden")
h_tab3info.classList.add("hidden")

h_tab1.classList.add("bg-blue-300")
h_tab2.classList.remove("bg-blue-300")
h_tab3.classList.remove("bg-blue-300")

function clickVTabOne() {
    v_tab1info.classList.remove("hidden")
    v_tab2info.classList.add("hidden")
    v_tab3info.classList.add("hidden")
    v_tab4info.classList.add("hidden")

    v_tab1.classList.add("bg-blue-300")
    v_tab2.classList.remove("bg-blue-300")
    v_tab3.classList.remove("bg-blue-300")
    v_tab4.classList.remove("bg-blue-300")
}

function clickVTabTwo() {
    v_tab1info.classList.add("hidden")
    v_tab2info.classList.remove("hidden")
    v_tab3info.classList.add("hidden")
    v_tab4info.classList.add("hidden")

    v_tab1.classList.remove("bg-blue-300")
    v_tab2.classList.add("bg-blue-300")
    v_tab3.classList.remove("bg-blue-300")
    v_tab4.classList.remove("bg-blue-300")
}

function clickVTabThree() {
    v_tab1info.classList.add("hidden")
    v_tab2info.classList.add("hidden")
    v_tab3info.classList.remove("hidden")
    v_tab4info.classList.add("hidden")

    v_tab1.classList.remove("bg-blue-300")
    v_tab2.classList.remove("bg-blue-300")
    v_tab3.classList.add("bg-blue-300")
    v_tab4.classList.remove("bg-blue-300")
}

function clickVTabFour() {
    v_tab1info.classList.add("hidden")
    v_tab2info.classList.add("hidden")
    v_tab3info.classList.add("hidden")
    v_tab4info.classList.remove("hidden")

    v_tab1.classList.remove("bg-blue-300")
    v_tab2.classList.remove("bg-blue-300")
    v_tab3.classList.remove("bg-blue-300")
    v_tab4.classList.add("bg-blue-300")
}
v_tab1.addEventListener('click',clickVTabOne);
v_tab2.addEventListener('click',clickVTabTwo);
v_tab3.addEventListener('click',clickVTabThree);
v_tab4.addEventListener('click',clickVTabFour);

function clickHTabOne() {
    h_tab1info.classList.remove("hidden")
    h_tab2info.classList.add("hidden")
    h_tab3info.classList.add("hidden")

    h_tab1.classList.add("bg-blue-300")
    h_tab2.classList.remove("bg-blue-300")
    h_tab3.classList.remove("bg-blue-300")
}

function clickHTabTwo() {
    h_tab1info.classList.add("hidden")
    h_tab2info.classList.remove("hidden")
    h_tab3info.classList.add("hidden")

    h_tab1.classList.remove("bg-blue-300")
    h_tab2.classList.add("bg-blue-300")
    h_tab3.classList.remove("bg-blue-300")
}

function clickHTabThree() {
    h_tab1info.classList.add("hidden")
    h_tab2info.classList.add("hidden")
    h_tab3info.classList.remove("hidden")

    h_tab1.classList.remove("bg-blue-300")
    h_tab2.classList.remove("bg-blue-300")
    h_tab3.classList.add("bg-blue-300")
}
h_tab1.addEventListener('click',clickHTabOne);
h_tab2.addEventListener('click',clickHTabTwo);
h_tab3.addEventListener('click',clickHTabThree);