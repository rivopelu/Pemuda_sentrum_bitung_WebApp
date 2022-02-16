// nav Toggle

// login
function myFunction(){
    const input = document.getElementsByClassName('passmata');
    const hide1 = document.getElementById('hide1');
    const hide2 = document.getElementById('hide2');

    if(input.type === 'password'){
        input.type = "text";
        hide1.style.display = block;
        hide2.style.display = none;
    }else{
        input.type = "text";
        hide1.style.display = none;
        hide2.style.display = block;
    }
}



const btn = document.getElementById('nav-toggler');
const menu = document.getElementById('navigation');
const btnToggle = document.getElementById('btn-toggle');
const navlink = document.querySelectorAll('.navlink');

btn.addEventListener("click", () => {
    menu.classList.toggle("buka");

})

btn.addEventListener("click", () => {
    btnToggle.classList.toggle('uil-multiply');
    btnToggle.classList.toggle('uil-apps');
})



// Dark-mode 

const darkBtn = document.getElementById('dark-togle');
const html = document.querySelector('html');
const darkIcon = document.getElementById('dark-icon');


darkBtn.addEventListener("click", () => {
    html.classList.toggle('dark')
})

darkBtn.addEventListener("click", () => {
    darkIcon.classList.toggle('uil-sun')
    darkIcon.classList.toggle('uil-moon')
})

// =======================> DROPDOWN NAVBAR <===========================

const drop1 = document.getElementById('drop-1');
const itemDrop1 = document.getElementById('item-drop');

drop1.addEventListener("click", () => {
    itemDrop1.classList.toggle('right-[32px]');
    itemDrop1.classList.toggle('right-[-520px]');
})



// backend script 
/*Toggle dropdown list*/
function toggleDD(myDropMenu) {
    document.getElementById(myDropMenu).classList.toggle("invisible");
}
/*Filter dropdown options*/
function filterDD(myDropMenu, myDropMenuSearch) {
    var input, filter, ul, li, a, i;
    input = document.getElementById(myDropMenuSearch);
    filter = input.value.toUpperCase();
    div = document.getElementById(myDropMenu);
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}



// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
        var dropdowns = document.getElementsByClassName("dropdownlist");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains('invisible')) {
                openDropdown.classList.add('invisible');
            }
        }
    }
}



