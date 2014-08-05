@extends('master')

@section('content')



  <div class="row first">
    <div class="col-sm-8 slider ">
      <img src="img/papr/ljuta_papricica_posle_tretmana.jpg" alt="Mali Coban" class="img-thumbnail">
    </div>
    <div class="col-sm-4 contactWidge companyR1 frame container-fluid">
      <form role="form">
        <div class="form-group">
        </div>
        <div class="form-group">
          <h4 class="text-center">Kontakt</h4>

          <input type="text" class="form-control" id="inputName" placeholder="Unesite ime">
        </div>

        <div class="form-group">

          <input type="email" class="form-control" id="inputMail" placeholder="Enter email">
        </div>

        <div class="form-group">

          <input type="text" class="form-control" id="inputSubject" placeholder="Naslov poruke">
        </div>


        <div class="form-group">

          <textarea  class="form-control" name="textMessage" id="textMessage" cols="30" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>

  </div>
  <div class="row secondContentLine">
    <div class="col-sm-8 companyL2">
      <div class="frame">
        <h2>Bioproces</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem adipisci velit, officia voluptatibus nam facere obcaecati quibusdam architecto ipsam necessitatibus consequuntur voluptas, voluptatem fugiat dicta eum rerum, porro commodi quasi. Accusamus, quaerat ea. Rem quia consequuntur est perspiciatis id tenetur laborum, provident voluptatem officiis nemo nihil explicabo hic soluta, numquam incidunt quasi molestiae quaerat quis ipsa aperiam non. Laudantium optio perspiciatis doloremque saepe tenetur quo voluptatem fugiat aspernatur, nesciunt illum reprehenderit magnam ipsa asperiores sapiente sequi ipsam aliquam numquam quod ut! Veritatis, minima dolor obcaecati ipsum delectus optio fuga unde sed exercitationem, maiores architecto quod soluta doloremque recusandae molestiae impedit similique. Ut autem praesentium qui deserunt iste magnam expedita accusamus ex alias numquam sapiente obcaecati distinctio nam eos deleniti quo rem, sit vitae minus tenetur et mollitia nesciunt tempora doloribus, at! Animi quo autem culpa! Dicta odit et modi quae voluptates fugit neque incidunt quis quisquam dolore! Laudantium quas quaerat nesciunt, animi officiis labore perspiciatis pariatur nostrum quae, ipsam neque maxime voluptatibus expedita delectus voluptates. Minus nesciunt vel temporibus fuga natus aut inventore incidunt quos cupiditate, reprehenderit repudiandae laudantium minima impedit amet, enim officiis fugiat voluptatum corrupti doloribus, tempore dolor cum id accusamus blanditiis in. Saepe fugit in aliquam, sapiente.
      </div>
    </div>
    <div class="col-sm-4 companyR2">
      <h3>Tretmani</h3>
      <ul>
        <li>Breskva<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
        <li>Kupina<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
        <li>Secerna repa<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
      </ul>

      <ul>
        <li>Soja<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
        <li>Paradajiz<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
        <li>Psenica<img src="img/kup/kupina_ne_tretirana.jpg" alt="" class="img-responsive"></li>
      </ul>
      <p>
        .<br/>
        .<br/>
        .<br/>


      </p>
    </div>
  </div>
@stop
