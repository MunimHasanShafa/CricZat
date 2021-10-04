<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editorial||CricZat</title>
</head>
<body>
<div class="container nav-image" id="header-section">
        <a href="index.php"><img src="logos/footer.png" alt=""></a>
        <i class="bi bi-shield-check"></i>
    </div>

            <!-- <div class="container edit-post editorial">
                <h4>Add News</h4>
                <form action="addto.php" method="post" enctype="multipart/form-data">
                    <textarea name="title" id="" cols="30" rows="1"></textarea><br>
                    <textarea name="news_body" id="" cols="30" rows="3"></textarea><br>
                    <input type="file" name="image" id=""><br>
                    <input type="submit" name="post" value="Add This">

                </form>
            </div> -->

            <div class="container edit-post editorial">
            <div class="row ">
                <div class="col-md-4">
                <h4>Add News</h4>
                <form action="addto.php" method="post" enctype="multipart/form-data">
                    <textarea name="title" id="" cols="30" rows="1"></textarea><br>
                    <textarea name="news_body" id="" cols="30" rows="3"></textarea><br>
                    <input type="file" name="image" id=""><br>
                    <input type="submit" name="post" value="Add This">

                </form>
                </div>
                <div class="col-md-4">
                <h4>Add Feature Post</h4>
                <form action="addToFet.php" method="post" enctype="multipart/form-data">
                    <textarea name="fet_title" id="" cols="30" rows="1"></textarea><br>
                    <textarea name="name" id="" cols="30" rows="1"></textarea><br>
                    <textarea name="fet_body" id="" cols="30" rows="3"></textarea><br>
                    <input type="file" name="fet_image" id=""><br>
                    <input type="submit" name="post" value="Add This">

                </form>
                </div>
                <div class="col-md-4"></div>
            </div>
            </div>

    
</body>
</html>