var pwnRaid = {
	common: {
		init: function(element) {
			element.on('focusin focusout', '.default-value', Handler.defaultValue);
			element.find('.help').on('click', Handler.helpWindow);
		}
	},
	setup: {
		index: function(element) {
			element.on('.realm-suggest').autoComplete({ajax:'/api/realms'});
		}
	}
};