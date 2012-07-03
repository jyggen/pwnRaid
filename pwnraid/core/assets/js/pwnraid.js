var pwnRaid = {
	common: {
		init: function(element) {
			element.on('focusin focusout', '.default-value', Handler.defaultValue);
			element.find('.help').on('click', Handler.helpWindow);
		}
	},
	setup: {
		index: function(element) {

			var selected = element.find('#form_regions option:selected').attr('value').toLowerCase(),
				$realms  = element.find('#form_realms');

			$realms.data('region', selected);

			element.find('#form_regions option').each(function() {
				var region = $(this).attr('value').toLowerCase();
				element.find('#form_realms:data(region=='+region+')').autoComplete({ajax: '/realms/list/'+region, requestType: 'GET'});
			});
			element.find('#form_regions').on('change', function(){ $realms.data('region', $(this).find('option:selected').attr('value')); });

		}
	}
};