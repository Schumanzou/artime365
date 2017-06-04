<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?=$error?>
<form method="post" action="<?=site_url("user/do_upload")?>" enctype="multipart/form-data">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>