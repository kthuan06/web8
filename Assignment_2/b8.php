<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="_posteddata.php" method="post">
<textarea name="tomtat" cols="" rows="" ></textarea>
<script type="text/javascript">
//<![CDATA[
// This call can be placed at any point after the
// <textarea>, or inside a <head><script> in a
// window.onload event handler.
// Replace the <textarea id="editor"> with an CKEditor
// instance, using default configurations.
CKEDITOR.replace( 'tomtat' );
//]]>
</script>
<input name="ok" type="submit" value="Ok" />
</form>
</body>
</html>