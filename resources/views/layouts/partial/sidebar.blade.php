<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

            	<li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="{{ URL('/admin/home') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>
                </li>

                <li>
                    <a href="{{ route('admin.motor.index') }}" class="waves-effect"><i class="ti-menu-alt"></i><span>Data Motor </span></a>
                </li>

                <li>
                    <a href="{{ route('admin.debitur.index') }}" class="waves-effect"><i class="ti-user"></i><span>Data Debitur </span></a>
                </li>

                <li>
                    <a href="{{ url('/admin/angsuran/') }}" class="waves-effect"><i class="ti-wallet"></i><span>Data Angsuran </span></a>
                </li>
                
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>