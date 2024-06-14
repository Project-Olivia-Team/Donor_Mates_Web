<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 - Botman Chatbot</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        body {
            background-color: white; /* Ubah latar belakang menjadi putih */
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .chat-container {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="chat-container"></div>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            aboutText: 'Start the conversation with Hi',
            frameEndpoint: '/botman/chat',
            introMessage: "✋ Hi! I'm a chatbot",
            chatServer: '/botman',
            title: 'My Bot',
            mainColor: '#ae252c',
            bubbleBackground: '#ae252c',
            bubbleColor: '#ffffff'
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>
