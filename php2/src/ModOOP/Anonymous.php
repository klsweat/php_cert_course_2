<?php
// we see if this function works
function findById(PDO $pdo, $id)
{
    $pdo->prepare('SELECT name FROM customers WHERE id = ?');
    $stmt = $pdo->execute([$id]);
    return $stmt->fetch();
}

// we create a fake PDO class
$fakePDO = new class() extends PDO {
    public function __construct() {}
    public function prepare($stmt, $options = NULL) {}
    public function execute($id)
    {
        return new class () extends PDOStatement {
            public function fetch($a = NULL, $b = NULL, $c = NULL)
            {
                return ['name' => 'Fred Flintstone'];
            }
        };
    }
};

// now we call the function
var_dump(findById($fakePDO, 1));
