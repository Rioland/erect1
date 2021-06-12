$(document).ready(function () {
  const url = 'app/Apis/api.php'

  $('#current').click(function () {
    var email = $('#email').val().trim()
    var pass = $('#password').val().trim()
    var country = $('#country').val().trim()
    // var oksionemail = $('#oksionemail')[0].checked
    var okterms = $('#okterms')[0].checked
    if (email.length > 0) {
      if (pass.length > 0) {
        var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        var emailFormat = re.test(email) // This return result in Boolean type
        if (emailFormat) {
          if (country.length > 0 && country.toLowerCase() != 'select') {
            if (okterms == true) {
              $('.current').css('display', 'none')
              $('#loading').css('display', 'block')
              $.ajax({
                type: 'POST',
                url: url,
                data: {
                  email: email,
                  pass: pass,
                  country: country,
                  action: 'register',
                },
                // dataType: "json",
                success: function (response) {
                  $('.current').css('display', 'block')
                  $('#loading').css('display', 'none')

                  if (response == true) {
                    window.location.href = 'dasboard'
                  } else {
                    alert(response)
                  }
                },
              })
            } else {
              alert('accept out terms and policy')
            }
          } else {
            alert('please choose your country')
          }
        } else {
          alert('Invalid email format')
        }
      } else {
        alert('Password Field can not be empty')
      }
    } else {
      alert('Email Field can not be empty')
    }
  })

  $('#logbtn').click(function () {
    var email = $('#email').val().trim()
    var pass = $('#password').val().trim()
    if (email.length > 0) {
      if (pass.length > 0) {
        var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        var emailFormat = re.test(email) // This return result in Boolean type
        if (emailFormat) {
          $('.logbtn').css('display', 'none')
          $('#loading').css('display', 'block')

          $.ajax({
            type: 'POST',
            url: url,
            data: {
              email: email,
              password: pass,
              action: 'login',
            },
            // dataType: "dataType",
            success: function (response) {
              $('.logbtn').css('display', 'block')
              $('#loading').css('display', 'none')

              if (response == true) {
                window.location.href = 'dasboard'
              } else {
                console.log(response)
                alert(response)
              }
            },
          })
        } else {
          alert('Invalid email format')
        }
      } else {
        alert('Password Field can not be empty')
      }
    } else {
      alert('Email Field can not be empty')
    }
  })

  $('#restbtn').click(function () {
    var email = $('#emailrr').val().trim()
    if (email.length > 0) {
      var re = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
      var emailFormat = re.test(email) // This return result in Boolean type
      if (emailFormat) {
        $('.restbtn').css('display', 'none')
        $('#loadingrr').css('display', 'block')
        $.ajax({
          type: 'POST',
          url: 'app/Apis/api.php',
          data: {
            action: 'reset',
            email: email,
          },
          success: function (response) {
            $('.restbtn').css('display', 'block')
            $('#loadingrr').css('display', 'none')
            alert(response)
          },
         })
      } else {
        alert('Invalid email format')
      }
    } else {
      alert('Email Field can not be empty')
    }
  })

  $('#getnepass').click(function () {
    var newpassword = $('#newpassword').val().trim()
    var cpassword = $('#cnewpassword').val().trim()
    var token = $('#token').val().trim()

    if (newpassword.length > 0 && cpassword.length > 0) {
      if (newpassword == cpassword) {
        if (token.length > 0) {
          $('.getnepass').css('display', 'none')
          $('#loadinggr').css('display', 'block')
          $.ajax({
            type: 'POST',
            url: 'app/Apis/api.php',
            data: {
              action: 'newpassword',
              password: newpassword,
              token: token,
            },
            //   dataType: "dataType",
            success: function (response) {
             if(response==true){
               alert("password as been change successfully");
               window.location.href="login"
             }else{
               alert("Error occur wen trying to send request");
             }
              
              $('.getnepass').css('display', 'block')
              $('#loadinggr').css('display', 'none')
            },
          })
        } else {
          alert('Invalid Token trry again')
        }
      } else {
        alert('Password not match')
      }
    } else {
      alert('All field are required')
    }
  })


})
