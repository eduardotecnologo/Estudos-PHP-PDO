<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Description</td>
  </tr>
  <?php foreach ($list as $product):?>
    <tr>
      <td><?php-$product['id']?></td>
      <td><?php-$product['name']?></td>
      <td><?php-$product['desc ']?></td>
    </tr>
  <?php endforeach?>
</table>
