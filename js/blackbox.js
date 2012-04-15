/*
Script:
	Blackbox v0.15 beta
	
Author:
	Yichuan Shen, <http://labs.hostsen.net/>

License:
	MIT-style license
*/

var Blackbox = new Class({
	Implements: Options,
	
	options: {
		element: null,
		bgcolor: '#000',
		duration: 500,
		height: 200,
		pause: false,
		start: 1,
		wait: 5000
	},
	
	initialize: function(ulel, options) {
		this.setOptions(options)
		
		this.options.element = $(ulel);
		$(ulel).set('blackbox', this);
		
		if ($(ulel).getStyle('position') != 'absolute' && $(ulel).getStyle('position') != 'fixed') {
			$(ulel).setStyles({
				position: 'relative'
			});
		}
		
		$(ulel).getChildren().each(function(liel, i) { // liel = li-Element
			liel.addClass('blackbox' + ++i);
			liel.setStyles({
				backgroundColor: this.options.bgcolor,
				display: 'block',
				opacity: 0,
				overflow: 'hidden',
				position: 'absolute',
				top: 0,
				right: 0,
				bottom: 0,
				left: 0,
				zIndex: 1
			});
			
			// if first
			if(i == this.options.start) {
				liel.setStyles({
					opacity: 1,
					zIndex: 2
				});
			// if second
			} else if(i == this.getNextItem(this.options.start)) {
				liel.setStyle('opacity', 1);
			}
		}.bind(this));
		
		this.start.delay(this.options.wait, this, [this.options.start]);
	},

	start: function(i) {
		if (this.options.pause) {
			this.options.pause = false;
			return;
		}
		
		var el = this.options.element;
		
		if (!i) {
			// get current item id
			i = el.getElement("li[style*='z-index: 2;']").get('class').replace('blackbox', '').toInt();
		}
		
		var cur = el.getElement('.blackbox' + i);
		var next = this.getNextItem(i);
		
		cur.set('tween', { duration: this.options.duration }).fade('out').get('tween').chain(function() {
			cur.setStyle('z-index', 1);
			
			el.getElement('.blackbox' + next).setStyle('z-index', '2');
			el.getElement('.blackbox' + this.getNextItem(next)).setStyle('opacity', '1');
			el.getElement('.blackbox' + this.getNextItem(next)).setStyle('visibility', 'visible');
			
			this.start.delay(this.options.wait, this, [next]);
		}.bind(this));
	},
	
	stop: function() {
		this.options.pause = true;
	},

	getNextItem: function(i) {
		var el = this.options.element;
		
		if (!el.getElement('li.blackbox' + (i + 1))) {
			// next item doesn't exist
			// return first item
			return 1;
		}
		
		return i + 1;
	}
});

Element.Properties.blackbox = {
	get: function() { return this.retrieve('blackbox'); },
	set: function(value) { this.store('blackbox', value); }
};