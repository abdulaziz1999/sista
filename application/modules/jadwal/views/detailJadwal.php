<?php 
    $this->db->join('tb_seminar sm','sm.id_seminar = s.seminar_id');
    $this->db->join('tb_prodi p','p.id_prodi = s.prodi_id');
    $this->db->join('tb_dosen d','d.id_dosen = s.pembimbing');
    $daftar_seminar = $this->db->get_where('tb_daftar_seminar s',['id_df_seminar' => $this->uri->segment(3)])->row();?>
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary pt-5 pb-7">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="">
                  <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-sm-10">
                      <h2 class="display-4 text-white font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h2>
                    </div>
                    <div class="col-lg-6 col-sm-2 text-right">
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                          <li class="breadcrumb-item"><a href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                          <li class="breadcrumb-item active text-green" aria-current="page">Jadwal</li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="mb-0"><?= $daftar_seminar->nama_seminar?></h3>
                    </div>
                    <div class="table-responsive py-4 pl-9">
                        <table class="table-flush table-sm" >
                            <tbody class="text-center">
                                <tr> 
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">NIM</h4></td>
                                    <td scope="col" width="1px">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->nim?></strong></h4></th>
                                    
                                    <td scope="col" class="text-right pr-0"><h4 class="mb-0 pl-9">Pembimbing</h4></td>
                                    <td scope="col" width="1px">:</td>
                                    <th scope="col" class="text-right pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->nama_dosen?></strong></h4></th>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">Nama</h4></td>
                                    <td scope="col">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->nama?></strong></h4></th>

                                    <td scope="col" class="text-right pr-0"><h4 class="mb-0 pl-9">Penguji</h4></td>
                                    <td scope="col" width="1px">:</td>
                                    <th scope="col" class="text-right pl-0"><h4 class="mb-0"><strong><?= $this->db->get_where('tb_dosen',['id_dosen' => $daftar_seminar->penguji1])->row()->nama_dosen?></strong></h4></th>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">Prodi</h4></td>
                                    <td scope="col">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->nama_prodi?></strong></h4></th>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">Judul</h4></td>
                                    <td scope="col">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->judul_ta?></strong></h4></th>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">Waktu</h4></td>
                                    <td scope="col">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= longdate_indo($daftar_seminar->tgl_seminar).", ".$daftar_seminar->jam_seminar?></strong></h4></th>
                                </tr>
                                <tr>
                                    <td scope="col" class="text-left pr-0"><h4 class="mb-0">Ruang</h4></td>
                                    <td scope="col">:</td>
                                    <th scope="col" class="text-left pl-0"><h4 class="mb-0"><strong><?= $daftar_seminar->ruang?></strong></h4></th>
                                </tr>
                            </tbody>
                        </table>
                       <a href="<?= site_url('jadwal/daftar/'.$this->uri->segment(3))?>"class="btn btn-md btn-primary" ">&nbsp; Daftar</a> 
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
   
  </div>