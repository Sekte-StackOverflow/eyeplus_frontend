@extends('master')

@section('heading')
  <link rel="stylesheet" type="text/css" href="{{asset('css/modal.css')}}">

<form action="/eyeplus/register" method="post">
  <h3><b>Daftar</b></h3>
  <div class="input-group">
    <span class="input-group-addon">ID +62</span>
    <input type="number" class="form-control" placeholder="Masukkan nomer ponsel" id="phone" onkeyup="s()">
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
    <input type="submit" value="Berikutnya" class="btn btn-block info-button" id="berikutnya" disabled>
  </div><br>    

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-envelope"></i>
        <input class="form-control input" placeholder="Email" id="email" onkeyup="disabledtelp()"/>
      </div>
    </div>

      @if(!Auth::guest() != null)
        <div class="col-sm-12">
          {{ Auth::user()->detail }}
          <a href="{{route('logout')}}" style="color: black ; padding: 8px 0px 0px 10px">Logout</a>
          &nbsp;&nbsp;||
          <a data-toggle="modal" data-target="#account" style="color: black ; padding: 8px 0px 0px 10px">Account</a>
        </div>


<div id="account" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" >
    <!-- Modal content-->
    <div class="modal-content" style="background-color: #ebebeb">
      <div class="modal-header">
        <span type="button" class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
          <div class="row" id="ex3">
            <!-- <div class="col-sm-6">hjgt</div>
            <div class="col-sm-6">hjgt</div> -->
            <table style="margin: 5px" >
              <tr class="row">
                <td class="col-sm-4 text-center">
                  <img class="barcode" style="width: 40%;" src="https://res.cloudinary.com/techsnips/image/fetch/w_2000,f_auto,q_auto,c_fit/https://adamtheautomator.com/content/images/size/w2000/2019/10/user-1633249_1280.png">
                  {{ Auth::user()->detail }}
                </td>
                <td class="col-sm-8" width="180px">
                  Username  : <input type="" name="" class="form-control" value="{{ Auth::user()->detail }}" disabled>
                  Foto : <input type="" name="" class="form-control"><br>
                  <a href="/eyeplus/forgotpassword"> change password</a>
                  <br><br>
                  <button>Simpan</button><br><br>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>

  </div>
</div>
        
      @else
      <div class="col-sm-12"><a href="/eyeplus/login" style="color: black">
        <div class="inner-addon right-addon">
          <i class="glyphicon glyphicon-chevron-right"></i>
          <p style="padding: 8px 0px 0px 10px">Sudah punya akun? Masuk</p>
        </a></div>
      </div>
      @endif

</form>

  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan EyePlus.
    <a data-toggle="modal" data-target="#myModal">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div><br><br>



<script type="text/javascript">
function s(){
  var i=document.getElementById("phone");
  if(i.value===""){
    document.getElementById("email").disabled=false;
    document.getElementById("berikutnya").disabled=true;
  }else
    document.getElementById("email").disabled=true;
    document.getElementById("berikutnya").disabled=false;
}
function disabledtelp(){
  var i=document.getElementById("email");
  if(i.value===""){
    document.getElementById("phone").disabled=false;
    document.getElementById("berikutnya").disabled=true;
  }else
    document.getElementById("phone").disabled=true;
    document.getElementById("berikutnya").disabled=false;
}
</script>


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
          KEBIJAKAN PRIVASI
Dalam membantu Anda, kami menyediakan produk dan layanan dengan kualitas terbaik. Kami menggunakan informasi dari interaksi kami dengan Anda dan pelanggan lainnya, serta dari pihak lain. Karena kami menghormati privasi Anda, kami telah menerapkan prosedur untuk memastikan informasi pribadi Anda ditangani dengan aman dan bertanggung jawab.

Kami telah memposting kebijakan privasi ini untuk menjelaskan praktik pengumpulan informasi kami dan pilihan yang Anda miliki tentang cara pengumpulan dan penggunaan informasi.

Seiring waktu kami akan terus mengembangkan situs web kami dan memanfaatkan kemajuan teknologi untuk memperbaiki layanan yang kami tawarkan, kebijakan privasi ini kemungkinan akan berubah. Oleh karena itu kami mendorong Anda untuk mengacu pada kebijakan ini secara berkelanjutan sehingga Anda memahami kebijakan privasi kami saat ini.

 

KEAMANAN

