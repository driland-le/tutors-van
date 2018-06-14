/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
  config.filebrowserBrowseUrl = '/packages/templateEditor/kcfinder/browse.php?opener=ckeditor&type=files';
  config.filebrowserImageBrowseUrl = '/packages/templateEditor/kcfinder/browse.php?opener=ckeditor&type=images';
  config.filebrowserFlashBrowseUrl = '/packages/templateEditor/kcfinder/browse.php?opener=ckeditor&type=flash';
  config.filebrowserUploadUrl = '/packages/templateEditor/kcfinder/upload.php?opener=ckeditor&type=files';
  config.filebrowserImageUploadUrl = '/packages/templateEditor/kcfinder/upload.php?opener=ckeditor&type=images';
  config.filebrowserFlashUploadUrl = '/packages/templateEditor/kcfinder/upload.php?opener=ckeditor&type=flash';
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
