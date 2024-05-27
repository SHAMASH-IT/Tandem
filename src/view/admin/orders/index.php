<?php $page_title = 'orders'; ?>

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

                    <h3 class="fw-bold mb-0">Orders List</h3>

                </div>

            </div>

        </div> <!-- Row end  -->

        <div class="row g-3 mb-3"> 

            <div class="col-md-12">

                <div class="card"> 

                    <div class="card-body"> 

                        <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  

                            <thead>

                                <tr>

                                    <th>Id</th>

                                    <th>Client</th>

                                    <th>Total cart</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Transaction</th>

                                    <th></th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                    $condition = "";

                                    if(isset($client_id)){

                                        $condition = "AND client_id = '$client_id'";

                                    }

                                    $sql = "SELECT * FROM orders WHERE deleted = 0 $condition order by date_creation desc";
                                    
                                    $orders = fetch_all($sql);

                                    foreach($orders as $order):

                                        $cart = json_decode($order['cart']);



                                        $client_id = $order['client_id'];

                                        $client = fetch_array("SELECT * FROM clients WHERE client_id = '$client_id'");

                                        

                                    

                                ?>

                                <tr>

                                    <td><strong>#<?=$order['id']?></strong></td>

                                    <td><?=$client['fullname'].($client['deleted'] == '1'? '(Deleted)':'')?></td>

                                    <td><?=$order['total'].' '.get_option('currency')?></td>

                                    <td><?=$order['date_creation']?></td>

                                    <td><span class="badge bg-warning"><?=ORDER_STATUS[$order['status']]?></span></td>

                                    <td><span class="badge bg-warning"><?=ORDER_TRANSACTION[$order['transaction']]?></span></td>

                                    <td>

                                        <div class="btn-group" role="group" aria-label="Basic outlined example">

                                            <a href="<?=URL?>admin/orders/update?id=<?=$order['id']?>" class="btn btn-outline-secondary"><i class="icofont-notepad text-success"></i></a>

                                            

                                        </div>

                                    </td>

                                </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div> <!-- Row end  -->

    </div>

</div>



</div>   

<?php include VIEW_DIR."/admin/footer.php"; ?>