<?php 
$_SanPham = new Model_SanPham($data['SanPham']);

?>

<div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <h3>Add a Review</h3>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" placeholder="e.g. John Doe" class="form-control" />
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
        </div>
        <div class="form-group">
            <label>Review</label>
            <textarea class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Rating</label>
            <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
            </ul>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" />
    </form>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
            <img src="<?php echo $_SanPham->UrlHinh ?>" alt="Image Alternative text" title="Gamer Chick" />
        </div>
    </div>
    <div class="col-md-5">
        <div class="product-info box">
<!--            <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star-half-empty"></i>
                </li>
            </ul>	
            <small><a href="#" class="text-muted">based on 8 reviews</a></small>-->
            <h3><?php echo $_SanPham->TenSP; ?></h3>
            <p class="product-info-price"><?php echo $_SanPham->GiaVND; ?></p>
            <p class="text-smaller text-muted"><?php echo $_SanPham->TomTat; ?></p>
            <ul class="list-inline">
                <li><a href="<?php echo $_SanPham->LinkGioHang; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                </li>
<!--                <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                </li>-->
            </ul>
        </div>
    </div>
</div>
<div class="gap"></div>
<div class="tabbable">
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
        </li>
<!--        <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Additional Information</a>
        </li>
        <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping & Payment</a>
        </li>
        <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
        </li>-->
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab-1">
            <?php echo $_SanPham->NoiDung ?>
        </div>
        <div class="tab-pane fade" id="tab-2">
            <table class="table table-striped mb0">
                <tbody>
                    <tr>
                        <td>Weight</td>
                        <td>1.5kg</td>
                    </tr>
                    <tr>
                        <td>Dimentions</td>
                        <td>10 x 20 x 30 cm</td>
                    </tr>
                    <tr>
                        <td>Composition</td>
                        <td>100% Cotton</td>
                    </tr>
                    <tr>
                        <td>Size & Fit</td>
                        <td>This style comes in a regular fit which fits true to size</td>
                    </tr>
                    <tr>
                        <td>Other Info</td>
                        <td>Machine wash according to instructions on care label</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>Small, Medium, Large</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Brown</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="tab-3">
            aaa
        </div>
        <div class="tab-pane fade" id="tab-4">
            
        </div>
    </div>
</div>
<div class="gap"></div>