<ul class="nav" >
	<li class="<?php echo isActive($pageName,"home")?>">
		<a class="" href="<?php echo  base_url()?>">Home</a>
	</li>
	<li class="<?php echo isActive($pageName,"about")?>">
		<a class="" href="<?php echo  site_url('home/about')?>">Link</a>
	</li>
	<li class="<?php echo isActive($pageName,"link1")?>">
		<a class="" href="<?php echo  base_url()?>">Link</a>
	</li>
	<li class="<?php echo isActive($pageName,"link2")?>">
		<a class="" href="<?php echo  base_url()?>">Link</a>
	</li>
	<li class="<?php echo isActive($pageName,"link3")?>">
		<a class="" href="<?php echo  base_url()?>">Link</a>
	</li>
</ul>

<?php if($username): ?>
<div id="account-setting" class="btn-toolbar">
    <div class="btn-group pull-right">
        <a href="#username"><button class="btn btn-inverse"><i class="icon-user icon-white"></i>User</button></a>
        <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</div>
<?php endif; ?>