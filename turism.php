<pre>
<?php
  $destination_offers = [
    "Paris",
    "Rome",
    "Amsterdam",
    "Prague",
    "Dubai"
  ];
  $destination_desired = [
    "Prague",
    "Dubai",
    "Moscow",
    "Chisinau"
  ];

  $options = array_intersect(
    $destination_offers,
    $destination_desired
  );
  $options = array_reverse(array_reverse ($options));
  var_dump($options);

 ?>
<?php
print "<h1>Offers</h1>";
for ($i=0; $i < count($destination_offers); $i++)
{
print $destination_offers[$i] . "<br>";
}
?>

<?php
print "<h1>Client Wishes</h1>";
for ($i=0; $i < count($destination_desired); $i++)
{
print $destination_desired[$i] . "<br>";
}
?>

<?php
print "<h1>Comune</h1>";
for ($i=0; $i < count($options); $i++)
{
print $options[$i] . "<br>";
}
 ?>