Informasi pribadi yang diberikan di situs web dan transaksi kartu kredit online dikirimkan melalui server yang aman. Kami berkomitmen untuk menangani informasi pribadi Anda dengan standar keamanan informasi yang tinggi. Kami mengambil langkah fisik, elektronik, dan administratif yang sesuai untuk menjaga keamanan dan keakuratan informasi identitas pribadi yang kami kumpulkan, termasuk membatasi jumlah orang yang memiliki akses fisik ke server database kami, serta menggunakan sistem keamanan elektronik dan perlindungan kata kunci untuk menghindari data pribadi Anda jatuh ketangan yang tidak bertanggung jawab. Spam, Spyware, atau virus tidak diperbolehkan dalam situs. Harap mengatur dan menjaga preferensi komunikasi Anda sehingga kami dapat mengirimkan komunikasi seperti yang Anda

inginkan. Anda tidak boleh mengirim pesan yang mengandung spam, spyware atau virus kedalam situs. Situs kami menggunakan teknologi enkripsi, seperti Secure Sockets Layer (SSL), untuk melindungi informasi pribadi Anda selama pengiriman data. SSL mengenkripsi informasi pemesanan seperti nama, alamat, dan nomor kartu kredit Anda. Pusat dan toko Customer Care kami juga beroperasi melalui jaringan pribadi yang aman. Harap dicatat bahwa email tidak dienkripsi dan tidak dianggap sebagai cara yang aman untuk mentransmisikan informasi kartu kredit. Jika Anda ingin melaporkan pesan yang mencurigakan, silahkan hubungi kami di 021-2991 6282.


INFORMASI YANG KAMI KUMPULKAN

Umumnya, Anda dapat menelusuri situs web tanpa memberikan informasi identitas pribadi. Namun, kami mungkin meminta Anda untuk memberikan informasi identitas pribadi di berbagai tempat dan waktu di situs ini. Dalam beberapa kasus, jika Anda memilih untuk tidak memberikan informasi yang diminta kepada kami, Anda mungkin tidak dapat mengakses semua bagian situs ini atau berpartisipasi dalam semua fitur-fiturnya. Kami menerima dan menyimpan informasi identitas pribadi yang Anda masukkan di situs kami kapan pun Anda berbelanja di Lejel.com baik menggunakan website ataupun Aplikasi Mobile. Kami akan mengumpulkan informasi identitas pribadi Anda untuk mempermudah proses pemesanan ataupun pembayaran yang tersedia di situs kami. Data informasi pribadi yang kami kumpulkan dari Anda sebagai berikut: Nama, Alamat, Nomor telepon dan alamat email Anda. Jika Anda menggunakan salah satu layanan kami, atau berpartisipasi dalam salah satu survei, promosi, atau undian kami, kami mungkin meminta informasi tambahan, seperti usia, minat, atau preferensi produk Anda. Dari pembelian dan interaksi lainnya dengan kami, kami memperoleh informasi mengenai produk atau layanan spesifik yang Anda beli atau gunakan.



BAGAIMANA KAMI MENGGUNAKAN INFORMASI YANG KAMI KUMPULKAN

Kami menggunakan informasi yang kami kumpulkan untuk berbagai keperluan, diantaranya:

Untuk menyelesaikan transaksi pembelian Anda
Untuk memberikan layanan yang Anda minta
Mengirimkan katalog dan penawaran lainnya melalui email
Untuk mengidentifikasi preferensi produk dan layanan Anda, kami dapat memberi tahu Anda tentang produk, layanan, dan promosi baru atau tambahan yang mungkin menarik bagi Anda.
Memberi tahu Anda tentang penarikan produk atau memberikan informasi lain mengenai produk yang telah Anda beli
Untuk meningkatkan pilihan barang dagangan, layanan pelanggan, dan keseluruhan pengalaman berbelanja
 

KETENTUAN PRIVASI

ANDA MEMAHAMI DAN MENYETUJUI BAHWA LEJEL MEMILIKI HAK UNTUK MENGUNGKAPKAN INFORMASI PRIBADI ANDA PADA SEMUA BADAN PENEGAK HUKUM DAN PERATURAN PEMERINTAH YANG BERLAKU DI INDONESIA SEBAGAI UPAYA UNTUK MENJALANKAN ATURAN YANG TELAH DIBUAT OLEH PEMERINTAH. DAN  SEJAUH DIIZINKAN OLEH HUKUM YANG BERLAKU, DALAM HAL INI ANDA SETUJU UNTUK TIDAK MELAKUKAN TUNTUTAN APAPUN TERHADAP LEJEL UNTUK PENGUNGKAPAN INFORMASI PRIBADI ANDA.

 

PERUBAHAN PRIVASI

Kami memiliki hak untuk merubah kebijakan Privasi ini secara berkala dan tanpa pemberitahuan sebelumnya kepada Anda. Silahkan untuk mengunjungi Kebijakan Privasi kami untuk mengetahui perubahan yang kami lakukan.
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

  table, td, th {
      border: 1px solid black;
    } 
  </style>

@endsection