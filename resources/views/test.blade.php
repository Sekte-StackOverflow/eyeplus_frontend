@extends('master')

@section('konten')
    <main>
      <section class="cards text-center">
        @for ($i = 0 ; $i <= 9; $i++)
        <article>
          <a href="shopping/barang"><img class="shop-img" src="http://placekitten.com/305/205" alt=" " /></a>
          <button type="button" class="shop-button">BELI</button>
        </article>
        @endfor
      </section>
    </main>
@endsection