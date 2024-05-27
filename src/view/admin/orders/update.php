<?php 

$page_title = 'orders'; 

include VIEW_DIR."/admin/header.php"; 

?>

<style>

    .avatar.lg {

        width: 400px;

        min-width: unset;

        height: 100%;

    }

    [id^="image-preview-td"]{

        position: relative;

    }

    [id^="image-preview-td"] .rect {

        position: absolute;

        /* background: red; */

    }

    [id^="image-preview-td"] .text {

        position: absolute;

    }

    [id^="image-preview"] {

        width: 100% !important;

    }

    [class^="elements_positions_wrapper"] > .text {

        text-align: center;

        display: flex;

        justify-content: center;

        align-items: center;

        font-family: 'Times New Roman';

        font-weight: bold;

        white-space: nowrap;

        /* text-transform: uppercase; */

        font-size: 56px;

    }

</style>

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

        <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

            <div class="col">

                <div class="alert-success alert mb-0">

                    <div class="d-flex align-items-center">

                        <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>

                        <div class="flex-fill ms-3 text-truncate">

                            <div class="h6 mb-0">Order Created at</div>

                            <span class="small"><?=$order['date_creation'] ?? ''?></span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div class="alert-danger alert mb-0">

                    <div class="d-flex align-items-center">

                        <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-user fa-lg" aria-hidden="true"></i></div>

                        <div class="flex-fill ms-3 text-truncate">

                            <div class="h6 mb-0">Name</div>

                            <span class="small"><?=$client['fullname'].($client['deleted'] == '1'? '(Deleted)':'') ?? ''?></span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div class="alert-warning alert mb-0">

                    <div class="d-flex align-items-center">

                        <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>

                        <div class="flex-fill ms-3 text-truncate">

                            <div class="h6 mb-0">Email</div>

                            <span class="small"><?=$client['email'] ?? ''?></span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div class="alert-info alert mb-0">

                    <div class="d-flex align-items-center">

                        <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>

                        <div class="flex-fill ms-3 text-truncate">

                            <div class="h6 mb-0">Phone</div>

                            <span class="small"><?=$client['phone'] ?? ''?></span>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">

            <div class="col-xl-12 col-xxl-8">

            <?php

                $counter = 0;

                foreach($cart_items as $cart_item):



                    $title_text = $cart_item->title_text;

                    $title_color = $cart_item->title_color;

                    $formation_quantity = $cart_item->formation_quantity;

                    $formation_id = $cart_item->formation_id;

                    $bonde_ext_color = $cart_item->bonde_ext_color;

                    $bonde_int_color = $cart_item->bonde_int_color;

                    $bonde_type = $cart_item->bonde_type;

                    $custom_image = $cart_item->image ?? '';
                    // $custom_image = str_replace('assets/', ASSETS_DIR, $custom_image);

                    $formation = fetch_array("SELECT * FROM formations WHERE formation_id = '$formation_id'");

                    $category = fetch_array("SELECT * FROM categories WHERE id = '{$formation['formation_category']}'");

                    $image = fetch_array("SELECT * FROM images WHERE formation_id = '{$formation['formation_id']}' AND image_priority = 0");

            ?>

                <div class="order_cart_item card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        <h6 class="mb-0 fw-bold ">Order Summary Item #<?= ++$counter?></h6>

                    </div>

                    <div class="card-body">



                        <div class="row g-3 align-items-center">

                            <div class="col-md-4">

                                <label for="title">Formation name</label>

                                <input  disabled type="text" class="form-control" value="<?=$formation['formation_name'] ?? ''?>">

                            </div>

                            <div class="col-md-4">

                                <label for="title">Price</label>

                                <input  disabled type="text" class="form-control" value="<?=$formation['formation_price'] ?? ''?>">

                            </div>

                            <div class="col-md-4">

                                <label for="title">Qte</label>

                                <input disabled type="text" class="form-control" value="<?=$formation_quantity ?? ''?>">

                            </div>

                        </div>

                        <div class="formation-cart">

                            <div class="checkout-table table-responsive">

                                <table id="myCartTable<?=$counter?>" class="table display dataTable table-hover align-middle" style="width:100%">

                                    <thead>

                                        <tr>

                                            <th class="formation">Image</th>

                                            <th>Info</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>

                                                <div>

                                                    <img src="<?=$custom_image ?? ''?>" class="avatar rounded lg" alt="Formation">

                                                </div>

                                                <textarea style="display:none" id="presets_<?=$counter?>"><?=html_entity_decode($formation['formation_presets'])?></textarea>

                                                <input type="hidden" id="bonde_type_<?=$counter?>" value="<?=$bonde_type?>">

                                            </td>

                                            <td style="width:30%">

                                                <div class="card-body">

                                                    <form>

                                                        <div class="row g-3 align-items-center">

                                                            <div class="col-md-12">

                                                                <label for="title">Title</label>

                                                                <input disabled id="text<?=$counter?>" type="text" class="form-control" value="<?=$title_text ?? ''?>">

                                                            </div>

                                                            <div class="col-md-12">

                                                                <label for="title">Title Color</label>

                                                                <input disabled id="text_color<?=$counter?>" type="color" class="form-control" value="<?=$title_color ?? ''?>">

                                                            </div>

                                                            <div class="col-md-12">

                                                                <label for="title">Couleurs bonde extérieur</label>

                                                                <input disabled id="bonde_ext_color<?=$counter?>" type="color" class="form-control" value="<?=$bonde_ext_color ?? ''?>">

                                                            </div>

                                                            <?php if($bonde_type == 'triple'):?>

                                                            <div class="col-md-12">

                                                                <label for="title">Couleurs bonde intérieur</label>

                                                                <input disabled  id="bonde_int_color<?=$counter?>" type="color" class="form-control" value="<?=$bonde_int_color ?? ''?>">

                                                            </div>

                                                            <?php endif;?>

                                                        </div>

                                                    </form>

                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>

                                    <tfoot>

                                        <tr>

                                            <td colspan="3">

                                            </td>

                                        </tr>

                                    </tfoot>

                                </table>

                            </div>

                        </div>     

                    </div>

                </div>



            <?php endforeach;?>

                <div class="order_cart_item card mb-3">

                    <div class="card-body">

                        <div class="formation-cart">

                            <div class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap justify-content-end">

                                <div class="checkout-total">

                                    <div class="single-total">

                                        <p class="value">Total:</p>

                                        <p class="price"><?=$order['total'] .' '. get_option('currency')?></p>

                                    </div>

                                    <div class="single-total">

                                        <p class="value">Shipping Cost (+):</p>

                                        <p class="price"><?=get_option('shipping_cost').' '. get_option('currency')?></p>

                                    </div>

                                    <div class="single-total total-payable">

                                        <p class="value">Total Payable:</p>

                                        <p class="price"><?=($order['total'] +  get_option('shipping_cost')).' '. get_option('currency')?></p>

                                    </div>

                                </div>

                            </div>

                        </div>     

                    </div>

                </div>

                <div class="card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        

                    <a href="admin/orders/delete?id=<?=$order['id']?>" class="btn btn-outline-danger deleterow delete-alert d-flex justify-content-between align-items-center">

                        <h6 class="mb-0 fw-bold "> Delete this order</h6>

                    </a>

                    </div>

                </div>

            </div>

            <div class="col-xl-12 col-xxl-4">

                <div class="card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        <h6 class="mb-0 fw-bold ">Billing Address</h6>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-12">

                                <label class="form-label col-6 col-sm-5">Address:</label>

                                <span><strong><?=$client['address'] ?? 'Address not set'?></strong></span>

                            </div>

                            <div class="col-12">

                                <label class="form-label col-6 col-sm-5">City:</label>

                                <span><strong><?=$client['city'] ?? 'Address not set'?></strong></span>

                            </div>

                            <div class="col-12">

                                <label class="form-label col-6 col-sm-5">Zip code:</label>

                                <span><strong><?=$client['zip'] ?? 'Country not set'?></strong></span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        <h6 class="mb-0 fw-bold ">Status Orders</h6>

                    </div>

                    <div class="card-body">

                        <form>

                            <div class="row g-3 align-items-center">

                                <div class="col-md-12">

                                    <label class="form-label">Order Status</label>

                                    <select id="order_status" class="form-select" name="status">

                                        <?php 

                                        foreach(ORDER_STATUS as $key => $value):

                                            echo "<option value='$key'".($order['status'] == $key ? 'selected':'').">$value</option>";

                                        endforeach;

                                        ?>

                                    </select>

                                </div>

                                <div class="col-md-12">

                                    <label class="form-label">Order Transection</label>

                                    <select id="order_transaction" class="form-select">

                                        <?php 

                                        foreach(ORDER_TRANSACTION as $key => $value):

                                            echo "<option value='$key'".($order['transaction'] == $key ? 'selected':'').">$value</option>";

                                        endforeach;

                                        ?>

                                    </select>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        <h6 class="mb-0 fw-bold ">Mailing</h6>

                    </div>

                    <div class="card-body">

                            <div class="row g-3 align-items-center">

                                <div class="col-md-12">

                                    <label class="form-label">E-Mail Type</label>

                                    <div class="row">

                                        <div class="col-md-9">

                                            <select id="select-mails" class="form-select" aria-label="Default select example">

                                                <?php

                                                $select_mails = fetch_all("SELECT * FROM mail_templates WHERE mode = '0' AND deleted = 0");

                                                foreach($select_mails as $selected_mail):

                                                ?>

                                                <option value="<?=$selected_mail['id']?>"><?=$selected_mail['name']?></option>

                                                <?php

                                                endforeach;

                                                ?>

                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <button id="send-mail" class="btn btn-primary">Send</button>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="sending-history">

                                        <ul id="sent-mails">

                                            <?php

                                                $mails = fetch_all("SELECT * FROM sending WHERE order_id = '$id' order by date_creation");

                                                foreach($mails as $mail):

                                                    $mail_id = $mail['mail_id'];

                                                    $mail_name = fetch_array("SELECT * FROM mail_templates WHERE id = '$mail_id'");



                                            ?>

                                            <li>

                                                <small> <a href="<?=URL?>admin/mail/read?mail_id=<?=$mail_id?>&order_id=<?=$id?>" target="_blank"><?=$mail_name['name']?> </a> sent at <?=$mail['date_creation']?></small>

                                            </li>

                                            <?php

                                                endforeach;

                                            ?>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                    </div>

                </div>

                <div class="card mb-3">

                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">

                        <h6 class="mb-0 fw-bold ">Notes</h6>

                    </div>

                    <div id="notes_list">

                        <?php

                            $notes = fetch_all("SELECT * FROM notes WHERE order_id = '{$order['id']}'");

                            foreach($notes as $note):

                        ?>

                        <div class="card-body" id="note<?=$note['id']?>">

                            <div class="row g-3 align-items-center">

                                <div class="col-md-10">

                                    <textarea class="form-control" disabled><?=$note['note']?></textarea>

                                </div>

                                <div class="col-md-2">

                                    <a class="btn btn-outline-secondary delete-note" data-id="<?=$note['id']?>"><i class="icofont-ui-delete text-danger"></i></a>

                                </div>

                            </div>

                        </div>

                        <?php endforeach; ?>

                    </div>

                    <div class="card-body">

                        <form>

                            <div class="row g-3 align-items-center">

                                <div class="col-md-12">

                                    <textarea class="form-control" id="note_text" placeholder="Votre note"></textarea>

                                </div>

                            </div>

                            <button id="note_send" type="button" class="btn btn-primary mt-4 text-uppercase">Add</button>

                        </form>

                    </div>

                </div>

                

            </div>

        </div> <!-- Row end  -->

    </div>

