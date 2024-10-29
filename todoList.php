<?php include 'php_basic.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Todo List</title>
    <style>
    .container {
        width: 300px;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    form {
        display: flex;
        margin-bottom: 20px;
    }

    input[type="text"] {
        flex: 1;
        padding: 5px;
        margin-right: 10px;
    }

    input[type="submit"] {
        padding: 5px;
        background-color: #28a745;
        color: white;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        display: flex;
        justify-content: space-between;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    .delete-btn {
        color: red;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Todo List</h2>

        <?php
    session_start();

    // Khởi tạo danh sách todo nếu chưa tồn tại
    if (!isset($_SESSION['todos'])) {
        $_SESSION['todos'] = [];
    }

    // Xử lý thêm công việc
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo'])) {
        $newTodo = trim($_POST['todo']);
        if (!empty($newTodo)) {
            $_SESSION['todos'][] = $newTodo;
        }
    }

    // Xử lý xóa công việc
    if (isset($_GET['delete'])) {
        $deleteIndex = $_GET['delete'];
        if (isset($_SESSION['todos'][$deleteIndex])) {
            unset($_SESSION['todos'][$deleteIndex]);
            $_SESSION['todos'] = array_values($_SESSION['todos']); // Đặt lại chỉ số mảng
        }
    }
    ?>

        <!-- Form thêm công việc mới -->
        <form method="POST" action="">
            <input type="text" name="todo" placeholder="Nhập công việc mới..." required>
            <input type="submit" value="Thêm">
        </form>

        <!-- Danh sách công việc -->
        <ul>
            <?php foreach ($_SESSION['todos'] as $index => $todo): ?>
            <li>
                <?php echo htmlspecialchars($todo); ?>
                <a href="?delete=<?php echo $index; ?>" class="delete-btn">Xóa</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>