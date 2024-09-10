<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['question']) && !empty($_POST['question'])) {
        $question = htmlspecialchars($_POST['question']);
        // 这里可以添加代码将问题存储到数据库或进行其他处理
        // 假设成功处理问题，并返回成功响应
        echo json_encode(['success' => true, 'question' => $question]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
