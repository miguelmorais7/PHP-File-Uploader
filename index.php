<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Uploader</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid mt-3">
        <h2>File Uploader</h2>
        <div class="card">
            <div class="card-body">
                <form action="send.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>

        <h6 class="mt-3">Uploaded Files</h6>
        <?php require 'list.php'; ?>
    </div>
</body>
</html>