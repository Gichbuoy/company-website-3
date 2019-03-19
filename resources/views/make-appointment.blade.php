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
                  <b id="title">Request Appointment</b>
                </p>
              </div>
            </div>
            <div class="ui computer tablet only column"></div>
            <div class="ui row">
              <div class="ui column">
                <p>
                  <i id="slogan">Request an appointment for repair or restoration.</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="res/images/appointment1.jpg" alt="appointment1">
    </div>

    <div class="ui container">
      <div id="gridMargins" class="ui grid">
        <div class="ui one column row">
          <div class="ui center aligned column">
            <h1 id="gridTitle" class="ui dividing header">Request and Appointment</h1>
          </div>
        </div>

        <div class="ui one column row">
          <div class="ui column">
            <div class="ui segment">
              <form id="makeAppointmentForm" class="ui form">
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

                <div class="ui three fields">
                  <div class="ui required field">
                    <label>Phone</label>
                    <input name="phone" type="text" placeholder="05554443322">
                  </div>

                  <div class="ui required field">
                    <label>Email</label>
                    <input name="email" type="text" placeholder="example@mail.com">
                  </div>

                  <div class="ui required field">
                    <label>Appointment Type</label>
                    <div id="appointmentTypes" class="ui selection dropdown">
                      <input type="hidden" name="appointmentType">
                      <i class="dropdown icon"></i>
                      <div id="selectedText" class="default text">Please Select</div>
                      <div class="menu">
                        <div class="item">Repair</div>
                        <div class="item">Restoration</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ui required field">
                  <label for="details">Details of Your Car</label>
                  <textarea name="details" placeholder="Car details..."></textarea>
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
