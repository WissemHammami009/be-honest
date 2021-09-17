<?php
function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 50; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }
function token_number()
    {
        $characters = '0123456789';
        $randnumber = '';
        for ($i = 0; $i < 8; $i++) {
            $randnumber .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randnumber;
    }
function logout()
{
	if (isset($_POST['bt_logout'])) {
		session_destroy();

		}
}
?>