@extends('layouts.main-layout')

@section('mainContent')

    <div id="mainCarDiv" class="ui image">
      <div class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui row">
              <div class="ui column">
                <p>
                  <b id="title">Tools and Techniques</b>
                </p>
              </div>
            </div>
            <div class="ui computer tablet only column"></div>
            <div class="ui row">
              <div class="ui column">
                <p>
                  <i id="slogan">Our masters' tools and techniques.</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="res/images/tools1.jpeg" alt="tools1">
    </div>

    <div class="ui container">
      <div id="gridMargins" class="ui grid">
        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui segments">
              <div class="ui segment">
                <h1 class="ui icon header">
                  <i class="fas fa-wrench icon"></i>
                </h1>
              </div>
              <div class="ui segment">
                <div class="ui left aligned header">
                  Phasellus eu est turpis. Vestibulum quis placerat est.
                  Fusce quis turpis est. Morbi quis orci non purus porttitor luctus vitae sed massa.
                  Aliquam id imperdiet urna. Nulla posuere elementum magna in malesuada.
                  Vestibulum condimentum, tellus eget iaculis facilisis, tortor justo tincidunt libero,
                  ut condimentum augue tellus quis ipsum. Sed vel lacus est.
                  Proin commodo feugiat scelerisque. Etiam sollicitudin neque enim,
                  sed tincidunt sem scelerisque in. Curabitur fringilla sapien nec tortor posuere luctus.
                  Proin at sodales orci. Duis risus nisl, maximus consectetur ante sit amet,
                  auctor tincidunt leo. Cras fermentum pharetra leo. Aliquam erat volutpat.
                  Vestibulum sit amet iaculis odio.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui segments">
              <div class="ui segment">
                <h1 class="ui icon header">
                  <i class="fas fa-tachometer-alt icon"></i>
                </h1>
              </div>
              <div class="ui segment">
                <div class="ui left aligned header">
                  Integer aliquam nisi at magna luctus, nec feugiat velit gravida.
                  Suspendisse tempus feugiat bibendum. Donec tincidunt dapibus dolor,
                  sit amet elementum turpis faucibus sit amet.
                  Pellentesque ac nulla nec tellus ultrices feugiat a id odio.
                  Mauris eu justo turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Morbi ullamcorper massa a aliquam hendrerit. Fusce ante nisl,
                  aliquet at convallis a, porta a nisi.
                  Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nec cursus enim.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui segments">
              <div class="ui segment">
                <h1 class="ui icon header">
                  <i class="fas fa-tint icon"></i>
                </h1>
              </div>
              <div class="ui segment">
                <div class="ui left aligned header">
                  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                  Quisque eget justo ullamcorper, mollis risus vel, mattis felis. Integer nunc metus,
                  semper sit amet arcu at, venenatis gravida massa. Aliquam at tempor tortor,
                  non egestas arcu. Quisque neque lacus, mollis a porttitor sit amet, pharetra eget ipsum.
                  Cras porta lectus metus, at posuere dolor hendrerit nec.
                  Sed auctor convallis mi vitae ullamcorper. Ut et ipsum eu tortor ullamcorper scelerisque.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui center aligned column">
            <div class="ui segments">
              <div class="ui segment">
                <h1 class="ui icon header">
                  <i class="fas fa-heart icon"></i>
                </h1>
              </div>
              <div class="ui segment">
                <div class="ui left aligned header">
                  In sed massa elit. Praesent euismod velit nunc, et pharetra magna lacinia eu.
                  Morbi non metus a eros sagittis volutpat. Aliquam sed tristique lacus.
                  Proin sit amet malesuada mi, lacinia bibendum augue. Nunc ipsum sem,
                  sollicitudin eu sagittis vel, ornare nec dui. Suspendisse vitae ullamcorper nunc,
                  sed iaculis mi.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
