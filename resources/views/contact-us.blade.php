@extends('layouts.main-layout')

@section('mainContent')

    <div id="responseModal" class="ui modal">
      <i class="close icon"></i>
      <div id="modalHeader" class="ui centered header">Header</div>
      <div class="ui content">
        <b id="modalContent">Content...</b>
      </div>
    </div>

    <div id="mainCarDiv" class="ui image">
      <div class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui row">
              <div class="ui column">
                <p>
                  <b id="title">Contact Us</b>
                </p>
              </div>
            </div>
            <div class="ui computer tablet only column"></div>
            <div class="ui row">
              <div class="ui column">
                <p>
                  <i id="slogan">Do you have any questions? Feel free!</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="res/images/contact-us1.jpg" alt="contact-us1">
    </div>

    <div class="ui container">
      <div id="gridMargins" class="ui grid">
        <div class="ui one column row">
          <div class="ui center aligned column">
            <h1 id="gridTitle" class="ui dividing header">Contact Us</h1>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui column">
            <div class="ui center aligned top attached segment">
              <h2>
                <i class="fas fa-map-marked-alt"></i> Address
              </h2>
              <div class="ui header">
                Tom's Garage, 1750 East 4th Street Santa Ana, CA 92705
              </div>
            </div>

            <div class="ui center aligned attached segment">
              <h2>
                <i class="fas fa-at"></i> e-Mail
              </h2>
              <div class="ui header">
                info@tomsgarage.com
              </div>
            </div>

            <div class="ui center aligned attached segment">
              <h2>
                <i class="fas fa-phone"></i> Phone
              </h2>
              <div class="ui header">
                +10 657 328 6000
              </div>
            </div>

            <div class="ui center aligned bottom attached segment">
              <h2>
                <i class="fas fa-fax"></i> Fax
              </h2>
              <div class="ui header">
                +10 657 328 6011
              </div>
            </div>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui column">
            <div class="ui segment">
              <h2 class="ui centered header">Contact Form</h2>
              <form id="contactUsForm" class="ui form">
                {{ csrf_field() }}

                <div class="ui three fields">
                  <div class="ui required field">
                    <label>First Name</label>
                    <input name="firstName" type="text" placeholder="First Name">
                  </div>

                  <div class="ui field">
                    <label>Middle Name</label>
                    <input name="middleName" type="text" placeholder="Middle Name">
                  </div>

                  <div class="ui required field">
                    <label>Last Name</label>
                    <input name="lastName" type="text" placeholder="Last Name">
                  </div>
                </div>

                <div class="ui two fields">
                  <div class="ui required field">
                    <label>Phone</label>
                    <input name="phone" type="text" placeholder="05554443322">
                  </div>

                  <div class="ui required field">
                    <label>Email</label>
                    <input name="email" type="text" placeholder="example@mail.com">
                  </div>
                </div>

                <div class="ui required field">
                  <label>Your Questions Details</label>
                  <textarea name="details" placeholder="Details..."></textarea>
                </div>

                <div class="ui field">
                  <button id="sendBtn" type="submit" class="ui large fade animated fluid button">
                    <div class="visible content">Send</div>
                    <div class="hidden content">
                      <i class="fas fa-paper-plane icon"></i>
                    </div>
                  </button>
                </div>

                <div class="ui field">
                  <div class="ui error message"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
