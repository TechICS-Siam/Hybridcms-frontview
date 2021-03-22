/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.allowedContent = true;
    config.extraAllowedContent = true;
    config.extraAllowedContent = '*(*)';
    config.extraAllowedContent = '*(*);*{*}';
    config.extraAllowedContent = 'span;ul;li;table;td;style;*[id];*(*);*{*}';
    config.protectedSource.push( /<i class[\s\S]*?\><\/i>/g );
    config.extraAllowedContent = '*[id];*(*);*{*};p(*)[*]{*};div(*)[*]{*};li(*)[*]{*};ul(*)[*]{*};span(*)[*]{*};table(*)[*]{*};td(*)[*]{*}';
    config.extraAllowedContent = 'style';
    config.extraAllowedContent = '*[id]';
    config.extraAllowedContent = 'p(newclass)';
    config.extraAllowedContent = '*(newclass)';
    config.extraAllowedContent = '*(*)';
    config.extraAllowedContent = 'div(*)';
    config.extraAllowedContent = 'div(col-md-*,container-fluid,row)';
    CKEDITOR.dtd.$removeEmpty.span = 0;
};
