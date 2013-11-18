/* 
MooTools Ajax Paginator
Author : Simon Ilett
Version 1.41
*/

/* Feature list
1. (completed) in all browsers except firefox - first page disappears instead of morphing out
2. (completed) no hash check on initial page load
3. (completed) removing hard coded URLs
4. Caching requests
5. (completed) directional scrolling (left or right)
*/

var Paginator = new Class({
	Implements: [Options, Events],
	
	options: {
		xParams  : {},
		qString : '?p=',
		items:10,
		controls: 'pagination_control_wrapper',
		content: 'pagination_content_wrapper',
		cache: false,
		duration: 800,
		timer: 500,
		transition: Fx.Transitions.linear
	},
	
	initialize: function(url, options) {
		this.setOptions(options);
		this.pUrl		= url;
		this.pControls 	= $(this.options.controls);
		this.pContent 	= $(this.options.content);
		this.newRequest = true;	
		this.lastHash 	= false;
		this.lastPage	= 1;
		if (this.options.cache) 
			this.cache 	= $empty;
		// Check Hash
		this.isHashed();
		// Set pagination click events 	
		if(this.pControls) 
			this.paginationEvents();	
	},
	
	paginationEvents: function() {	
		this.pControls.addEvent( 'click', function(e){		
			preventEvent(e);
			this.loadPage(getTarget(e));
		}.bind(this));
	},
	
	
	// Initial load check for a hash to load.
	isHashed: function() {
		this.loadHash(this.stripHash());
		this.hashInterval = this.hashPage.periodical(this.options.timer, this);
	},
	
	// Periodical check for a new hash value to simulate back button ajax action
	hashPage: function() {
		var hash = this.stripHash();
		if(this.lastHash && this.lastHash!=hash) 
			this.loadHash(hash);
	},
	
	loadPage: function(el) {
		var tmpURL = (typeof(el)=='object' ? el.href : el);
		var dataArray = this.splitURL(tmpURL);
		var hash = dataArray[1];
		if (this.lastHash && this.lastHash == hash) return;
		if (this.newRequest) {
			this.newRequest = false;
			this.lastHash = window.location.hash = hash;
			this.getData(tmpURL);
		}
	},
	
	getData: function(url) {
		var theCallback = function (response) {
			this.newPagination(JSON.decode(response));
		}.bind(this); 
		var params = Object.merge({ 'items' : this.options.items, 'current' : this.lastPage, 'qString' : this.options.qString }, this.options.xParams );
		ajaxStore(url, params, theCallback);
	},
	
	newPagination: function(res) {
		this.newRequest = true;
		this.pControls.set('html', res.pagination);
		this.pContent.set('html', '<div style="position:relative;">' + this.pContent.get('html') + '</div>' + res.page);
		
		var first = this.pContent.getFirst(),
		last = this.pContent.getLast()

		// The previous node (old page) is moving either 750 or -750
		// shift left = -750, shift right = 750
		if(first!=last) {
			var firstLeft = this.convert(last.getStyle('left').replace('px',''));
			first.set('morph', {duration: this.options.duration, transition: this.options.transition, onComplete: function () { first.destroy(); }});
			first.morph({left:[0, firstLeft], opacity:0});
		}
		// The last node (new page) is always moving to 0px
		last.set('morph', {duration: this.options.duration, transition: this.options.transition});
		last.morph({left:0});
		
		this.lastPage = res.current;
		
	},
	
	// Load a page number 1,2,3 or next, prev, last, first
	pLoad: function (n) {
		this.loadPage($('page_'+n));
	},
	// Load a page by full URL, if known
	hLoad: function (n) {
		this.loadPage(this.pUrl + this.options.qString + n);
	},
	// Load the current hashed page
	loadHash: function (hash) {
		if (hash) 
			this.loadPage(this.pUrl + '?' + hash);	
		else 
			this.hLoad('1');
	},
	/* Helpers */
	splitURL: function(o) {
		return o.split('?');
	},
	stripHash: function() {
		return window.location.hash.replace('#','');
	},
	convert: function(n) {
		return n*-1;
		//return ((n<0) ? n*-1 : n*-1);
	}
	
});




/*****************************/
/* Ajax calling methods 3.0 */
/* Author: Simon Ilett 	   */
/**************************/
//Obj to update, path to ajax, params to send, onSuccess function
function ajaxProcess(oUpdateObj, oURL, oParams, oCallback) {
	var tmp;
	return tmp = new Request.HTML({  
			 method: 'post',  
			 url: oURL,
			 data: oParams,  
			 onRequest: function() { new ajax_overlay(oUpdateObj); },  
			 update: oUpdateObj,  
			 onSuccess: function() {  if(oCallback) oCallback(); }  
	}).send();
}

// Send and retrieve 
function ajaxStore(oURL, oParams, oCallback) {
	var tmp;
	return tmp = new Request({  
			 method: 'post',  
			 url: oURL,  
			 data: oParams,  
			 onSuccess: function(response) { if(oCallback) oCallback(response); }  
	}).send();
}


/*************************/
/* target grabber       */
/* Author: Simon Ilett */ 
/**********************/
function getTarget(e){
	if (typeof(e)=='object') {
		var evt = new Event(e); 
		var target = $(evt.target);	
	} else {
		var target = $(e);	
	}
	return (target ? target : false);
}

/*************************/
/* prevent behaviours 1.0      */
/* Author: Simon Ilett */
/**********************/
function preventEvent(e) {
	if (e) {
		var evt = new Event(e); 
		evt.preventDefault();
		evt.stop();
	}	
}


