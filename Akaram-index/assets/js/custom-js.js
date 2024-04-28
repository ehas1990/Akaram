$(document).ready(function() {  
   $(".read-more").click(function(){

$(".list_1").hide();
$(".list_2").show();     
$(".list_3").hide();           
    }); 
    $(".read-more1").click(function(){

        $(".list_1").hide();
        $(".list_3").show();     
        $(".list_2").hide();           
            }); 


    });  


  document.addEventListener('DOMContentLoaded', function () {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const imagesPerLoad = 15;
    const allImages = document.querySelectorAll('#imageContainer .gallary_item');
    let currentOffset = 0;

    function showAdditionalImages() {
      for (let i = currentOffset; i < currentOffset + imagesPerLoad; i++) {
        if (allImages[i]) {
          allImages[i].style.display = 'block';
        }
      }
      currentOffset += imagesPerLoad;

      if (currentOffset >= allImages.length) {
        loadMoreBtn.style.display = 'none';
      }
    }

    // Hide images initially
    for (let i = imagesPerLoad; i < allImages.length; i++) {
      allImages[i].style.display = 'none';
    }

    loadMoreBtn.addEventListener('click', showAdditionalImages);
  });


// document.addEventListener("DOMContentLoaded", function() {
  
//     if (!localStorage.getItem("visitorCount")) {

//         localStorage.setItem("visitorCount", "0");
//     }
    
  
//     var count = parseInt(localStorage.getItem("visitorCount"));
    

//     count++;
    

//     document.getElementById("visitorCount").innerText = count;

//     localStorage.setItem("visitorCount", count.toString());
// });

