/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        { name: "clipboard", groups: ["clipboard", "undo"] },
        { name: "editing", groups: ["find", "selection", "spellchecker"] },
        { name: "links" },
        { name: "insert" },
        { name: "forms" },
        { name: "tools" },
        { name: "document", groups: ["mode", "document", "doctools"] },
        { name: "others" },
        "/",
        { name: "basicstyles", groups: ["basicstyles", "cleanup"] },
        {
            name: "paragraph",
            groups: ["list", "indent", "blocks", "align", "bidi"],
        },
        { name: "styles" },
        { name: "colors" },
        { name: "about" },
    ];

    // Simplify the dialog windows.
    config.removeDialogTabs = "image:advanced;link:advanced";
    config.extraPlugins = "image2";
};
