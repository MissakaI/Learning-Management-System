<?php
/**
 * Created by IntelliJ IDEA.
 * User: Missaka Iddamalgoda
 * Date: 2018-06-26
 * Time: 5:45 PM
 */

$username = $_POST["username"];
//echo $username;

if (preg_match('/^2017\/[A-Za-z]{2}\/\d{3}$/', $username) === 1) {

} else if (preg_match('/^EP\d{3}$/', $username) === 1) {

} else if ($username == 'librarian') {
    echo '
    <script>
    window.location.replace("http://localhost/Learning_Management_System/web/librarian.php");
    </script>
    ';
} else if ($username == 'academic-officer') {
    echo '
    <script>
    window.location.replace("http://localhost/Learning_Management_System/web/librarian.php");
    </script>
    ';
} else if ($username == 'root') {
    echo '
    <script>
    window.location.replace("http://localhost/Learning_Management_System/web/root.php");
    </script>
    ';
}else if ($username == 'student') {
    echo '
    <script>
    window.location.replace("http://localhost/Learning_Management_System/web/manage-student.php");
    </script>
    ';
}else if ($username == 'profssor') {
    echo '
    <script>
    window.location.replace("http://localhost/Learning_Management_System/web/professor.php");
    </script>
    ';
}