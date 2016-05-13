<?php

class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        include_once 'db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

    /**
     * Storing new phoneimage
     * returns phoneimage details
     * filename, md5sum, deviceid, build_timestamp, changelog
     */
    public function storephoneImage($filename, $md5sum, $deviceid, $build_timestamp, $changelog) {
        // insert user into database
        $result = mysql_query("INSERT INTO yuphonesimageinfo(filename, md5sum, deviceid, build_timestamp, changelog) VALUES('$filename', '$md5sum','$deviceid', NOW(), '$changelog')");
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM gcm_users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Get user by email and password
     */
    public function getUserByEmail($email) {
        $result = mysql_query("SELECT * FROM gcm_users WHERE email = '$email' LIMIT 1");
        return $result;
    }

    /**
     * Getting all phoneimagedata a.karmakar
     */
    public function getAllPhoneDate() {
        $result = mysql_query("select * FROM yuphonesimageinfo");
        return $result;
    }

   	/**
	* Delete all the columns from the table
	*/
	public function clearAll()
	{
		$result = mysql_query("delete * FROM yuphonesimageinfo");
		return result;
	}

	/**
	* Delete based on the MD5 from the table
	*/
	public function clearbymd5($md5sum)
	{
		$result = mysql_query("delete * from yuphonesimageinfo where md5sum='$md5sum'");
		return result;
	}

    /**
     * Check user is existed or not
     */
    public function isUserExisted($email) {
        $result = mysql_query("SELECT email from gcm_users WHERE email = '$email'");
        $no_of_rows = mysql_num_rows($result);
        if ($no_of_rows > 0) {
            // user existed
            return true;
        } else {
            // user not existed
            return false;
        }
    }



}

?>
