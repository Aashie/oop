<?php


class User {

	public $name;
	public $bio;
	public $password;
	
	const SERVER = 'localhost';
	const USER = 'root';
	const PASS = '';
	const DB = 'oop';

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getBio()
	{
		return $this->bio;
	}

	/**
	 * @param mixed $bio
	 */
	public function setBio($bio)
	{
		$this->bio = $bio;
	}

	public function save() {

		$connection = mysqli_connect( 
			self::SERVER, 
			self::USER, 
			self::PASS, 
			self::DB
		);

		$sql = 'insert into users ( name, bio,password ) values ( "'. $this->name.'", "'. $this->bio .'", "'. $this->password .'" )';
		echo $sql;
		mysqli_query( $connection, $sql );
		mysqli_close( $connection );
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password)
	{
		$this->password = md5( $password );
	}
	

}
