<?php

namespace Eraasoft311\Mvc\Contracts\Database;

interface DatabaseInterface {
    public function insert(array $data):object;
    public function update(array $data):object;
    public function delete():object;
    public function select(string $columns = "*"):object;
    public function where(string $column,string $operator , string $value):object;
    public function excute():int;
    public function first():array;
    public function all():array;
}