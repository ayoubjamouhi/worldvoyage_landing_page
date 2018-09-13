(async function(){
})()
/* Start Filter */
const searchbar = document.querySelector('#search-bar');
const filter = document.querySelector('#filter');
const listhotel = document.querySelector('.list-hotel');
filter.addEventListener('click', fun_filter);
function fun_filter()
{
	this.textContent == "Afficher le Filter" ? this.textContent = "Cacher le Filter" : this.textContent = "Afficher le Filter";
	$("#search-bar").slideToggle(1000);
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

	

// function fun_searchbar()
// {
// 	const searchbar = document.querySelector('#search-bar');
// 	searchbar.style.display = 'block';
// 	console.log(document.getElementsByTagName('main')[0])
// 	document.querySelector('.list-hotel').style.opacity = 0.5;
// }