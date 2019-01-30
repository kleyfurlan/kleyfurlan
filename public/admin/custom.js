$(document).ready(function () {
	// Highlight current opened page
	var url = window.location;
	// Will only work if string in href matches with location
	//$('ul.nav a[href="'+ url +'"]').parent().addClass('open');

	// Will also work for relative and absolute hrefs
	$('.m-menu__submenu a').filter(function () {
		return this.href == url;
	}).closest('.m-menu__item--submenu').addClass('m-menu__item--open');

	$('.m-menu__link a[href="' + url.href + '"]').closest('li').addClass('m-menu__item--active');

	$('.m-menu__submenu a').filter(function () {
		return this.href == url;
	}).closest('li').addClass('m-menu__item--active');
});
