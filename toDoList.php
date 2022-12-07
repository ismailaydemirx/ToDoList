<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo List Using PHP!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 

  </head>
  <body style=" background:rgba(0,0,0,0.75) url('src/img/todosBg.jpg'); background-size: cover; background-blend-mode: darken;">
    <h1 class="text-center my-4 py-4 text-warning">ToDo List Uygulamasına Hoş Geldin!</h1>

    <div class="w-50 m-auto">
        
    <form action="data.php" method="post" autocomplete="off">
    <label for="title" class="text-light">Görevler</label>
    <input class="form-control" type="text" name="title" id="title" required placeholder="Görev eklemek için tıkla!"><br/>
    <button class="btn btn-success">Listeye Ekle</button>
    </form>
    </div><br/>
    <hr class="bg-light w-50 m-auto">
    <div class="w-50 m-auto">
        <h1 class="text-light">Yapılacaklar:</h1>
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Görevler</th>
      <th scope="col">Ayarlar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'database.php';
    $sql="SELECT * FROM todos";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $title=$row['Title'];
        
    ?>

     <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $title ?></td>
        <td>
            <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
        <?php
        }
    }
    
?>
  </tbody>

</table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
