<?php
require_once "../config/connect.php";


###############################################
######### contact ###########################
###############################################

$contact = "CREATE TABLE IF NOT EXISTS contact 
(c_id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
comentario VARCHAR(200) NOT NULL,
timestamp timestamp NOT NULL,
PRIMARY KEY(c_id)
)";

if($r = $db->query($contact)) {
	echo 'goodstuff contact';
} else {
	echo 'bad ' . mysqli_error($db);
}

// ALTER TABLE comments
// ADD CONSTRAINT FK_comments_user_id FOREIGN KEY (user_id)
// REFERENCES users (id)


?>