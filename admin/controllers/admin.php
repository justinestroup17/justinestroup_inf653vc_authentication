<?php
    switch($action) {
        case 'logout':
            // Unset variable(s)
            $firstname = $_SESSION['userid'];
            unset($_SESSION['userid']);

            // end session
            session_destroy();

            // delete session cookie
            $name = session_name();
            $expire = strtotime('-1 year');
            $params = session_get_cookie_params();
            $path = $params['path'];
            $domain = $params['domain'];
            $secure = $params['secure'];
            $httponly = $params['httponly'];
            setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
            
            include('/view/login.php');
            break;
        case 'show_register':
            include('/view/register.php');
            break;
        case 'show_login':
            include('/view/login.php');
            break;
        case 'login':
            $check_valid_login = is_valid_login();
            if($check_valid_login) {
                $_SESSION['username'] = $username;
                header("Location: .");
            } else {
                $login_message = 'Incorrect Login / Login Required';
                echo($login_message);
                include('/view/login.php');
            }
            break;
        case 'register':
            include('/util/valid_register.php');
            $check_valid_registration = valid_registration();
            if(!empty($errors)) {
                include('/view/register.php');
            } else {
                add_admin();
                $_SESSION['username'] = $username;
                header("Location: .");
            }
            break;
        default:
            include('view/vehicle_list.php');
    }