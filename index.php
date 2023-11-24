<?php

  require_once "./Employee.php";
  require_once "./InssTax.php";
  require_once "./IncomeTax.php";

  $employee  = new Employee(40.00, 28.00, 0);
  $inssTax   = new InssTax();
  $incomeTax = new IncomeTax();

  $inssTax   = $inssTax->calculate($employee);
  $incomeTax = $incomeTax->calculate($employee);

  $salaryTaxs = array($inssTax, $incomeTax);
  $salary     = $employee->salary($employee, $salaryTaxs);

  echo "O salário líquido é {$salary}";


  