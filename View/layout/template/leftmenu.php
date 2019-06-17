<ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
    <?php
    $Model_DanhMuc = new Model_DanhMuc();
    $DSDanhMuc = $Model_DanhMuc->DSDanhMuc();
    foreach ($DSDanhMuc as $DanhMuc) {
        $_DanhMuc = new Model_DanhMuc($DanhMuc);
        ?>
        <li><a href="<?php echo $_DanhMuc->LinkDanhMuc ?>"><i class="fa fa-cutlery"></i><?php echo $_DanhMuc->TenDanhMuc ?><span>44</span></a></li>
            <?php
        }
        ?>

<!--    <li><a href="#"><i class="fa fa-calendar"></i>Events<span>48</span></a>
    </li>
    <li><a href="#"><i class="fa fa-female"></i>Beauty<span>50</span></a>
    </li>
    <li><a href="#"><i class="fa fa-bolt"></i>Fitness<span>41</span></a>
    </li>
    <li><a href="#"><i class="fa fa-headphones"></i>Electronics<span>46</span></a>
    </li>
    <li><a href="#"><i class="fa fa-image"></i>Furniture<span>37</span></a>
    </li>
    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion<span>30</span></a>
    </li>
    <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping<span>42</span></a>
    </li>
    <li><a href="#"><i class="fa fa-home"></i>Home & Graden<span>30</span></a>
    </li>
    <li><a href="#"><i class="fa fa-plane"></i>Travel<span>36</span></a>
    </li>-->
</ul>