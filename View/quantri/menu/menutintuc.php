<nav class="navbar navbar-inverse" role="navigation">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav">
            <li><a class="fa fa-list" style="color: #FFF;" href="<?php echo BASE_DIR ?>quantri/tintuc"> Danh Sách Tin Tức</a></li>
            <li><a class="fa fa-plus" style="color: #FFF;" href="<?php echo BASE_DIR ?>quantri/tintucthem"> Thêm Tin Tức</a></li>
            <li class="dropdown"><a class="fa fa-list" style="color: #FFF;" data-toggle="dropdown" href="<?php echo BASE_DIR ?>quantri/menutintuc"> Quản Lý Theme</a>
                  <ul class="dropdown-menu">
                     <li><a href="<?php echo BASE_DIR ?>quantri/tintucmenu">Menu</a></li>
                     <li><a href="<?php echo BASE_DIR ?>quantri/tintucquancao">Quản Cáo</a></li>
                     <li><a href="#">Hướng Dẫn</a></li>
                  </ul>
            </li>
            <li><a class="fa fa-comment" style="color: #FFF;" href="<?php echo BASE_DIR ?>quantri/dstinhot"> tin nổi bật </a></li>
         </ul>
         <ul class="pull-right" >
            <li style="line-height: 20px;">
               <form action="" method="get" class="form-inline" style="margin-top: 10px;">
                  <div class="form-group">
                     <input name="" type="text" placeholder="Tìm Tin Tức">
                     <input name="" type="submit" value="Tìm" >

                  </div>
               </form>
            </li>

         </ul>

      </div><!-- /.navbar-collapse -->
   </div>
</nav>


