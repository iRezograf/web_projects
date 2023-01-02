<?php class Database 
{
    public $connection;
 
    public function __construct()
    {
        $ini = "config.ini" ;
        $parse = parse_ini_file ( $ini , true ) ;
        
        $driver = $parse [ "db_driver" ] ;
        $dsn = "${driver}:" ;
        $user = $parse [ "db_user" ] ;
        $password = $parse [ "db_password" ] ;
        $options = $parse [ "db_options" ] ;
        $attributes = $parse [ "db_attributes" ] ;
        
        foreach ( $parse [ "dsn" ] as $k => $v ) {
            $dsn .= "${k}=${v};" ;
        }
        
        //$dsn = http_build_query($parse [ "dsn" ],'',';');
             
        foreach ( $parse [ "dsn" ] as $k => $v ) {
            $dsn .= "${k}=${v};" ;
        }

        $this->connection = new PDO ( $dsn, $user, $password, $options ) ;
        //$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        foreach ( $attributes as $k => $v ) {
            $this->connection -> setAttribute ( constant ( "PDO::{$k}" )
                , constant ( "PDO::{$v}" ) ) ;
        }
    }

    public function query($sql)
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement;
    }
        

} ?>