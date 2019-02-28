/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
//    config.extraPlugins = 'wordcount';
//    config.wordcount = {
//        showParagraphs: false,
//        showWordCount: true,
//        showCharCount: true,
//        countSpacesAsChars: true,
//        countHTML: false,
//        maxWordCount: -1,
//        maxCharCount: 250
//    };
    config.extraPlugins = 'horizontalrule';
    config.height = '300px';     // 500 pixels wide.
    config.width = '100%';
    config.baseFloatZIndex = 99999999999999;
};
