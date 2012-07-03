var pwnRaid = {
	common: {
		init: function(element) {
			element.on('focusin focusout', '.default-value', Handler.defaultValue);
			element.find('.help').on('click', Handler.helpWindow);
		}
	},
	setup: {
		index: function(element) {

			var realms;
			$.ajax({url: '/realms/list', method: 'GET', success: function(data){ realms = data; }});
		}
	}
};