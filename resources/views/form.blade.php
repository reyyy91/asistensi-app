<!DOCTYPE html>
<html>
<head>
    <title>Form Upload Praktikan</title>
</head>
<body>

    <h1>Form Upload Praktikan</h1>

    <form action="/simpan" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </div>

        <br>

        <div>
            <label>NPM:</label><br>
            <input type="text" name="npm" required>
        </div>

        <br>

        <div>
            <label>Upload File PDF:</label><br>
            <input type="file" name="file_pdf" accept="application/pdf" required>
        </div>

        <br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
