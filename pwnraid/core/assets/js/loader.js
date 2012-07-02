/*global pwnRaid: true*/
var Loader = {
	exec: function(body, controller, method) {
		var ns     = pwnRaid,
			action = (method === undefined) ? 'init' : method;

		if ( controller !== '' && ns[controller] && typeof ns[controller][action] == 'function') {
			ns[controller][action](body);
		}
	},
	init: function() {
		var body       = document.body,
			controller = body.getAttribute('data-controller'),
			action     = body.getAttribute('data-action');

		body = $(body);

		Loader.exec(body, 'common');
		Loader.exec(body, controller);
		Loader.exec(body, controller, action);
	}
};

$(Loader.init);