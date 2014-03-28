<div data-role="panel" id="left-panel" data-theme="c">
	<ul data-role="listview" data-theme="d" id="left-panel-main">
        <li data-role="listview" id="content" data-theme="a"><a href="{{ URL::to('/') }}" data-ajax="false">Home</a></li>
		<li data-role="listview" id="content" data-theme="c"><a href="{{ URL::to('tahap-kedua/index.html') }}" data-ajax="false">Tahap II</a></li>
	</ul>
    
        <div data-role="collapsible-set" data-inset="false" data-iconpos="right" data-theme="c" data-content-theme="d">
            <div data-role="collapsible">
                <h3>Hukum Bacaan</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/istiadzah.html') }}" data-ajax="false"><h3>Isti’adzah & Basmallah</h3></a></li>
                </ul>
            </div>
		    <div data-role="collapsible">
              	<h3>Nun Mati & Tanwin</h3>
              	<ul data-role="listview" data-theme="a">
                	<li><a href="{{ URL::to('tahap-kedua/izhar.html') }}" data-ajax="false">Izh-Har Halqi</a></li>
		            <li><a href="{{ URL::to('tahap-kedua/idgham-bighunnah.html') }}" data-ajax="false">Idgham bi Ghunnah</a></li>
		            <li><a href="{{ URL::to('tahap-kedua/idgham-bilaghunnah.html') }}" data-ajax="false">Idgham bila Ghunnah</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/iqlab.html') }}" data-ajax="false">Iqlab</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/ikhfa-haqiqi.html') }}" data-ajax="false">ikhfa haqiqi</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
              	<h3>Hukum Mim Mati</h3>
              	<ul data-role="listview" data-theme="a">
		            <li><a href="{{ URL::to('tahap-kedua/ikhfa-syafawi.html') }}" data-ajax="false">Ikhfa Syafawi</a></li>
		            <li><a href="{{ URL::to('tahap-kedua/idgham-mimi.html') }}" data-ajax="false">Idgham Mimi</a></li>
		            <li><a href="{{ URL::to('tahap-kedua/izhar-syafawi.html') }}" data-ajax="false">Izh-har Syafawi</a></li>
              	</ul>
            </div>
            <div data-role="collapsible">
                <h3>Mim & Nun Bertasydid</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/mim-nun-bertasydid.html') }}" data-ajax="false">Ghunnah Musyaddadah</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Idgham</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/idgham-mutamatsilain.html') }}" data-ajax="false">Idgham Mutamatsilain</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/idgham-mutajanisain.html') }}" data-ajax="false">Idgham Mutajanisain</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/idgham-mutaqaribain.html') }}" data-ajax="false">Idgham Mutaqaribain</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Lam Ta’rif</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/alif-lam-qamariyyah.html') }}" data-ajax="false">Alif-lam Qamariyyah</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/alif-lam-syamsiyyah.html') }}" data-ajax="false">Alif-lam Syamsiyyah</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Lam Jalallah</h3>
                <ul data-role="listview" data-theme="a">
					<?php
					/*<li><a href="#popupJalallah" data-rel="popup" data-icon="false" data-position-to="window" data-transition="fade">Tentang</a></li>*/
					?>
                    <li><a href="{{ URL::to('tahap-kedua/tafkhim.html') }}" data-ajax="false">Tafkhim</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/tarqiq.html') }}" data-ajax="false">Tarqiq</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Hukum Ra’</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/ra-tarqiq.html') }}" data-ajax="false">Dibaca Tipis</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/ra-tebal.html') }}" data-ajax="false">Dibaca Tebal</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/ra-tebalfirst.html') }}" data-ajax="false">Utamakan baca tebal</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/ra-tipisfirst.html') }}" data-ajax="false">Utamakan baca tipis</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Qalqalah</h3>
                <ul data-role="listview" data-theme="a">
                    <?php
					/*<li><a href="#popupQalqalah" data-rel="popup" data-icon="false" data-position-to="window" data-transition="fade">Tentang</a></li>*/
                    ?>
					<li><a href="{{ URL::to('tahap-kedua/qalqalah-sughra.html') }}" data-ajax="false">Qalqalah Shughra</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/qalqalah-kubra.html') }}" data-ajax="false">Qalqalah Kubra</a></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>Hukum Madd</h3>
                <ul data-role="listview" data-theme="a">
                    <li><a href="{{ URL::to('tahap-kedua/madd-ashli.html') }}" data-ajax="false">Madd Ashli</a></li>
                    <li><a href="{{ URL::to('tahap-kedua/madd-fari.html') }}" data-ajax="false">Madd Far'i</a></li>
                </ul>
            </div>
        </div>
</div>
<div data-role="popup" id="popupJalallah" data-theme="a">
    <div style="padding:10px 20px;">
        <fieldset>
            <legend><h2 style="color:#fff;">Tentang Hukum Lam Jalallah</h2></legend>
            <p>
                Lam jalallah adalah huruf lam yang terdapat dalam lafadz Allah.
            </p>
            <a href="#" data-role="button" data-rel="back" data-theme="c">ok</a>
        </fieldset>
    </div>
</div>
<div data-role="popup" id="popupQalqalah" data-theme="a">
    <div style="padding:10px 20px;">
        <fieldset>
            <legend><h2 style="color:#fff;">Tentang Hukum Qalqalah</h2></legend>
            <p>
                Qalqalah menurut bahasa artinya bergerak dan gemetar, sedangkan menurut istilah qalqalah ialah suara tambahan yang kuat dan jelas yang terjadi pada huruf yang bersukun  setelah menekan pada makhraj huruf tersebut. Huruf qalqalah ada lima, yaitu qaf( ق ), tha’( ط ), ba’(ب  ), jim( ج ), dal( د ). Dalam ilmu tajwid qalqalah terbagi menjadi dua, yaitu qalqalah shughra dan qalqalah kubra.
            </p>
            <a href="#" data-role="button" data-rel="back" data-theme="c">ok</a>
        </fieldset>
    </div>
</div>