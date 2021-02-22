let dropdownBtn = document.querySelector('.dropbutton');
let menuContent = document.querySelector('.dropdown_innhold');
dropdownBtn.addEventListener('click',()=>{
   if(menuContent.style.display===""){
      menuContent.style.display="block";
   } else {
      menuContent.style.display="";
   }
})
function menyknapp(x) { 
  x.classList.toggle("meny_aktiv");
}