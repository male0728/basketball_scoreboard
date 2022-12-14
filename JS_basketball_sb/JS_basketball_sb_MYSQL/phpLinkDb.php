<?php
class connectDb{
        function __construct($password, $db)
        {
                $connect = new mysqli('localhost', 'root', $password);
                        $connect->select_db($db);
                        $connect->set_charset("utf8");
                        $this->connect = $connect;
                }
                function InssertQuery($target, $value)
                {
                        $commend = "INSERT INTO $target SET $value";
                        $this->connect->query($commend);
                }
                function SelectFieldsQuery($target, $fieldNames)
                {
                        $commend = "SELECT $fieldNames FROM $target";
                        $result = $this->connect->query($commend);
                        $i = 0;
                        $returnValue = [];
                        while ($deta = $result->fetch_field()) {
                                $returnValue[$i] = $deta->name;
                                $i++;
                        }
                        $result->free();
                        return $returnValue;
                }
                function SelectValuesQuery($target, $fieldName)
                {
                        $commend = "SELECT $fieldName FROM $target";
                        $result = $this->connect->query($commend);
                        $i = 0;
                        $returnValue = [];
                        while ($row = $result->fetch_row()) {
                                for ($j = 0; $j < count($row); $j++) {
                                        $returnValue[$i][$j] = $row[$j];
                                }
                                $i++;
                        }
                        $result->free();
                        return $returnValue;
                }
                function SelectConditionQuery($target, $fieldName, $condition)
                {
                        $commend = "SELECT $fieldName FROM $target WHERE $condition";
                        $result = $this->connect->query($commend);
                        $i = 0;
                        $returnValue = [];
                        while ($row = $result->fetch_row()) {
                                for ($j = 0; $j < count($row); $j++) {
                                        $returnValue[$i][$j] = $row[$j];
                                }
                                $i++;
                        }
                        $result->free();
                        return $returnValue;
                }
                function UpdateQuery($target, $update, $condition)
                {
                        $commend = "UPDATE $target SET $update WHERE $condition";
                        if (($this->connect->query($commend)) && ($this->connect->affected_rows != 0)) {
                                return true;
                        } else {
                                return false;
                        }
                }
                function DeleteQuery($target, $condition)
                {
                        $commend = "DELETE FROM $target WHERE $condition";
                        if ((($this->connect)->query($commend)) && ($this->connect->affected_rows != 0)) {
                                return true;
                        } else {
                                return false;
                        }
                }
                function closeDb()
                {
                        $this->connect->close();
                }
        
}
