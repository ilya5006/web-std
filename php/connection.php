<?php
class Database
{
    private $mysqli;

    /**
     * Create mysql connection
     * @param string $host Host address
     * @param string $user Database username
     * @param string $password Database password
     * @param string $database Database name
     */
    public function __construct(string $host, string $user, string $password, string $database)
    {
        $this->mysqli = new mysqli($host, $user, $password, $database);
    }

    /**
     * Function which return one-dimensional array
     * @param string $query String of query
     * @return array Result of query ['1', '2']
     */
    public function query($query)
    {
        $queryResult = $this->mysqli->query($query);
        return $queryResult->fetch_assoc();
    }

    /**
     * Function which return two-dimensional array
     * @param string $query String of query
     * @return array Result of query [['1', '2'], ['3', '4']]
     */
    public function queryAll($query)
    {
        $queryResult = $this->mysqli->query($query);
        return $queryResult->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Functoin which return result of query (true)
     * @param string $query String of query
     * @return bool Result of query (success or unsuccess)
     */
    public function queryExecute($query)
    {
        return $this->mysqli->query($query);
    }
}
$mysqlDatabase = new Database('localhost', 'root', '', 'web-studio');
?>