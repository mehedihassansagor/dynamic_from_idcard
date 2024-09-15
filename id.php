<?php
if (isset($_POST['generateinfo'])) {
    $name = $_POST['std_name'];
    $email = $_POST['std_email'];
    $course = $_POST['std_course'];
    $id = $_POST['std_id'];
    $batch = $_POST['std_batch'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ID CARD</title>
</head>

<body>
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="card" style="width: 18rem;">
            <img src="studentpic.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p>Name:<?php if (isset($name)) {
                            echo $name;
                        } ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: <?php if (isset($email)) {
                                                        echo $email;
                                                    } ?></li>
                <li class="list-group-item">Course:<?php if (isset($course)) {
                                                        echo $course;
                                                    } ?></li>
                <li class="list-group-item">ID:<?php if (isset($id)) {
                                                    echo $id;
                                                } ?></li>
                <li class="list-group-item">Batch #<?php if (isset($batch)) {
                                                        echo $batch;
                                                    } ?></li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>