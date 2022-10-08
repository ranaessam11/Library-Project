
function colorfun1(){
    document.getElementById("Log1").style.color="blue";
  }
  function colorfun(){
    document.getElementById("Reset").style.color="blue";
  }
  
  
  function zoomfun1(){
    document.getElementById("Email").style.width="300px";
  }
  function zoomfun(){
    document.getElementById("Password").style.width="300px";
  }
  function resetfun(){
    return confirm('Are You Sure You Want Reset Data ?')
  }
  function clickfun(){
  document.getElementById("search").style.backgroundColor="white";
  }
  function editfun(){
    return confirm('Are You Sure You Want To Save Edit ?')
  }
  function pdffun(){
    document.getElementById("book1pdf").style.width="500px";
  }

  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
  }).resize();
  
  
  //const time = window.setTimeout(welcome,1000)
  //function welcome(){
   // return window.alert('Welcome To Our Online Library')
  