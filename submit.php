<?php
// submit.php

header('Content-Type: application/json');

// 获取 POST 数据
$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['nickname']) || !isset($data['answers'])) {
    echo json_encode(['success' => false, 'message' => '无效的请求数据。']);
    exit;
}

$nickname = trim($data['nickname']);
$answers = $data['answers'];

// 简单的验证
if ($nickname === '') {
    echo json_encode(['success' => false, 'message' => '昵称不能为空。']);
    exit;
}

if (!is_array($answers) || empty($answers)) {
    echo json_encode(['success' => false, 'message' => '回答不能为空。']);
    exit;
}

// 生成唯一代码
$uniqueCode = uniqid();

// 创建用户目录
$userDir = 'users/' . $uniqueCode;
if (!file_exists('users')) {
    mkdir('users', 0755);
}
if (!mkdir($userDir, 0755, true)) {
    echo json_encode(['success' => false, 'message' => '无法创建用户目录。']);
    exit;
}

// 构建数据数组
$userData = [
    'nickname' => $nickname,
    'answers' => []
];

// 组织回答数据
foreach ($answers as $category => $qa) {
    foreach ($qa as $question => $answer) {
        $userData['answers'][] = [
            'category' => $category,
            'question' => $question,
            'answer' => $answer
        ];
    }
}

// 保存为 JSON 文件
$dataFile = $userDir . '/data.json';
if (file_put_contents($dataFile, json_encode($userData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT))) {
    echo json_encode(['success' => true, 'uniqueCode' => $uniqueCode]);
} else {
    echo json_encode(['success' => false, 'message' => '无法保存数据。']);
}
?>
