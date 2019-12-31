<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "solid";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getDownliners($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT id, is_active, firstname, lastname, username, referer, left, right, mobile, email, level_id FROM `users` WHERE referer = '$sess_ref' AND is_active = 1 AND right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['firstname'].'</td>';
            echo '<td>'.$row['lastname'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['username'].'</td>';
            echo '<td>'.$row['referer'].'</td>';
            echo '<tr>';
            getDownliners($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners2($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '2' AND '6')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners2($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners3($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '2' AND '6')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners3($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners4($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '2' AND '6')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners4($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners5($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '2' AND '6')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners5($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners6($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '2' AND '6')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners6($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners7($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				 FROM `users`
				 WHERE referer = '$sess_ref'
				 AND user_status = '1'
				 AND user_level = '7'
				 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners7($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners8($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				 FROM `users`
				 WHERE referer = '$sess_ref'
				 AND user_status = '1'
				 AND user_level = '8'
				 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners8($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners9($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				FROM `users`
		 		WHERE referer = '$sess_ref'
				AND user_status = '1'
				AND (user_level BETWEEN '9' AND '11')
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners9($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners10($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    // $i = 1;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				 FROM `users`
				 WHERE referer = '$sess_ref'
				 AND user_status = '1'
				 AND (user_level BETWEEN '9' AND '11')
				 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners10($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners11($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				 FROM `users`
				 WHERE referer = '$sess_ref'
				 AND user_status = '1'
				 AND (user_level BETWEEN '9' AND '11')
				 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners11($row['user_ref']);
        }
    }

    return $children;
}

function getDownliners12($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level
				 FROM `users`
				 WHERE referer = '$sess_ref'
				 AND user_status = '1'
				 AND user_level = '12'
				 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    $children = array();

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_array($res)) {

            echo '<tr>';
            // echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['user_fname'].'</td>';
            echo '<td>'.$row['user_mobile'].'</td>';
            echo '<td>'.$row['user_email'].'</td>';
            echo '<td>'.$row['user_level'].'</td>';
            echo '<td>'.$row['user_ref'].'</td>';
            echo '<tr>';
            getDownliners12($row['user_ref']);
        }
    }

    return $children;
}


?>
