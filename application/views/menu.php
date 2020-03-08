<!DOCTYPE html>
<html>
<head>
 <title>403 Forbidden</title>
 <link href="<?php echo base_url();?>assets/css/menu.css" rel="stylesheet">
 <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/menu.js"></script>
</head>
<body>
  <header>
    <!-- <nav id ='cssmenu'>
      <div class="logo"><a href="index.html">Responsive </a></div>
      <div id="head-mobile"></div>
      <div class="button"></div>
      <ul>
        <?php foreach($menu as $i){?>
         <li><a href='<?php echo $i['link'];?>'><?php echo $i['nama_menu'];?></a>
           <ul>
            <?php foreach($submenu1 as $a){?>
            <li><a href='<?php echo $a['link_submenu'];?>'><?php echo $a['nama_submenu'];?></a>
             <ul>
              <?php foreach($submenu1 as $b){?>
              <li><a href='<?php echo $b['link_submenu'];?>'><?php echo $b['nama_submenu'];?></a>
              <?php } ?>
            </ul>
          </li>
        <?php }?>
      </ul>
    </li>
  <?php }?>

</ul>
</nav> -->

</header>
<br>
<br>

<form action="<?php echo site_url().'/menu/tambah'; ?>" method="post">
  <table style="margin:20px auto;">
    <tr>
      <td>
        <label>Tambahan Sub Menu level 1</label>
        <select name="id_menu" class="form-control" required="required">
          <option value="">Pilih Menu</option>
          <option value="1">STANDAR 1</option>
          <option value="2">STANDAR 2</option>
          <option value="3">STANDAR 3</option>
          <option value="4">STANDAR 4</option>
          <option value="5">STANDAR 5</option>
          <option value="6">STANDAR 6</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Nama SubMenu</td>
      <td><input type="text" name="submenu_1_"></td>
    </tr>
    <tr>
      <td>Link yang akan dituju</td>
      <td><input type="text" name="link_1_"></td>
    </tr>
    <tr>
      <td>
        <label>Tambahan Sub Menu Level 2</label>
        <select name="id_submenu_1" class="form-control" required="required">
          <option value="">Pilih Menu</option>
          <option value="1">STANDAR 1.1</option>
          <option value="2">STANDAR 2.1</option >
          <option value="3">STANDAR 3.1</option>
          <option value="4">STANDAR 4.1</option>
          <option value="5">STANDAR 5.1</option>
          <option value="6">STANDAR 6.1</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Nama SubMenu level 2</td>
      <td><input type="text" name="submenu_2_"></td>
    </tr>
    <tr>
      <td>Link yang akan dituju </td>
      <td><input type="text" name="link_2_"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Tambah"></td>
    </tr>
  </table>
</form> <!-- 
<?php echo $menu1;?> -->
<?php echo $menu; ?>
</body>
</html>
