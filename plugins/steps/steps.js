$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');
		  allAntBtn = $('.antBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='email'],input[type='url'],Textarea,Select"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  $(".form-group").addClass("has-success");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });
  allAntBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  antStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='email'],input[type='url'],Textarea,Select"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  $(".form-group").addClass("has-success");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  antStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
  $('#nacimientoest').datepicker({		
		autoclose: true
   }).on(
       'show', function() {			
	   // Obtener valores actuales z-index de cada elemento
	   var zIndexModal1 = $('#est').css('z-index');	  
	   var zIndexModal2 = $('#observacion').css('z-index');
	   var zIndexModal3 = $('#progent').css('z-index');	  
	   var zIndexFecha1 = $('.datepicker').css('z-index');	   
      // Re asignamos el valor z-index para mostrar sobre la ventana modal
      $('.datepicker').css('z-index',zIndexModal1+1);
	  $('.datepicker').css('z-index',zIndexModal2+1);
	  $('.datepicker').css('z-index',zIndexModal3+1);
	});   
   $('input[name="fecha"]').daterangepicker();  
});