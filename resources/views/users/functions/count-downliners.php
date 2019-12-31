<?php

function checkLeft($left){
    global $conn;

    $query = "SELECT user_id, user_status, user_ref, referer, tree_left, tree_right 
		      FROM `users` 
			  WHERE user_ref = '$left'
			  AND user_status = '1'
			  AND tree_right IS NOT NULL
			  AND tree_left IS NOT NULL";

    $result = $conn->query($query);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if($result->num_rows > 0)
    {
        return true;
    }
    else return false;
}

function checkRight($right){
    global $conn;

    $query = "SELECT user_id, user_status, user_ref, referer, tree_left, tree_right 
		      FROM `users` 
			  WHERE user_ref = '$right'
			  AND user_status = '1'
			  AND tree_right IS NOT NULL
			  AND tree_left IS NOT NULL";

    $result = $conn->query($query);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if($result->num_rows > 0)
    {
        return true;
    }
    else return false;
}

function countDownlinersLeft($sess_left) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $countLeft = 0;

    $qry = "SELECT id, is_active, referer, username, left, level_id FROM `users` 
			 WHERE referer = '$sess_left' 
			 AND is_active = '1' 
			 AND right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['referer'];
            $row['level_id'];

            $countLeft++;
            $countLeft += countDownlinersLeft($row['referer']);

        }
    }

    return $countLeft;
}

function countDownlinersRight($sess_right) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $countRight = 0;

    $qry = "SELECT user_id, user_status, user_ref, referer, tree_left, user_level FROM `users` 
			 WHERE referer = '$sess_right' 
			 AND user_status = '1' 
			 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $countRight++;
            $countRight += countDownlinersRight($row['user_ref']);

        }
    }

    return $countRight;
}

function countDownliners($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
			 WHERE referer = '$sess_ref' 
			 AND user_status = '1' 
			 AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners2($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '2' AND '6')
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners2($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners3($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '2' AND '6') 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners3($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners4($sess_ref){

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;
    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '2' AND '6')
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners4($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners5($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;
    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '2' AND '6') 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners5($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners6($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);
    global $conn;
    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '2' AND '6') 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners6($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners7($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND user_level = '7' 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners7($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners8($sess_ref){

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND user_level = '8' 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners8($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners9($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
		 		WHERE referer = '$sess_ref' 
				AND user_status = '1' 
				AND (user_level BETWEEN '9' AND '11') 
				AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners9($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners10($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '9' AND '11')
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners10($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners11($sess_ref){

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND (user_level BETWEEN '9' AND '11') 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners11($row['user_ref']);

        }
    }

    return $count;
}

function countDownliners12($sess_ref) {

    ini_set('xdebug.max_nesting_level', 300);

    global $conn;

    $count = 0;

    $qry = "SELECT user_id, user_status, user_fname, user_ref, referer, tree_left, tree_right, user_mobile, user_email, user_level FROM `users` 
	 		WHERE referer = '$sess_ref' 
			AND user_status = '1' 
			AND user_level = '12' 
			AND tree_right IS NOT NULL";

    $res = mysqli_query($conn, $qry);

    if (!$res) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if(mysqli_num_rows($res) > 0) {

        # It has children, let's get them.
        while($row = mysqli_fetch_assoc($res)) {

            $row['user_ref'];
            $row['user_level'];

            $count++;
            $count += countDownliners12($row['user_ref']);

        }
    }

    return $count;
}
?>
