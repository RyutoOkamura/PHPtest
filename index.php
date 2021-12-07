<style>
  table{
  border-collapse:collapse;
}
  td{
    border:1px solid black;
  }
</style>

<table>
  <?php
  for($i = 1; $i <= 9; $i++){
    echo '<tr>';
    for($j = 1; $j <= 9; $j++){
      echo '<td>' .$i * $j. '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>