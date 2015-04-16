// JavaScript Document
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="content1"]', {
	cssPath : 'kindeditor/plugins/code/prettify.css',
	uploadJson : 'kindeditor/php/upload_json.php',
	fileManagerJson : 'kindeditor/php/file_manager_json.php',
	allowFileManager : true,
	afterCreate : function() {
	var self = this;
	K.ctrl(document, 13, function() {
	self.sync();
	K('form[name=example]')[0].submit();
	});

	K.ctrl(self.edit.doc, 13, function() {
	self.sync();
	K('form[name=example]')[0].submit();
	});
	}
	});
	prettyPrint();
});