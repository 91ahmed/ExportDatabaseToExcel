<?php
	
	namespace ExportToExcel;

	use PdoDatabaseConnect\DatabaseConnect;

	/**
	 *	Export Database as Excel sheet
	 */
	class ExportToExcel extends DatabaseConnect
	{
		public $dbh;
		public $table;
		public $columns;

		public function __construct ()
		{
			// Get database instance
			$connect = new DatabaseConnect();
			$connect->setConfig('driver', $_POST['driver']);
			$connect->setConfig('host', $_POST['host']);
			$connect->setConfig('username', $_POST['username']);
			$connect->setConfig('password', $_POST['password']);
			$connect->setConfig('database', $_POST['databasename']);
			$connect->setConfig('port', $_POST['port']);
			$this->dbh = $connect->connect();

			// Get table and columns values
			$this->table = $_POST['table'];
			$this->columns = $_POST['columns'];

			if (empty($this->columns)) {
				$this->columns = '*';
			}
		}

		public function data ()
		{
			$stmt = $this->dbh->prepare("SELECT {$this->columns} FROM {$this->table}");
			$stmt->execute();
			$data = $stmt->fetchAll();

			return $data;
		}
	}
?>