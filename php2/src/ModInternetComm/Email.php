<?php
// A simple email() example.
// A working MTA (mail server) is required to complete the delivery and appropriate php.ini configuration
if (isset($_POST['eadd']) && isset($_POST['subject']) && isset($_POST['msg'])) // if "email" form is filled out, send email
{
    // send email
    if (ctype_alnum($_POST['eadd']) && ctype_alnum($_POST['subject']) && ctype_alnum($_POST['msg'])) {
        $to = $_POST['eadd']; // Should use preg functions to validate.
        $subject = htmlspecialchars($_POST['subject']);
        $msg = htmlspecialchars($_POST['msg']);

        // To use all parameters, note: the @ is used here to suppress errors.
        $headers = 'From: test@example.com \r\n';
        $headers .= 'MIME-Version: 1.0 \r\n';
        $headers .= 'Content-type: Text/html; charset=UTF-8 \r\n';
        $params = '-f test@example.com';
        $result = @mail($to, $subject, $msg, $headers, $params);

        // To use minimum required parameters
        $result = @mail($to, $subject, $msg);

        if ($result) {
            echo 'Mail Sent';
        } else {
            echo 'Mail not sent';
        }
    } else {
        die('Something bogus in the submittal');
    }
} else { // if "email" is not filled out, display the form
    echo "<form method='post' action='mailform.php'>
				Email: <input name='email' type='text' /><br />
				Subject: <input name='subject' type='text' /><br />
				Message:<br />
				<textarea name='message' rows='15' cols='40'>
				</textarea><br />
				<input type='submit' />
			</form>";
}