<?php

  require_once "./TaxInterface.php";

  class InssTax implements TaxInterface
  {
    private float | int $taxValue;

    public function calculate(Employee $employee) : float | int {
      $baseSalary = $employee->baseSalary();
      
      if($baseSalary <= 1000) {
        $this->taxValue = $baseSalary * (8.5/100);
      }

      else {
        $this->taxValue = $baseSalary * (9/100);
      }

      return $this->taxValue;
    }
  }