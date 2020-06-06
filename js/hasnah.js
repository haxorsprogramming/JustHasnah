$(document).ready(function(){
    console.log("All unit please response for ready..");
});

$('#divBody').hide();

new TypeIt("#txtHeader", {
    strings: ["Hi ... ", "Iam Hasnah .. :)"],
    speed: 100,
    afterComplete : async(step, instance) => {
        teksKedua();
    }
  }).go();

 

  function teksKedua()
  {
    new TypeIt("#txtDeks", {
        strings: " * Front End Dev | * Product Designer | * Opensource Addict | * Noob Writer",
        speed: 50,
        waitUntilVisible: true,
        afterComplete: async (step, instance) => {
            $('#divBody').slideDown(1000);
          } 
      }).go();
  }