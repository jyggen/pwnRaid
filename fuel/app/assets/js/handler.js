var Handler = {
	defaultValue: function(event) {
		if(event.type === 'focusin' && this.value === this.defaultValue) {
			this.value = '';
		} else if(event.type === 'focusout' && this.value === '') {
			this.value = this.defaultValue;
		}
	},
	helpWindow: function(event) {
		event.preventDefault();

		var button   = $(this),
			tplName  = button.data('help'),
			template = Handlebars.templates[tplName]();

		$.modal(template);
	}
};