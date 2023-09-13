<?php

$method = $_GET['method'];
$url = 'https://jsonplaceholder.typicode.com/posts';

//Получение данных

if ($method == 'get') {
    $postId = ($_POST['postId'] == '' ? '' : (int)$_POST['postId']);
    $url = "$url/" . $postId;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $response = curl_exec($ch);

    $json_response = [
        'status' => !($response === '{}'),
        'response' => $response
    ];

    curl_close($ch);

    echo json_encode($json_response);
}

//Отправка данных

if ($method == 'post') {

    $post = [
        'title' => $_POST['title'],
        'body' => $_POST['body'],
        'userId' => (int)$_POST['userId']
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post, '&'));

    $response = curl_exec($ch);

    curl_close($ch);

    echo json_encode($response);
}