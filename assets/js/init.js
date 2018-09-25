(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	$('.modal').modal();
	$('select').material_select();
	$('.collapsible').collapsible();
	  
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 50, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: true, // Close upon selecting a date,
	format: 'yyyy-mm-dd'
  	});
	
	$('.button-collapse').sideNav({
  	menuWidth: 230, // Default is 300
  	edge: 'left', // Choose the horizontal origin
  	closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  	draggable: true, // Choose whether you can drag to open on touch screens,
    }
  	);
  $('input.autocomplete').autocomplete({
    data: {
      "Gladiol": null,
      "Aries": null,
      "Sinergi": null,
      "Mangkus": null,
      "ALINEA": null,
      "Doa Ibu": null,
      "Bibit Unggul": null,
      "UR Rangers": null,
      "Man 16 Team": null,
      "KerabaTani.Dev": null,
      "Creatonomira": null,
      "Fort Knox": null
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
  });

	  
	  
  }); // end of document ready
})(jQuery); // end of jQuery name space