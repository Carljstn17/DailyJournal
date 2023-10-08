<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/profile/activePage.js"></script>
    <title>nav</title>
</head>
<body>
    <div class="nav-container">
        <nav class="nav">
          <a href="profile.html" data-page="profile" title="profile" ><span class="material-symbols-outlined">
            group
            </span></a>
          <a href="favorites.html" data-page="gallery" title="gallery" ><span class="material-symbols-outlined">
            gallery_thumbnail
            </span></a>
          <a href="friends.html" data-page="create" title="create" ><span class="material-symbols-outlined">
            add_circle
            </span></a>
          
        </nav>
      </div>  

      
</body>
</html>