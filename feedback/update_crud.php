<?php include 'inc/header.php'; ?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM feedback WHERE id=$id";
$querry = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($querry, MYSQLI_ASSOC);

?>
<?php foreach ($feedbacks as $feedback) : ?>
    <form method="POST" action="<?php echo htmlspecialchars('config/update.php'); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $feedback['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $feedback['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="feedback" class="form-label">Feedback</label>
            <textarea class="form-control" name="feedback" id="feedback"><?php echo $feedback['body']; ?></textarea>
        </div>
        <div class="d-flex justify-content-end gap-2"><a href='config/update.php?id=<?php echo $feedback['id'];?>name=<?php echo $feedback['name']; ?>email=<?php echo $feedback['email']; ?>body=<?php echo $feedback['body']; ?>'><button type="button" class="btn btn-outline-secondary" >Update</button></a></div>
    </form>
<?php endforeach; ?>


<?php include 'inc/footer.php'; ?>