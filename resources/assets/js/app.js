require('./bootstrap');
require('./Core/Classes');

require('jquery');
require('bootstrap-sass');
require('fastclick');
require('jquery-slimscroll');
require('admin-lte');
require('admin-lte/plugins/select2/select2.full.min');
require('admin-lte/plugins/input-mask/jquery.inputmask');
require('admin-lte/plugins/input-mask/jquery.inputmask.date.extensions');
require('admin-lte/plugins/input-mask/jquery.inputmask.extensions');
require('admin-lte/plugins/daterangepicker/daterangepicker');
require('admin-lte/plugins/datepicker/bootstrap-datepicker');
require('admin-lte/plugins/colorpicker/bootstrap-colorpicker.min');
require('admin-lte/plugins/timepicker/bootstrap-timepicker.min');
require('admin-lte/plugins/iCheck/icheck.min');


// init plugins here
$('.datepicker').datepicker({
	format: 'yyyy-mm-dd'
});
$('.timepicker').timepicker({
	template: 'dropdown',
	showInputs: false,
	maxHours: 24,
	showMeridian: false
});


