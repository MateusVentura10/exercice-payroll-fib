<?php

  require_once "./TaxInterface.php";

  class Employee
  {
    private float | int $salary;

    public function __construct(
      private float $workedHours,
      private float $salaryHour,
      private int   $numberDependents
    ){}

    public function baseSalary() : float | int {
      $this->salary = $this->workedHours * $this->salaryHour + (50 * $this->numberDependents);
      return $this->salary;
    }

    /**
    * @param TaxInterface[] $taxs
    */
    public function salary(Employee $employee, array $taxs) : float | int {

      $baseSalary = $employee->baseSalary();

      foreach($taxs as $tax) {
        $baseSalary -= $tax;
      }

      return $baseSalary;
    }
  }

