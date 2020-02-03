@extends('master')

@section('heading')
  <link rel="stylesheet" type="text/css" href="{{asset('css/modal.css')}}">

  <h3><b>Daftar</b></h3>
  <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">ID +62</span>
    <input type="text" class="form-control" placeholder="Masukkan nomer ponsel" aria-describedby="basic-addon1">
  </div><br>

  <div class="row">
    <div class="col-sm-8" style="color: #cfc9c8">
      Saya ingin menerima pemberitahuan dari EyePlus tentang promosi dan informasi eksklusif lainnya
    </div>
    <div class="col-sm-4">
      <label class="switch btn pull-right">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
    </div>
  </div><br>
  <div>
    <a type="button" class="btn btn-block info-button"  href="/eyeplus/auth/register">Berikutnya</a>
  </div><br>    

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-envelope"></i>
        <input type="email" class="form-control input" placeholder="Email" />
      </div>
    </div>
    <div class="col-sm-12"><a href="/eyeplus/auth/login" style="color: black">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <p style="padding: 8px 0px 0px 10px">Sudah punya akun? Masuk</p>
      </a></div>
    </div>
  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan EyePlus.
    <a data-toggle="modal" data-target="#myModal">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div><br><br>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" >
    <!-- Modal content-->
    <div class="modal-content" style="background-color: #ebebeb">
      <div class="modal-header">
        <font size="4px"><b>Syarat dan Ketentuan</b></font>
        <span type="button" class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
        <textarea id="ex3">
          Situs web (bahasa Inggris: website) adalah sekumpulan halaman web yang saling berhubungan yang umumnya berada pada peladen yang sama berisikan kumpulan informasi yang disediakan secara perorangan, kelompok, atau organisasi.[1] Sebuah situs web biasanya ditempatkan setidaknya pada sebuah server web yang dapat diakses melalui jaringan seperti Internet, ataupun jaringan area lokal (LAN) melalui alamat Internet yang dikenali sebagai URL. Gabungan atas semua situs yang dapat diakses publik di Internet disebut pula sebagai World Wide Web atau lebih dikenal dengan singkatan WWW. Meskipun setidaknya halaman beranda situs Internet umumnya dapat diakses publik secara bebas, pada praktiknya tidak semua situs memberikan kebebasan bagi publik untuk mengaksesnya, beberapa situs web mewajibkan pengunjung untuk melakukan pendaftaran sebagai anggota, atau bahkan meminta pembayaran untuk dapat menjadi aggota untuk dapat mengakses isi yang terdapat dalam situs web tersebut, misalnya situs-situs yang menampilkan pornografi, situs-situs berita, layanan surel (e-mail), dan lain-lain. Pembatasan-pembatasan ini umumnya dilakukan karena alasan keamanan, menghormati privasi, atau karena tujuan komersial tertentu.

          Sebuah halaman web merupakan berkas yang ditulis sebagai berkas teks biasa (plain text) yang diatur dan dikombinasikan sedemikian rupa dengan instruksi-instruksi berbasis HTML atau XHTML, kadang-kadang pula disisipi dengan sekelumit bahasa skrip. Berkas tersebut kemudian diterjemahkan oleh peramban web dan ditampilkan seperti layaknya sebuah halaman pada monitor komputer.


          Halaman-halaman web tersebut diakses oleh pengguna melalui protokol komunikasi jaringan yang disebut sebagai HTTP, sebagai tambahan untuk meningkatkan aspek keamanan dan aspek privasi yang lebih baik, situs web dapat pula mengimplementasikan mekanisme pengaksesan melalui protokol HTTPS.

          Penemu situs web adalah Sir Timothy John "Tim" Berners-Lee, sedangkan situs web yang tersambung dengan jaringan pertamakali muncul pada tahun 1991. Maksud dari Tim ketika merancang situs web adalah untuk memudahkan tukar menukar dan memperbarui informasi pada sesama peneliti di tempat ia bekerja. Pada tanggal 30 April 1993, CERN (tempat di mana Tim bekerja) mengumumkan bahwa WWW dapat digunakan secara gratis oleh publik.

          Sebuah situs web bisa berupa hasil kerja dari perorangan atau individu, atau menunjukkan kepemilikan dari suatu organisasi, perusahaan. biasanya pembahasan dalam sebuah situs web merujuk pada sebuah ataupun beberapa topik khusus, atau kepentingan tertentu. Sebuah situs web bisa berisi pranala yang menghubungkan ke situs web lain, demikian pula dengan situs web lainnya. Hal ini terkadang membuat perbedaan antara situs web yang dibuat oleh individu ataupun perseorangan dengan situs web yang dibuat oleh organisasi bisnis menjadi tidak begitu jelas.

          Situs web biasanya ditempatkan pada server web. Sebuah server web umumnya telah dilengkapi dengan perangkat-perangkat lunak khusus untuk menangani pengaturan nama ranah, serta menangani layanan atas protokol HTTP yang disebut sebagai Server HTTP (bahasa Inggris: HTTP Server) seperti Apache HTTP Server, atau Internet Information Services (IIS).
        </textarea>
      </div>
      <div class="modal-footer" hidden="div">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <style type="text/css">
    .input{
      outline: none;
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: groove;
    }
    .inner-addon { 
      position: relative;
    }
    .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }
    .right-addon .glyphicon { right: 0px;}
    .right-addon input { padding-right: 30px; }


    #ex3::-webkit-scrollbar{
width:11px;
background-color:white;
} 
#ex3::-webkit-scrollbar-thumb{
background-color:#ebebeb;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:#c4c2c2;
border:2px solid #8c8b8b;
}
#ex3::-webkit-scrollbar-thumb:active{
background-color: #636363;
border:1px solid #333333;
} 

  textarea{
    text-align: justify;
    resize: none;
    overflow-y: scroll;
    height:270px;
    width: 100%;
    background-color: #f5f5f5;
  }

  .modal-sm{
    top: 15%; width: 700px
  }

  @media screen and (max-width: 600px){
    .modal-sm{
      top: 15%; width: 300px;
      margin-left: auto;
      margin-right: auto;
    }
    textarea{
      height:300px;
      width: 100%;
    }
  }
  </style>

@endsection