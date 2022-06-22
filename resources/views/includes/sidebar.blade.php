 <div class="main-sidebar shadow d-print-none">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand border border-buttom">
             <img src="{{ asset('assets/img/stisla-fill.svg') }}" style="max-width: 50px; margin-right:10px">
             <a href="#">TAHFIDZ</a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm border border-buttom">
             <a href="#">TAHFIDZ</a>
         </div>
         <ul class="sidebar-menu">

             <li class="menu-header">Dashboard</li>
             <li class="nav-item">
                 <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
             </li>
             <li class="menu-header">Master Data</li>

             <li class="nav-item {{ set_active('kelas.*') }}">
                 <a href="{{ route('kelas.index') }}" class="nav-link"><i
                         class="fas fa-fire"></i><span>Kelas</span></a>
             </li>
             <li class="nav-item {{ set_active('jenis_kelas.*') }}">
                 <a href="{{ route('jenis_kelas.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Jenis
                         Kelas</span></a>
             </li>
             <li class="nav-item {{ set_active('surah_quran.*') }}">
                 <a href="{{ route('surah_quran.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Data
                         Hafalan</span></a>
             </li>
             <li class="nav-item">
                 <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Hasil
                         Laporan</span></a>
             </li>
         </ul>
     </aside>
 </div>
