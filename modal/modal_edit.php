<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Tambah Produk</h4>
   </div>
   <div class="modal-body">
    <form action="../addproduk.php" method="post" >
     <label>Nama Produk</label>
     <input type="text" name="namaprdk" id="namaprdk" class="form-control" />
     <br />
     <label>Jumlah</label>
     <input type="text" name="jmlprdk" id="jmlprdk" class="form-control"></input>
     <br />
   
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
 
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>