</div>

</div> 

<?php ob_start(); ?>

<script>



// ajax send mail

const selected_mail = document.getElementById('select-mails');

const display_sent_mails = document.getElementById('sent-mails');

const sending_mail_btn = document.getElementById('send-mail');

sending_mail_btn.addEventListener('click', ()=>{

            fetch('<?=URL?>api/mail/send?order_id=<?=$order['id']?>&mail_id='+selected_mail.value)

            .then((res)=>{ return res.text()})

            .then((res)=>{  

                if(res.length > 0){

                    display_sent_mails.innerHTML = res;

                }

            })

            .catch(error => { console.log(error.status); });

});





// ajax delete note

function delete_note(){

    document.querySelectorAll('.delete-note').forEach((el)=>{

        el.addEventListener('click', ()=>{

            let id = el.getAttribute('data-id');

            fetch('<?=URL?>api/note/delete?id='+id)

            .then((res)=>{ return res.text()})

            .then((res)=>{

                if(JSON.parse(res).status == true){

                    document.getElementById('note'+id).remove();

                }

            })

            .catch(error => { alert(error.status); });

        });

    });

}

delete_note();



// ajax add note

const notes_list = document.getElementById('notes_list');

const note_text = document.getElementById('note_text');

const note_send = document.getElementById('note_send');

