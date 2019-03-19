@extends('layouts.main-layout')

@section('mainContent')

    <div id="mainCarDiv" class="ui image">
      <div class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui row">
              <div class="ui column">
                <p>
                  <b id="title">Sample Designs</b>
                </p>
              </div>
            </div>
            <div class="ui computer tablet only column"></div>
            <div class="ui row">
              <div class="ui column">
                <p>
                  <i id="slogan">See our sample showcase.</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="res/images/main-car2.jpg" alt="main-car2">
    </div>

    <div class="ui container">
      <div id="gridMargins" class="ui grid">
        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui raised piled segment">
              <div class="ui large dividing header">Sed Hendrerit</div>
              <img class="ui image" src="res/images/sample-design1.jpg" alt="sample-design1">
              <div class="ui left aligned header">
                Aliquam fringilla odio eu enim tincidunt ullamcorper.
                Donec facilisis dignissim rhoncus. Praesent sagittis consequat consequat.
                Suspendisse in odio ut neque tincidunt mollis a egestas mi.
                Fusce ut dolor eget leo dapibus dignissim. Sed ultricies semper turpis vel faucibus.
                Duis fermentum leo lorem, vitae pulvinar neque malesuada at.
                Curabitur non sagittis eros, quis mattis velit.
                Suspendisse dictum metus sit amet urna molestie consectetur.
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui raised piled segment">
              <div class="ui large dividing header">Nulla Quis</div>
              <img class="ui image" src="res/images/sample-design2.jpeg" alt="sample-design2">
              <div class="ui left aligned header">
                Sed mollis diam vel ex volutpat scelerisque.
                Etiam cursus eros purus, et scelerisque augue interdum vitae.
                Curabitur placerat varius lacus eget rutrum.
                In hac habitasse platea dictumst. Cras ut dictum ante.
                Suspendisse a libero eget turpis viverra scelerisque tempor at massa.
                Curabitur sed odio eget felis hendrerit tempus vitae eget mauris.
                Proin vitae diam hendrerit, hendrerit odio vitae, facilisis augue.
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui raised piled segment">
              <div class="ui large dividing header">Donec Facilisis</div>
              <img class="ui image" src="res/images/sample-design3.jpg" alt="sample-design3">
              <div class="ui left aligned header">
                Duis id mauris at mauris vulputate faucibus gravida a nibh.
                Mauris sed imperdiet lorem, eu sagittis erat. Morbi venenatis lobortis tincidunt.
                Integer vehicula id diam a pharetra. Pellentesque egestas, justo ac facilisis rutrum,
                dui nunc aliquam libero, vel congue ex purus non nibh.
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui raised piled segment">
              <div class="ui large dividing header">Consequat</div>
              <img class="ui image" src="res/images/sample-design4.jpg" alt="sample-design4">
              <div class="ui left aligned header">
                Fusce sagittis vulputate sapien eget elementum.
                Quisque ipsum erat, laoreet ut erat nec, convallis elementum enim.
                Maecenas a luctus dui, sed semper mi. Praesent a quam elementum,
                vulputate tellus ut, consequat lectus. Quisque eleifend eros ut lacus hendrerit,
                vitae scelerisque nisi rhoncus. Curabitur lacus urna, laoreet nec nisi a,
                vestibulum ultrices tortor. Aenean bibendum pretium faucibus. Morbi a tellus ligula.
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui raised piled segment">
              <div class="ui large dividing header">Curabitur Facilisis</div>
              <img class="ui image" src="res/images/sample-design5.jpg" alt="sample-design5">
              <div class="ui left aligned header">
                Vivamus sit amet porta libero. Duis eget diam urna.
                Sed at metus eget orci consectetur imperdiet nec vitae massa.
                Vivamus pellentesque volutpat lobortis. Nunc sed facilisis magna.
                Aliquam tempor ipsum ut molestie sodales.
                Aenean eget felis sed sem gravida facilisis nec quis nibh.
                Aenean elementum felis ut ante faucibus lobortis. Sed ut facilisis tellus.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
