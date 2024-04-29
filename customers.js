let btn = document.querySelector('#btn')
let sidebar = document.querySelector('.sidebar')
let subMenu = document.getElementById('subMenu')

btn.onclick = function ()
{
    sidebar.classList.toggle('active')
}

function toggleMenu()
{
    subMenu.classList.toggle("open-menu");
}