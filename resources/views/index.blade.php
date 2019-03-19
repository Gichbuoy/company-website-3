@extends('layouts.main-layout')

@section('mainContent')

    <div id="mainCarDiv" class="ui image">
      <div class="ui active dimmer">
        <div class="content">
          <div class="ui grid">
            <div class="ui row">
              <div class="ui column">
                <p>
                  <b id="title">Tom's Garage</b>
                </p>
              </div>
            </div>
            <div class="ui computer tablet only column"></div>
            <div class="ui row">
              <div class="ui column">
                <p>
                  <i id="slogan">Classic car repair and restorations.</i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="res/images/main-car1.jpg" alt="main-car1">
    </div>

    <div class="ui container">
      <div id="gridMargins" class="ui grid">
        <div class="ui row">
          <div class="ui center aligned column">
            <h1 id="gridTitle" class="ui dividing header">Who we are?</h1>
          </div>
        </div>

        <div class="ui row">
          <div class="ui center aligned column">
            <p id="whoWeAreContent">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Suspendisse eleifend diam vel lectus faucibus consectetur.
              Nam lectus turpis, sagittis nec leo at, fringilla bibendum est.
              Aenean sollicitudin felis nec purus auctor, ac volutpat odio euismod.
              Nullam id condimentum nunc. Donec nec leo ipsum. Nunc id nisl et nisi congue accumsan.
              Donec tempor, arcu ac vestibulum mollis, elit ipsum pretium enim,
              gravida egestas justo urna et sapien.
              Aenean aliquam lacus ut risus facilisis elementum ac sit amet eros.
              Fusce lobortis semper nisi, vel iaculis turpis tincidunt id.
            </p>
          </div>
        </div>
      </div>

      <div id="gridMargins" class="ui grid">
        <div class="ui row">
          <div class="ui center aligned column">
            <h1 id="gridTitle" class="ui dividing header">Meet The Team</h1>
          </div>
        </div>

        <div class="ui row">
          <div class="ui center aligned column">
            <i class="ui large header">Designers</i>
            <br>
            <br>
            <div class="ui centered stackable cards">
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/designer1.jpg" alt="designer1">
                </div>
                <div class="content">
                  <div class="header">William Noah</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/designer2.jpg" alt="designer2">
                </div>
                <div class="content">
                  <div class="header">Liam Mason</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/designer3.jpg" alt="designer3">
                </div>
                <div class="content">
                  <div class="header">Benjamin Elijah</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui row">
          <div class="ui center aligned column">
            <i class="ui large header">Mechanics</i>
            <br>
            <br>
            <div class="ui centered stackable cards">
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/mechanic1.jpg" alt="mechanic1">
                </div>
                <div class="content">
                  <div class="header">Dylan Aubrey</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/mechanic2.png" alt="mechanic2">
                </div>
                <div class="content">
                  <div class="header">Isaac Eleanor</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/mechanic3.jpg" alt="mechanic3">
                </div>
                <div class="content">
                  <div class="header">Levi Zoey</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui row">
          <div class="ui center aligned column">
            <i class="ui large header">Cleaners</i>
            <br>
            <br>
            <div class="ui centered stackable cards">
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/cleaner1.jpg" alt="cleaner1">
                </div>
                <div class="content">
                  <div class="header">Lucas & Ethan Avery</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/cleaner2.jpg" alt="cleaner2">
                </div>
                <div class="content">
                  <div class="header">Alexander Scarlett</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui row">
          <div class="ui center aligned column">
            <i class="ui large header">Spray Painters</i>
            <br>
            <br>
            <div class="ui centered stackable cards">
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/spray-painter1.jpg" alt="spray-painter1">
                </div>
                <div class="content">
                  <div class="header">Colton Alice</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/spray-painter2.jpg" alt="spray-painter2">
                </div>
                <div class="content">
                  <div class="header">Jordan Eva</div>
                </div>
              </div>
              <div class="ui link card">
                <div class="image">
                  <img src="res/images/spray-painter3.jpg" alt="spray-painter3">
                </div>
                <div class="content">
                  <div class="header">Austin Autumn</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="gridMargins" class="ui stackable grid">
        <div class="ui row">
          <div class="ui center aligned column">
            <h1 id="gridTitle" class="ui dividing header">Testimonials</h1>
          </div>
        </div>

        <div class="ui three column row">
          <div class="ui center aligned column">
            <div class="ui tiny circular image">
              <img src="res/images/businessman1.jpg" alt="businessman1">
            </div>
            <h4>
              Cooper Eliana
              <div><i>Chief Executive Officer of Aget</i></div>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Suspendisse eleifend diam vel lectus faucibus consectetur.
            </p>
          </div>
          <div class="ui center aligned column">
            <div class="ui tiny circular image">
              <img src="res/images/businessman2.jpg" alt="businessman2">
            </div>
            <h4>
              Xavier Peyton
              <div><i>Chief Operating Officer of Aget</i></div>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Suspendisse eleifend diam vel lectus faucibus consectetur.
            </p>
          </div>
          <div class="ui center aligned column">
            <div class="ui tiny circular image">
              <img src="res/images/businessman3.jpeg" alt="businessman3">
            </div>
            <h4>
              Jason Isabelle
              <div><i>Chief Financial Officer of Aget</i></div>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Suspendisse eleifend diam vel lectus faucibus consectetur.
            </p>
          </div>
        </div>
      </div>
    </div>

@endsection
