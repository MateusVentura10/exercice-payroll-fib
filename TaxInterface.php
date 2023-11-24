<?php

  require_once "./Employee.php";

  interface TaxInterface {
    public function calculate(Employee $employee);
  }