<?php $page_title = 'settings'; ?>
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
                    <h3 class="fw-bold mb-0">Settings</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3">
        <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Profile Settings</h6>
                    </div>
                    <div class="card-body">
                        <form class="row g-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input class="form-control" type="Password">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="button" class="btn btn-primary text-uppercase px-5">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Social Media</h6>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="input-group mb-2">
                                <span class="input-group-text">facebook.com/</span>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text">instagram.com/</span>
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

</div>
<?php include VIEW_DIR."/admin/footer.php"; ?>