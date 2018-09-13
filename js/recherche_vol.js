(async function(){
})()
/* Start Filter */
const searchbar = document.querySelector('.search-bar');
console.log(searchbar)
const filter = document.querySelector('#filter');
const listhotel = document.querySelector('.list-vol');
filter.addEventListener('click', fun_filter);
function fun_filter()
{
	this.textContent == "Afficher le Filter" ? this.textContent = "Cacher le Filter" : this.textContent = "Afficher le Filter"
	$(".search-bar").slideToggle(1000);
	listhotel.style.opacity == 0.5 ? listhotel.style.opacity = 1 : listhotel.style.opacity = 0.5
}
/* End Start Filter */

/* Start list-hotel click */
// if filter availaible (tablet)
if(filter.style.display == 'block')
	listhotel.addEventListener('click', fun_listhotel);
function fun_listhotel()
{
	searchbar.style.display = 'none'
	this.style.opacity = 1;
}
/* End list-hotel click */