 <!-- Modal PH -->
    <div class="modal fade" id="ph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pengurus Harian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container mt-4">
              <div class="row">
                <?php foreach ($pengurus->result() as $p) {
                  // code...
                  ?>
                <div class="col-lg-3 mb-4 text-center">
                  <div class="list-divisi">
                    <img src="<?php echo base_url()?>uploads/images/<?=$p->foto?>" class="img-fluid icon-divisi-modal">
                  </div>
                  <h6 class="mt-3"> <span class="text-primary"><?=$p->nama?> </span></h6>
                  <small><?=$p->pengurus?> (<?=$p->jabatan?>)</small>
                  <div class="text-divisi">
                    <p><?=$p->kampus?></p>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal PH -->


 <!-- Modal Kominfo -->
    <div class="modal fade" id="Kominfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">KOMINFO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container mt-4">
              <div class="row">

                <?php foreach ($kominfo->result() as $a) {
                  // code...
                ?>
                <div class="col-lg-3 mb-4 text-center">
                  <div class="list-divisi">
                    <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" class="img-fluid icon-divisi-modal">
                  </div>
                  <h6 class="mt-3"> <span class="text-primary"><?=$a->nama?></span></h6>
                  <small><?=$a->jabatan?></small>
                  <div class="text-divisi">
                    <p><?=$a->kampus?></p>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Akhir Modal PH -->

    <!-- Modal Kominfo -->
       <div class="modal fade" id="Akastrat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-xl">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">AKASTRAT</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <div class="container mt-4">
                 <div class="row">

                   <?php foreach ($akastrat->result() as $a) {
                     // code...
                   ?>
                   <div class="col-lg-3 mb-4 text-center">
                     <div class="list-divisi">
                       <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" class="img-fluid icon-divisi-modal">
                     </div>
                     <h6 class="mt-3"> <span class="text-primary"><?=$a->nama?></span></h6>
                     <small><?=$a->jabatan?></small>
                     <div class="text-divisi">
                       <p><?=$a->kampus?></p>
                     </div>
                   </div>
                 <?php } ?>
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             </div>
           </div>
         </div>
       </div>

       <!-- Akhir Modal PH -->

       <!-- Modal Kominfo -->
          <div class="modal fade" id="Litbang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">LITBANG</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container mt-4">
                    <div class="row">

                      <?php foreach ($litbang->result() as $a) {
                        // code...
                      ?>
                      <div class="col-lg-3 mb-4 text-center">
                        <div class="list-divisi">
                          <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" class="img-fluid icon-divisi-modal">
                        </div>
                        <h6 class="mt-3"> <span class="text-primary"><?=$a->nama?></span></h6>
                        <small><?=$a->jabatan?></small>
                        <div class="text-divisi">
                          <p><?=$a->kampus?></p>
                        </div>
                      </div>
                    <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Akhir Modal PH -->

          <!-- Modal Kominfo -->
             <div class="modal fade" id="BPD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-xl">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">BPD</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <div class="container mt-4">
                       <div class="row">

                         <?php foreach ($bpd->result() as $a) {
                           // code...
                         ?>
                         <div class="col-lg-3 mb-4 text-center">
                           <div class="list-divisi">
                             <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" class="img-fluid icon-divisi-modal">
                           </div>
                           <h6 class="mt-3"> <span class="text-primary"><?=$a->nama?></span></h6>
                           <small><?=$a->jabatan?></small>
                           <div class="text-divisi">
                             <p><?=$a->kampus?></p>
                           </div>
                         </div>
                       <?php } ?>
                       </div>
                     </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
                 </div>
               </div>
             </div>

             <!-- Akhir Modal PH -->

             <!-- Modal Kominfo -->
                <div class="modal fade" id="PPK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">PPK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container mt-4">
                          <div class="row">

                            <?php foreach ($ppk->result() as $a) {
                              // code...
                            ?>
                            <div class="col-lg-3 mb-4 text-center">
                              <div class="list-divisi">
                                <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" class="img-fluid icon-divisi-modal">
                              </div>
                              <h6 class="mt-3"> <span class="text-primary"><?=$a->nama?></span></h6>
                              <small><?=$a->jabatan?></small>
                              <div class="text-divisi">
                                <p><?=$a->kampus?></p>
                              </div>
                            </div>
                          <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Akhir Modal PH -->
