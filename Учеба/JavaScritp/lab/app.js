const SHOW_MORE = 3;

function updateButtons() {
  $('.show').toggleClass('d-none', $('.item.d-none').length === 0);
  $('.hide').toggleClass('d-none', $('.item').not('.d-none').length === SHOW_MORE);
}

$('.show').click(function() {
  $('.item.d-none').slice(0, SHOW_MORE).removeClass('d-none');
  updateButtons();
}).click();

$('.hide').click(function() {
  $('.item').not('.d-none').slice(SHOW_MORE).addClass('d-none');
  updateButtons();
});