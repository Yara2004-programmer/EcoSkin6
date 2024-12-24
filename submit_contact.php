<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // تحقق من البيانات (على سبيل المثال: التأكد من أن الحقول غير فارغة)
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required!";
    } else {
        // هنا يمكنك إرسال البريد الإلكتروني أو تخزين البيانات في قاعدة بيانات
        echo "Thank you for your message! We will get back to you shortly.";
    }
}
?>

