<?php
$host = "localhost";
$user = "root"; // your DB username
$pass = "";     // your DB password
$db   = "wada_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $target_dir = "uploads/";
    if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }

    $imageFile = $target_dir . basename($_FILES["image"]["name"]);
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $imageFile)){
        $stmt = $conn->prepare("INSERT INTO projects (title, description, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $description, $imageFile);
        if($stmt->execute()){
            $msg = "Project uploaded successfully!";
        } else { $msg = "Database error: " . $stmt->error; }
    } else { $msg = "Failed to upload image."; }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4 text-primary">Upload New Project</h2>
    <?php if(isset($msg)) echo "<div class='alert alert-info'>$msg</div>"; ?>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Project Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Project Description</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Project Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Upload Project</button>
    </form>
</div>
</body>
</html>
