<?php $page_title = 'meta'; ?>
<?php include VIEW_DIR."/admin/header.php"; ?>
<!-- main body area -->
<div class="main px-lg-4 px-md-4"> 

<!-- Body: Header -->
<div class="header">
    <nav class="navbar py-4">
    </nav>
</div>

<!-- Body: Body -->
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Events</h3>
                    <a href="<?=URL?>admin/events/update?event_id=<?=strtoupper(uniqid('E'))?>" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add new event</a>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-md-12 col-lg-12">
                <div class="checkout-table table-responsive">
                    <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th class="option">Date time</th>
                                <th class="option">Label</th>
                                <th class="option">Place</th>
                                <th class="option">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($events as $e):
                                $event_id = $e['event_id'];
                                $datetime = $e['datetime'];
                                $label = $e['label'];
                                $place = $e['place'];
                            ?>
                            <tr>
                                <form name="f<?=$e['id']?>" action="" method="post">
                                    <td> <?=$datetime?> </td>
                                    <td> <?=$label?> </td>
                                    <td> <?=$place?> </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="<?=URL?>admin/events/update?event_id=<?=$event_id?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                            <a href="<?=URL.'admin/events/delete?event_id='.$event_id?>"  class="btn btn-outline-secondary delete-alert"><i class="icofont-ui-delete text-danger"></i></a>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>

</div> 
<?php ob_start(); ?>
<script src="<?=VIEW_DIR?>/admin/assets/js/main.js"> </script>
<?php $script .= ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php include VIEW_DIR."/admin/footer.php"; ?>