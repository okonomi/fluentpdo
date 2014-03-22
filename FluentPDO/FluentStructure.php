<?php

namespace FluentPDO;

class FluentStructure
{
    private $primaryKey;

    private $foreignKey;

    /**
     * @param string $primaryKey
     * @param string $foreignKey
     */
    public function __construct($primaryKey = 'id', $foreignKey = '%s_id')
    {
        if ($foreignKey === null) {
            $foreignKey = $primaryKey;
        }
        $this->primaryKey = $primaryKey;
        $this->foreignKey = $foreignKey;
    }

    /**
     * @param string $table
     * @return string
     */
    public function getPrimaryKey($table)
    {
        return $this->key($this->primaryKey, $table);
    }

    /**
     * @param string $table
     * @return string
     */
    public function getForeignKey($table)
    {
        return $this->key($this->foreignKey, $table);
    }

    /**
     * @param string|callable $key
     * @param string $table
     * @return string
     */
    private function key($key, $table)
    {
        if (is_callable($key)) {
            return $key($table);
        }
        return sprintf($key, $table);
    }
}