note_send.addEventListener('click', ()=>{

            fetch('<?=URL?>api/note/add?order_id=<?=$order['id']?>&note='+note_text.value)

            .then((res)=>{ return res.text()})

            .then((res)=>{  

                if(JSON.parse(res).status == true){

                    let notes = JSON.parse(res).notes;

                    notes_list.innerHTML = '';

                    notes.map((el)=>{

                        notes_list.innerHTML += `

                        <div class="card-body" id="note${el.id}">

                            <div class="row g-3 align-items-center">

                                <div class="col-md-10">

                                    <textarea class="form-control" disabled>${el.note}</textarea>

                                </div>

                                <div class="col-md-2">

                                    <a class="btn btn-outline-secondary delete-note" data-id="${el.id}"><i class="icofont-ui-delete text-danger"></i></a>

                                </div>

                            </div>

                        </div>

                        `;

                    });

                    note_text.value = '';

                    delete_note();

                }

            })

            .catch(error => { alert(error.status); });

});



// ajax change status

const order_status = document.getElementById('order_status');

order_status.addEventListener('change', ()=>{

            fetch('<?=URL?>api/order/status?id=<?=$order['id']?>&status='+order_status.value)

            .then((res)=>{ return res.text()})

            .then((res)=>{  

                if(JSON.parse(res).status == true){

                    console.log('Order status changed');

                }

            })

            .catch(error => { alert(error.status); });

});



