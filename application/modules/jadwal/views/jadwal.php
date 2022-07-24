<head>
     <title>Jadwal | Template</title>
</head>

<div class="main-panel">
     <div class="content">
          <div class="content-page"><br />
               <div class="content">
                    <div class="container-fluid">
                         <div>
                              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                   aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Jadwal
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <a href="<?php echo base_url('manajemen/form'); ?>">
                                                  <button type="button"
                                                       style="float: left;height: 35px;margin-left: 10px;"
                                                       class=" btn btn-success waves-effect waves-light">
                                                       <span class="btn-label"><i class="mdi mdi-plus"></i></span>Add
                                                  </button>
                                             </a>
                                             <a href="<?php echo base_url('manajemen/export_manajerial'); ?>"
                                                  target="_blank">
                                                  <button type="button"
                                                       style="float: left;height: 35px;margin-left: 10px;"
                                                       class=" btn btn-danger waves-effect waves-light">
                                                       <span class="btn-label"><i
                                                                 class="mdi mdi-export"></i></span>Export PDF
                                                  </button>
                                             </a>
                                        </div>

                                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                                             style="overflow-x: auto;">
                                             <table id="myTable" class="table table-hover mb-0">
                                                  <thead>
                                                       <tr>
                                                            <th class="align-middle" scope="col" style="width: 10px;">No
                                                            </th>
                                                            <th class="align-middle" scope="col" style="width: 160px;">
                                                                 Application
                                                                 Code</th>
                                                            <th class="align-middle" scope="col">Application Name</th>
                                                            <th class="align-middle" scope="col">Application Version
                                                            </th>
                                                            <th class="align-middle" scope="col" style="width: 100px;">
                                                                 Action
                                                            </th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>

                                                       <tr class="fw-normal">
                                                            <th class="align-middle">

                                                            </th>
                                                            <th class="align-middle">

                                                            </th>
                                                            <td class="align-middle">

                                                            </td>
                                                            <td class="align-middle">

                                                            </td>
                                                            <td class="align-middle">
                                                                 <a href="" data-mdb-toggle="tooltip"
                                                                      class="fas fa-eye text-success me-3"
                                                                      title="Detail">
                                                                 </a>

                                                                 <a href="" data-mdb-toggle="tooltip" title="Remove"
                                                                      onclick="return confirm('Yakin hapus data?')"><i
                                                                           class="fas fa-trash-alt text-danger"></i></a>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>