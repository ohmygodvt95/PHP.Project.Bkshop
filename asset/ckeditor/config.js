CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		'/',
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'clipboard', groups: [ 'undo', 'clipboard' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.defaultLanguage = 'vi';
	config.removeButtons = 'Underline,Subscript,Superscript,Scayt,Table,HorizontalRule,Maximize,Source,BulletedList,Outdent,Indent,Blockquote,About';

	

    config.filebrowserBrowseUrl = 'http://localhost/webshop/asset/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = 'http://localhost/webshop/asset/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = 'http://localhost/webshop/asset/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = 'http://localhost/webshop/asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = 'http://localhost/webshop/asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = 'http://localhost/webshop/asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

	
	
	};