const order_transaction = document.getElementById('order_transaction');

order_transaction.addEventListener('change', ()=>{

            fetch('<?=URL?>api/order/transaction?id=<?=$order['id']?>&transaction='+order_transaction.value)

            .then((res)=>{ return res.text()})

            .then((res)=>{  

                if(JSON.parse(res).status == true){

                    console.log('Order transaction changed');

                }

            })

            .catch(error => { alert(error.status); });

});





/*

for(let counter = <?=$counter ?? 0?>; counter > 0; --counter){



    

    function getDataFromJson(presets, bondes){

        presets = JSON.parse(presets);

        for(let i=0;i<presets.length;++i){

            if(presets[i].data){

                if(presets[i].type == bondes){

                    return presets[i].data;

				}

			}

		}

		return false;

	}



    let elements_positions = document.getElementById('presets_'+counter).value;

    let bondes = document.getElementById('bonde_type_'+counter).value;

    

    elements_positions = getDataFromJson(elements_positions, bondes);

  

	if(elements_positions == false){ console.log("Presets not correct"); break; }



		let img = document.querySelector('#image-preview'+counter);		

		img.parentNode.id= "image-preview-td"+counter;

		

		wrapper = document.getElementById('image-preview-td'+counter);

		wrapper.classList.add('elements_positions_wrapper'+counter);



		let display_inner_colors = bondes == 'triple';



		let min_top = 10000;

		let min_width = 10000;

		let max_left = 0;

		let max_top = 0;

		let text_top = 10000;

		let text_left = 10000;

		let text_width = 10000;

		let text_height = 10000;

		let allRectWidth = 0;

        

		for(let i = 0; i < elements_positions.length; ++i){

			let div = document.createElement('div');

			if(elements_positions[i].type == 'rect'){

				div.classList.add('rect');

				if(elements_positions[i].position){

					let p = elements_positions[i].position;

					div.dataset.position = p;

				}else{

					div.dataset.position = "outer";

				}



				div.style.top = elements_positions[i].top + "%";

				div.style.left = elements_positions[i].left + "%";

				div.style.height = elements_positions[i].height + "%";

				div.style.width = elements_positions[i].width + "%";



				if(min_top > elements_positions[i].top){

					min_top = elements_positions[i].top;

					text_top =  min_top + elements_positions[i].height;

				}

				

				text_left = text_left > elements_positions[i].left ? elements_positions[i].left: text_left;



				if(max_left < elements_positions[i].left){

					max_left = elements_positions[i].left;

				}

				if(min_width > elements_positions[i].width){

					min_width = elements_positions[i].width;

				}



				if(bondes == "double"){

					text_width =  (max_left + elements_positions[i].width) - text_left;

				}else{

					allRectWidth += parseInt(elements_positions[i].width);

					text_width =  (allRectWidth/2);

				}



				if(max_top < elements_positions[i].top){

					max_top = elements_positions[i].top;

					text_height =  max_top - text_top;

				}





				wrapper.appendChild(div);

			}



		}



		for(let i = 0; i < elements_positions.length; ++i){

			let div = document.createElement('div');

			if(elements_positions[i].type == 'text'){

				div.classList.add('text');

				div.style.top = text_top+'%';

				div.style.left = text_left+'%';

				div.style.height = text_height+'%';

				div.style.width = text_width+'%';

				wrapper.appendChild(div);

			}

		}



		let text_element = document.querySelector('#image-preview-td'+counter+' .text');

        text_element.style.top = text_top + "%";

        text_element.style.left = text_left + "%";

        text_element.innerText = document.getElementById('text'+counter).value;

        text_element.style.color = document.getElementById('text_color'+counter).value;



		let rects = wrapper.querySelectorAll('.rect');

        

        if(bondes == "double"){

            for(let j = 0; j< rects.length;++j){

                if(rects[j].dataset.position == "outer"){

                    rects[j].style.backgroundColor = document.getElementById('bonde_ext_color'+counter).value;

                }

            }

        }else if(bondes == "triple"){

            for(let j = 0; j< rects.length;++j){

                if(rects[j].dataset.position == "middle" || rects[j].dataset.position == "inner"){

                    rects[j].style.backgroundColor = document.getElementById('bonde_ext_color'+counter).value;

                }

            }

        }            







}

*/

</script>

<?php $script .= ob_get_contents(); ?>

<?php ob_end_clean(); ?>

<?php include VIEW_DIR."/admin/footer.php"; ?>