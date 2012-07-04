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

			$realms.autoComplete({ajax: '/realms/list/'+selected, requestType: 'GET'});

			element.find('#form_regions').on('change', function(){
				selected = $(this).find('option:selected').attr('value').toLowerCase();
				$realms.autoComplete('destroy');
				$realms.autoComplete({ajax: '/realms/list/'+selected, requestType: 'GET'});
			});

		}
	}
};