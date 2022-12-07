<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo List Using PHP!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style=" background:rgba(0,0,0,0.75) url('src/img/todosBg.jpg'); background-size: cover; background-blend-mode: darken;">
    <h1 class="text-center my-4 py-4 text-warning">ToDo Listeni Düzenle</h1>
<?php

    include 'database.php';
    $id=$_GET['id'];

    $sql="SELECT * FROM todos WHERE id=".$id;
    $result = mysqli_query($conn,$sql);

    if($result){
        $row=mysqli_fetch_assoc($result);
        $title=$row['Title'];

    }
?>
    <div class="w-50 m-auto">
        
    <form action="editaction.php" method="post" autocomplete="off">
    <label for="title" class="text-light">Görev Adını Düzenle</label>
    <input value="<?php global $title; echo $title ?>" class="form-control" type="text" name="title" id="title" required placeholder="Listeni Düzenle"><br/>
    <input type="hidden" name="id" id="id" value="<?php global $id; echo $id ?>">
    <button class="btn btn-success">Düzenle</button>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>