<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
      foreach($daftar as $row):
      echo"<tr>
      <th>$row->nama</th>
      <td>$row->nik</td>
      <td>$row->jeniskelamin</td>
      <td>$row->agama</td>
      <td>$row->alamat</td>
      <td>$row->email</td>
   
      </tr>";
      endforeach;
      ?>

    </tbody>
</table>
