<!doctype html>
<html lang="en">

<head>
  <?php $this->load->view('includes/header'); ?>
  <title> CONTRACTOR</title>
  <style type="text/css">
    .dt-button {
      border-radius: 10px;
      border: none;
      color: white;
      background-color: #644734;
      padding: 5px 10px;
    }

    input {
      border-radius: 10px;
      border: 1px solid black;
      padding: 2px 5px;

    }

    .dt-search {
      margin-bottom: 10px;
    }

    .dt-paging-button {
      padding: 0px 15px;
      margin: 2px;
      border-radius: 10px;
      border: 1px solid black;
      font-size: 18px;
    }

    table.table.dataTable> :not(caption)>*>* {
      /* background-color: #FDF5E6; */
      text-align: center;
    }

    table.dataTable td.dt-type-numeric,
    table.dataTable td.dt-type-date {
      text-align: center;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dc3545;

    }

    form label {
      font-weight: bold
    }
  </style>
  <!-- JS for DataTables -->
  <!-- JS for DataTables -->
  <script type="text/javascript">
    window.onload = function exampleFunction() {
      var table = new DataTable('#example', {
        layout: {
          responsive: true

        },

      });
    }

  </script>


</head>

<!-- Sidebar  -->
<?php $this->load->view('includes/sidebar'); ?>
<!-- end sidebar -->

<!-- topbar -->
<?php $this->load->view('includes/top_header'); ?>
<!-- end topbar -->

<!-- dashboard inner -->
<div class="midde_cont">
  <!-- Page Content  -->
  <div class="row column1">
    <div class="col-md-12" style="padding:5px;">
      <?php echo $this->session->flashdata('message'); ?>
      <div class="white_shd full margin_bottom_30">

        <div class="full graph_head">

          <div class="d-flex justify-content-between mb-3">
            <h4> LIST OF CONTRACTOR </h4>
            <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#addcontractor"><i
                class="fas fa-plus"></i>
              Add
              New Contractor </a>
          </div>


          <div class="table-responsive">
            <table id="example" class="table table-bordered table-default table-hover" style="width:100%">
              <thead class="thead-light">
                <tr>
                  <th width="2%">#</th>
                  <th width="20%">Name</th>
                  <th width="25%">Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1;
                foreach ($data as $da) { ?>
                  <tr>
                    <td><?php echo $i; ?></td>


                    <td><?php echo $da->contractor_name; ?></td>

                    <td>
                      <a href="#" data-toggle="modal" data-id="<?php echo $da->id ?>" data-target="#editcontractor"
                        class="btn btn-primary edit">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <a href="<?= base_url('contractor/delete/' . $da->id) ?>" class="btn btn-danger "
                        onclick="return confirm('Are you sure you want to delete this record?')"> <i
                          class="fas fa-trash"></i>
                        Delete </a>
                    </td>

                  </tr>
                  <?php $i++;
                } ?>
              </tbody>

            </table>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- add  contractor-->
<div class="modal fade" tabindex="-1" role="dialog" id="addcontractor">
  <div class="modal-dialog" role="document" style="max-width: 800px; margin: 1.75rem auto;">
    <div class="modal-content">
      <?php $this->load->view('contractor/create'); ?>
    </div>
  </div>
</div>
<!-- end add  contractor-->

<!-- start edit contractor -->
<div class="modal fade" tabindex="-1" role="dialog" id="editcontractor">
  <div class="modal-dialog" role="document" style="max-width: 800px; margin: 1.75rem auto;">
    <div class="modal-content">
      <?php $this->load->view('contractor/edit') ?>
    </div>
  </div>
</div>

<?php $this->load->view('contractor/ajax'); ?>
<?php $this->load->view('includes/footer'); ?>
<!-- end dashboard inner -->