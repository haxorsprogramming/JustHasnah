var divWorks = new Vue({
    el : '#divWorks',
    data :  {
        workList : [
            {title : 'Nadha Laundry', teks : 'Application for managing laundry businesses'},
            {title : 'Kede Kita', teks : 'Application for managing small shop finances'},
            {title : 'IRA - Marsjuanda Clinic', teks : 'Image processing application for disease identification needs'},
            {title : 'Nadha Resto', teks : 'Application for managing restaurant businesses'},
            {title : 'IRA - Trianda Hospital', teks : 'Image processing application for disease identification needs'},
        ]
    }
});

var divWrite = new Vue({
    el : '#divWrite',
    data : {
        workWrite : [
            {title : 'Lu bukan kiyubi bangsat...', teks : 'Eh goblok ... gak perlu marah marah ..', pic : 'img/pos/pos_1.jpg'},
            {title : 'Mouse komputer itu banyak halunya ...', teks : 'Aneh banget, dibaperin gak mempan ..',  pic : 'img/pos/pos_2.jpg'}
        ]
    }
});

$(document).ready(function(){
    console.log("All unit please response for ready..");
    $('.collapsible').collapsible();
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
        strings: "  Front End Dev |  Product Designer |  Opensource Addict | Noob Writer",
        speed: 50,
        waitUntilVisible: true,
        afterComplete: async (step, instance) => {
            $('#divBody').slideDown(1000);
          } 
      }).go();
  }