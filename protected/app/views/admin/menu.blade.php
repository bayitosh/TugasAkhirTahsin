<?php $urladmin=urladmin::where('id','=',1)->pluck('path'); ?>
<div data-role="panel" id="left-panel" data-theme="c">
	<ul data-role="listview" data-theme="d" id="left-panel-main">
	    <li data-role="list-divider" data-theme="a"><a href="{{ URL::to('/') }}"  data-ajax="false">Home</a></li>
		<li data-role="list-divider" data-theme="a"><a href="{{ URL::to($urladmin) }}"  data-ajax="false">Dashboard</a></li>
    </ul>
    <br>
    <div data-role="collapsible" data-inset="false" data-iconpos="right" data-theme="a" data-content-theme="d">
        <h3>Kelola Soal</h3>
        <div data-role="collapsible-set" data-inset="false"  data-theme="a" data-content-theme="d">
            <ul data-role="listview">
                <li><a href="{{ URL::to($urladmin.'/add-soal') }}" data-ajax="false">Tambah Soal</a></li>
                <li><a href="{{ URL::to($urladmin.'/soal-index') }}" data-ajax="false">Data Soal</a></li>
            </ul>
        </div>
    </div>
</div>