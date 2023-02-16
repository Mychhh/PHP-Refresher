<?php include 'inc/header.php' ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
$number = 0;
?>

<div class="container-xl d-flex justify-content-between">
    <h1>Sheesh</h1>
    <?php if (empty($feedbacks)) : ?>
        <p class="lead mt3">There is no Items</p>
    <?php endif; ?>
    <div class="position-relative mt-auto mb-auto">
        <button type="button" class="btn btn-outline-primary"
        data-bs-toggle="modal" 
        data-bs-target="#addFeedbackModal"
        >Add Feedback</button>
    </div>
</div>

<!-- table -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Feedback</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">

        <?php foreach ($feedbacks as $feedback) : ?>
            <tr>
                <th scope="row"><?php echo ++$number; ?></th>
                <td><?php echo $feedback['name']; ?></td>
                <td><?php echo $feedback['email']; ?></td>
                <td><?php echo $feedback['body']; ?></td>
                <td><?php echo $feedback['date']; ?></td>
                <td><button type="button" class="btn btn-outline-secondary">Edit</button></td>
                <td><button type="button" class="btn btn-outline-dark">Delete</button></td>
            </tr>
        <?php endforeach; ?>

    </tbody>

</table>
<!-- End of table -->

<!-- Modal -->
<div class="modal fade" id="addFeedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Feedback</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary">Add</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal -->


<?php include 'inc/footer.php' ?>