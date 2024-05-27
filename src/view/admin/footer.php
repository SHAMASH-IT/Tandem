
    </div>
    
<!-- Jquery Core Js -->

<script src="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>js/jquery.js"></script>
<?php echo $script; ?>

<script src="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>plugin/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>  


<!-- Plugin Js -->
<script src="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>bundles/dataTables.bundle.js"></script>  

<!-- Jquery Page Js -->
<script src="<?=URL.VIEW_DIR?>/admin/<?=ASSETS_ADMIN_DIR?>js/template.js"></script>
<script>
    const deleteAlerts = document.querySelectorAll('.delete-alert');
    if(deleteAlerts){
        deleteAlerts.forEach((el)=>{
            el.addEventListener('click', (e)=>{
                if (!confirm('Do you really want to delete?')){
                    e.stopPropagation(); 
                    e.preventDefault();
                };
            });
        }); 
    }
</script>
</body>
</html> 