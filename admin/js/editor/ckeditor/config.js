/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'ja';
	config.extraPlugins = 'justify';
	// config.filebrowserBrowseUrl = '/calylish/js/editor/kcfinder/browse.php?opener=ckeditor&type=files';
	// config.filebrowserImageBrowseUrl = '/calylish/js/editor/kcfinder/browse.php?opener=ckeditor&type=images';
	// config.filebrowserFlashBrowseUrl = '/editor/kcfinder/browse.php?opener=ckeditor&type=flash';
	// config.filebrowserUploadUrl = '/calylish/js/editor/kcfinder/upload.php?opener=ckeditor&type=files';
	// config.filebrowserImageUploadUrl = '/calylish/js/editor/kcfinder/upload.php?opener=ckeditor&type=images';
	// config.filebrowserFlashUploadUrl = '/calylish/js/editor/kcfinder/upload.php?opener=ckeditor&type=flash';
	// config.filebrowserUploadMethod = 'form';
    config.enterMode = CKEDITOR.ENTER_BR;
};