var x = document.getElementById("myLinks");
            function myFunction() {
              
              if (x.style.display === "block") {
                x.style.display = "none";
                x.style.position = "inherit";
              } else {
                x.style.display = "block";
                x.style.position = "absolute";
                x.style.width = "100%";
                x.style.zIndex = "1";
              }
              
            }
            function myFunction2() {
            if(window.outerWidth >= 769) {
                x.style.display = "block";
                console.log("hey");
              } else {
                x.style.display = "none";
              }
            }