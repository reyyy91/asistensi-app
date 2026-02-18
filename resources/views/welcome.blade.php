<!DOCTYPE html>
<html>
<head>
    <title>Upload Praktikan</title>
</head>
<body>

<h2>Form Upload Praktikan</h2>

<form action="/simpan" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama" placeholder="Nama Praktikan"><br><br>
    <input type="text" name="npm" placeholder="NPM"><br><br>
    <input type="file" name="file_pdf"><br><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>
