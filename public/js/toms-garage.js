function getPadding()
{
  var windowWidth = $(window).width();

  if(windowWidth < 512)
  {
    return "20px";
  }
  else if(512 <= windowWidth && windowWidth < 640)
  {
    return "30px";
  }
  else if(640 <= windowWidth && windowWidth < 768)
  {
    return "40px";
  }
  else if(768 <= windowWidth && windowWidth < 896)
  {
    return "50px";
  }
  else if(896 <= windowWidth)
  {
    return "60px";
  }
}

function openSideBarMenu()
{
  $("#sideBarMenu").sidebar('setting', 'transition', 'overlay').sidebar("toggle");
}

$(window).scroll(
  function()
  {
    var scrollHeight = $(window).scrollTop();

    $("#topBarMenu").css("background-color", "rgba(42, 42, 42, " + (scrollHeight / 200) + ")");

    if(scrollHeight > 100)
    {
      $("#topBarMenu").animate(
        {
          paddingTop: "7px"
        },
        {
          duration: 300,
          queue: false
        }
      );
    }
    else
    {
      $("#topBarMenu").animate(
        {
          paddingTop: getPadding()
        },
        {
          duration: 300,
          queue: false
        }
      );
    }
  }
);

if($(window).width() >= 1024)
{
  $("#sideBarMenuBtn").addClass("big");
}

if($(window).width() < 512)
{
  $("#menuBtnText").text("");
}

$(window).resize(
  function()
  {
    if($(window).width() >= 1024)
    {
      if (!$("#sideBarMenuBtn").hasClass("big"))
      {
        $("#sideBarMenuBtn").addClass("big");
      }
    }
    else
    {
      if ($("#sideBarMenuBtn").hasClass("big"))
      {
        $("#sideBarMenuBtn").removeClass("big");
      }
    }

    if($(window).width() < 512)
    {
      $("#menuBtnText").text("");
    }
    else
    {
      $("#menuBtnText").text("Menu");
    }
  }
);

$("#appointmentTypes").dropdown();

$('#makeAppointmentForm').form(
  {
    fields: {
      firstName: {
        identifier: 'firstName',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your first name...'
          }
        ]
      },

      lastName: {
        identifier: 'lastName',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your last name...'
          }
        ]
      },

      phone: {
        identifier: 'phone',
        rules: [
          {
            type: 'regExp[^[0-9]{11}$]',
            prompt: 'Plase enter your valid phone number...'
          }
        ]
      },

      email: {
        identifier: 'email',
        rules: [
          {
            type: 'regExp[^\.+\@\.+\\.[a-zA-Z]+\.*$]',
            prompt: 'Plase enter your valid email...'
          }
        ]
      },

      appointmentType: {
        identifier: 'appointmentType',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase select appointment type...'
          }
        ]
      },

      details: {
        identifier: 'details',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your car\'s details...'
          }
        ]
      }
    },

    onSuccess: function(event, fields){
      event.preventDefault();

      var serializedData = $('#makeAppointmentForm').serialize();

      $('#makeAppointmentForm').addClass('loading');

      var request = $.ajax(
        {
          url: '/make-appointment',
          type: 'post',
          data: serializedData
        }
      );

      request.done(
        function(response, textStatus, jqXHR)
        {
          if(response.status === 'success')
          {
            $('#modalHeader').text('Your Request Successfully Submitted');
            $('#modalHeader').css('color', 'green');
            $('#modalContent').text('One of our experts will contact with you as soon as possible.');
          }
          else
          {
            $('#modalHeader').text('Something went wrong!');
            $('#modalHeader').css('color', 'red');
            $('#modalContent').text('We are so sorry. Something went wrong. Please try again later.');
          }

          $('#responseModal').modal('show');
        }
      );

      request.fail(
        function(jqXHR, textStatus, errorThrown)
        {
          $('#modalHeader').text('Something went wrong!');
          $('#modalHeader').css('color', 'red');
          $('#modalContent').text('We are so sorry. Something went wrong. Please try again later.');
          $('#responseModal').modal('show');
        }
      );

      request.always(
        function()
        {
          $('#makeAppointmentForm').removeClass('loading');

          $('input[name=firstName]').val('');
          $('input[name=middleName]').val('');
          $('input[name=lastName]').val('');
          $('input[name=phone]').val('');
          $('input[name=email]').val('');

          $('input[name=appointmentType]').val('');
          $('#selectedText').text('Please Select');
          $('#selectedText').addClass('default');

          $('textarea[name=details]').val('');
        }
      );
    }
  }
);

$('#contactUsForm').form(
  {
    fields: {
      firstName: {
        identifier: 'firstName',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your first name...'
          }
        ]
      },

      lastName: {
        identifier: 'lastName',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your last name...'
          }
        ]
      },

      phone: {
        identifier: 'phone',
        rules: [
          {
            type: 'regExp[^[0-9]{11}$]',
            prompt: 'Plase enter your valid phone number...'
          }
        ]
      },

      email: {
        identifier: 'email',
        rules: [
          {
            type: 'regExp[^\.+\@\.+\\.[a-zA-Z]+\.*$]',
            prompt: 'Plase enter your valid email...'
          }
        ]
      },

      details: {
        identifier: 'details',
        rules: [
          {
            type: 'empty',
            prompt: 'Plase enter your questions\' details...'
          }
        ]
      }
    },

    onSuccess: function(event, fields){
      event.preventDefault();

      var serializedData = $('#contactUsForm').serialize();

      $('#contactUsForm').addClass('loading');

      var request = $.ajax(
        {
          url: '/contact-us',
          type: 'post',
          data: serializedData
        }
      );

      request.done(
        function(response, textStatus, jqXHR)
        {
          if(response.status === 'success')
          {
            $('#modalHeader').text('Your Request Successfully Submitted');
            $('#modalHeader').css('color', 'green');
            $('#modalContent').text('One of our experts will contact with you as soon as possible.');
          }
          else
          {
            $('#modalHeader').text('Something went wrong!');
            $('#modalHeader').css('color', 'red');
            $('#modalContent').text('We are so sorry. Something went wrong. Please try again later.');
          }

          $('#responseModal').modal('show');
        }
      );

      request.fail(
        function(jqXHR, textStatus, errorThrown)
        {
          $('#modalHeader').text('Something went wrong!');
          $('#modalHeader').css('color', 'red');
          $('#modalContent').text('We are so sorry. Something went wrong. Please try again later.');
          $('#responseModal').modal('show');
        }
      );

      request.always(
        function()
        {
          $('#contactUsForm').removeClass('loading');

          $('input[name=firstName]').val('');
          $('input[name=middleName]').val('');
          $('input[name=lastName]').val('');
          $('input[name=phone]').val('');
          $('input[name=email]').val('');
          $('textarea[name=details]').val('');
        }
      );
    }
  }
);
