<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримуємо дані з форми
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Встановлюємо ваш email, на який буде приходити повідомлення
    $to = "dimitriy.krog@gmail.com";
    $subject = "Нове повідомлення з форми сайту";

    // Тіло листа
    $body = "Ім'я: $name\nEmail: $email\n\nПовідомлення:\n$message";

    // Заголовки листа
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Відправка листа
    if (mail($to, $subject, $body, $headers)) {
        echo "Повідомлення відправлено успішно!";
    } else {
        echo "Сталася помилка при відправці повідомлення.";
    }
}
?>
