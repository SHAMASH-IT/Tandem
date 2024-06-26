<?php $page_title = 'clients'; ?>
<?php include VIEW_DIR."/admin/header.php"; ?>
<!-- main body area -->
<div class="main px-lg-4 px-md-4"> 

<!-- Body: Header -->
<div class="header">
    <nav class="navbar py-4">
    </nav>
</div>

<!-- Body: Body -->       
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Participants</h3>
                    <div class="col-auto d-flex w-sm-100">
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fullname</th> 
                                    <th>E-Mail</th>
                                    <th>Phone</th> 
                                    <th>Formation</th> 
                                    <th colspan="2">Message</th> 
                                    <th>Sent at</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $clients = fetch_all("SELECT * FROM inscription WHERE deleted = 0 order by date_creation desc");
                            foreach($clients as $client):
                            ?>
                                <tr>
                                    <td><strong>#<?=$client['id']?></strong></td>
                                    <td> <?=$client['fullname']?> </td>
                                    <td><a href="mailto:<?=$client['email']?>"><?=$client['email']?></a></td>
                                    <td><?=$client['phone']?></td>
                                    <td><?=$client['formation']?></td>
                                    <td colspan="2"><?=$client['message']?></td>
                                    <td> <?=$client['date_creation']?> </td>
                                    
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>

</div> 
<?php include VIEW_DIR."/admin/footer.php"; ?>