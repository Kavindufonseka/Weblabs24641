<!DOCTYPE html>
<html>
<head>
  <title>Electricity Bill Calculator</title>
</head>
<body>

<?php
// Function to calculate the electricity bill
function calculateElectricityBill($units) {
  if ($units <= 50) {
    $bill = $units * 3.50;
  } elseif ($units <= 100) {
    $bill = 50 * 3.50 + ($units - 50) * 4.00;
  } elseif ($units <= 150) {
    $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
  } else {
    $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
  }

  return $bill;
}

// Example usage
$unitsConsumed = 125; // Change this value to test different scenarios
$electricityBill = calculateElectricityBill($unitsConsumed);
?>

<h1>Electricity Bill Calculator</h1>
<p>Units Consumed: <?php echo $unitsConsumed; ?></p>
<p>Electricity Bill: Rs.<?php echo $electricityBill; ?></p>

</body>
</html>








