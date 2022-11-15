
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
</div>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
