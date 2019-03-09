<div class="table-responsive">
  <table class="table table-bordered boxx" id="person">
     <thead class="thead-light">
       <tr>
         <th>no</th>
         <th>nama daerah</th>
         <th>jumlah penduduk</th>
         <th>total pendapatan</th>
         <th>rata rata pendapatan</th>
         <th>status</th>
       </tr>
     </thead>
     <tbody>
     <?php
     $no=1;
     $hasil=0;
     $sql=mysqli_query($conn,"SELECT DISTINCT income,name_region,name FROM person JOIN regions ON person.id_regions=regions.id_regions group by name_region")or die(mysqli_error($conn));
     while ($row=mysqli_fetch_assoc($sql)) {
         $hasil +=$row['income'];
         ?>
        <tr>
          <td><?=$no++?></td>
          <td><?=$row['name_region'];?></td>
          <td></td>
          <td><?=number_format($hasil)?></td>
          <td></td>
          <td></td>
          </tr>
     <?php }?>
     </tbody>
  </table>
</div>