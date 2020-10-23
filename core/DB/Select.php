<?php


namespace Core\DB;


class Select
{
    protected $column = '*';
    private $tableName = '';
    protected $where;
    protected $orderBy;
    protected $groupBy;
    protected $limit;
    protected $join = [];

    public function setTableName($tName)
    {
       $this->tableName = $tName;
    }

    public function setJoin($tableName, $condition, $type = 'INNER'){
        $this->join[] = $type . ' JOIN ' . $tableName . ' ON ' . $condition;
    }

    public function setConditions($condition){
        if (is_array($condition)){
            foreach ($condition as $columnsName){
                  if( '*' == $this->column){
                      $this->column = $columnsName;
                  }
            }
        }
        else{
            $this->column .= $condition;
        }
    }
    public function setWhere($where)
    {
        $this->where = $where;
    }

    public function setGroupBy($groupBy){
        $this->groupBy = $groupBy;
    }

    public function setOrderBy($orderBy){
        if(is_array($orderBy)){
            foreach ($orderBy as $key => $value){
                $this->orderBy = $key . ' ' . $value;
            }
        }
        else {
            $this->orderBy .= $orderBy;
        }
    }
    public function setLimit(int $limit, $offset = null){

        if (0 < $offset){
            $this->limit = $offset . ',' . $limit;
        } else {
            $this->limit = $offset;
        }
    }

    public function where($whereId)
    {
        $where = new Where();
        $where->setConditions($whereId);

        return $where->createString();
    }

    public function createString()
    {
        $sql =  'SELECT ' . $this->column . ' FROM ' . $this->tableName;

        if (!empty($this->join)){
            foreach ($this->join as $item){
                $sql .= ' '. $item;
            }
        }

        if(!empty($this->where)) {
            $sql .= $this->where($this->where);
        }

        if(!empty($this->groupBy)) {
            $sql .= ' GROUP BY ' . $this->groupBy;
        }

        if(!empty($this->orderBy)){
            $sql .= ' ORDER BY ' . $this->orderBy;
        }

        if (!empty(($this->limit))) {
            $sql .= ' LIMIT ' . $this->limit;
        }

        return $sql;
    }
}