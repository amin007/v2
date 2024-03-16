<?php
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);

# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');

$loanAmount = 44000.00;
$months = 246;
$annualInterestRate = 4.08;

$monthlyInterestRate = $annualInterestRate / (12 * 100); // convert annual interest rate to monthly rate
$monthlyPayment = $loanAmount * ($monthlyInterestRate * pow(1 + $monthlyInterestRate, $months)) / (pow(1 + $monthlyInterestRate, $months) - 1);

$balance = $loanAmount;
$interestTotal = 0;
$paymentSchedule = [];

for ($i = 1; $i <= $months; $i++) {
	$interest = $balance * $monthlyInterestRate;
	$interestTotal += $interest;
	$principal = $monthlyPayment - $interest;
	$balance -= $principal;

	$paymentSchedule[] = [
		'month' => $i,
		'payment' => round($monthlyPayment, 2),
		'principal' => round($principal, 2),
		'interest' => round($interest, 2),
		'balance' => round($balance, 2)
	];
}

?>

<table>
<thead>
<tr>
	<th>Month</th>
	<th>Year</th>
	<th>Payment</th>
	<th>Principal</th>
	<th>Interest</th>
	<th>Balance</th>
</tr>
</thead>
<tbody>
<?php foreach ($paymentSchedule as $payment) { ?>
<tr>
	<td><?= $payment['month'] ?></td>
	<td><?= ($payment['month']/12) ?></td>
	<td><?= $payment['payment'] ?></td>
	<td><?= $payment['principal'] ?></td>
	<td><?= $payment['interest'] ?></td>
	<td><?= $payment['balance'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>
