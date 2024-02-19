<?php
class DBHandler
{
    public $columns = array();
    public $table;
    public $where;
    public $limit;
    public $query_elements = [' SELECT ', ' FROM ', ' WHERE ', ' LIMIT '];
    public function select($columns)
    {
        $this->columns = $columns;
        return $this;
    }
    public function from($table)
    {
        $this->table = $table;
        return $this;
    }
    public function where($where)
    {
        $this->where = $where;
        return $this;
    }
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
    public function result($selectedColumns = "*")
    {
        $query = $this->query_elements[0];
        // if the columns array is empty, select all columns else given columns
        if (count($this->columns)>=1 && !empty($this->columns[0])) {
            $query .= implode(', ', $this->columns);
        } else {
            $query .= $selectedColumns;
        }
        $query .= $this->query_elements[1];
        $query .= $this->table;
        if (!empty($this->where)) {
            $query .= $this->query_elements[2];
            $query .= $this->where;
        }
        if (!empty($this->limit)) {
            $query .= $this->query_elements[3];
            $query .= $this->limit;
        }
        return $query;
    }
}

$objDBHandler = new DBHandler();
$objDBHandler->select(['']);
$objDBHandler->from('accounts');
$objDBHandler->where('id=1');
$objDBHandler->limit(10);
echo $objDBHandler->result();
echo '<br/>';
echo $objDBHandler->select([''])
                  ->from('accounts')
                  ->where('id=1')
                  ->limit(10)
                  ->result();
echo '<br/>';
$objDBHandler = new DBHandler();
$objDBHandler->select([
    'firstname',
    'lastname',
    'address',
    'city']
)->from('accounts')->where('id = 1');
echo $objDBHandler ->result();