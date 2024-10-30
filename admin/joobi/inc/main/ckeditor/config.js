/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {

    config.toolbar = 'ckbasic';
    config.allowedContent = true;
    
    config.extraPlugins = 'confighelper';

    config.toolbar_ckbasic = [
        { name: 'basicstyles', items : ['Bold','Italic','Strike','-','RemoveFormat'] },
        { name: 'clipboard', items : ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'] },
        { name: 'styles', items : ['Styles','Format'] },
        { name: 'insert', items : ['Smiley'] }
    ];

	config.toolbar_ckstandard = [
		{ name: 'document', items: [ 'Source', '-','Smiley', 'Print', '-', 'Templates' ] },
       { name: 'basicstyles', items : ['Bold','Italic','Strike','-','RemoveFormat'] },
       { name: 'clipboard', items : ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'] },
       { name: 'styles', items : ['Styles','Format'] },
       '/',
       { name: 'paragraph', items : ['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote'] },
       { name: 'colors', items : ['TextColor','BGColor'] }
    ];
	
    config.toolbar_ckfull = [
     	{ name: 'document', items: [ 'Source', '-','Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
        { name: 'basicstyles', items : ['Bold','Italic','Strike','-','RemoveFormat'] },
        { name: 'clipboard', items : ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'] },
        { name: 'styles', items : ['Styles','Format'] },
        { name: 'paragraph', items : ['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote'] },
        '/',
        { name: 'colors', items : ['TextColor','BGColor'] },
        { name: 'editing', items : ['Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt'] },
        { name: 'forms', items : ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'] },
        { name: 'links', items : ['Link','Unlink','Anchor'] },
        { name: 'insert', items : ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'] },
         { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
    ];

    config.toolbar_inline = [
        { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
        { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
        { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
        { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
        '/',
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
        { name: 'about', items: [ 'About' ] }
    ];

};
