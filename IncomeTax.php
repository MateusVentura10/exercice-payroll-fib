<?php 

  require_once "./TaxInterface.php";

  class IncomeTax implements TaxInterface 
  {
    private float | int $taxValue;

    public function calculate(Employee $employee) : float | int {
      $baseSalary = $employee->baseSalary();

      if ($baseSalary <= 500) {
        $this->taxValue = 0;
      }

      elseif ($baseSalary > 500 && $baseSalary <= 1000) {
        $this->taxValue = ($baseSalary * 5) / 100;
      }

      else {
        $this->taxValue = ($baseSalary * 7) / 100;
      }

      return $this->taxValue;
    }
  }