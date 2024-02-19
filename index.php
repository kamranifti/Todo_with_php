<?php
require "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="head">Todo App</h1>
        <form action="handleActions.php" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox" placeholder="Add a New Task">
                <button type="submit" name="add" id="add">Add</button>
            </div>
            <h1 class="top-heading">To Do !</h1>
            <ul class="list">
                <?php
                $itemList = get_items();
                while ($row = $itemList->fetch_assoc()) {
                ?>
                    <li class="item">
                        <p class="tasks"><?php echo $row['item']; ?></p>
                        <div class="buttons">
                            <button type="submit" name="checked" id="check" class="ico" value="<?php echo $row['id']; ?>"><i class="fa-regular fa-circle-check icons"></i></button>
                            <button type="submit" name="deleted" id="delete" class="ico" value="<?php echo $row['id']; ?>"><i class="fa-solid fa-xmark icons"></i></button>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <hr>
            <h1 class="top-heading done">Done</h1>
            <ul class="list">
                <?php
                $itemList = get_items_checked();
                while ($row = $itemList->fetch_assoc()) {
                ?>
                    <li class="item fade">
                        <p class="tasks deleted"><?php echo $row['item']; ?></p>
                        <div class="buttons">
                            <button type="submit" name="deleted" id="delete" class="ico" value="<?php echo $row['id']; ?>"><i class="fa-solid fa-xmark icons last"></i></button>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </form>
    </div>
</body>

</html>