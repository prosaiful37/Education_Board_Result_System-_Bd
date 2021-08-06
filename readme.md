## Education board result system Bd

This is learning purpose project for student result calculation. We use some programming language here.

#### Language List

- HTML5
- CSS3
- JavaScript
- JQuery
- PHP
- MySql
- OOP
- PDO 

#### Database Class Design
```php

	require_once "../../config.php"
	namespace Edu\Board\Support;
	use PDO
	
	
	/**
	 * Database Management
	 */
	abstract class Database
	{
		/**
		 * server information
		 */
		private $host = HOST;
		private $user = USER;
		private $pass = PASS;
		private $db = DB;
		private $connection;

		/**
		 * Database connection
		 */
		protected function connection()
		{
			$connection new PDO("mysql:host=". $this -> host .";db_name=". $this -> db, $this -> user,  $this -> pass);
		}

	}

```
