var divWorks = new Vue({
  el: "#divWorks",
  data: {
    workList: [
      {
        title: "Nadha Laundry",
        teks: "Application for managing laundry businesses",
      },
      {
        title: "Kede Kita",
        teks: "Application for managing small shop finances",
      },
      {
        title: "IRA - Marsjuanda Clinic",
        teks: "Image processing application for disease identification needs",
      },
      {
        title: "Nadha Resto",
        teks: "Application for managing restaurant businesses",
      },
      {
        title: "IRA - Trianda Hospital",
        teks: "Image processing application for disease identification needs",
      },
      {
        title: "Rental Manager - Pulomas Residence",
        teks: "Application for rental ",
      },
    ],
  },
});

var divWrite = new Vue({
  el: "#divWrite",
  data: {
    workWrite: [
      {
        id: "lbkb",
        title: "Lu bukan kiyubi bro...",
        teks: "Eh goblok ... gak perlu marah marah ..",
        pic: "img/pos/pos_1.jpg",
      },
      {
        id: "mkibl",
        title: "Mouse komputer itu banyak halunya ...",
        teks: "Aneh banget, dibaperin gak mempan ..",
        pic: "img/pos/pos_2.jpg",
      },
    ],
  },
  methods: {
    bacaBacotan: function (id) {
        bacaBacotan(id);
    },
  },
});


var divBacotan = new Vue({
    el : '#divBacotan',
    data : {
        judul : '',
        deks : ''
    },
    methods : {
        keAwal : function()
        {
            $('#txtHeader').html("Hi ...  <br/>Iam Hasnah .. :)");
            $('#txtDeks').html("Front End Dev |  Product Designer |  Opensource Addict | Noob Writer");
            $('#divBacotan').hide();
            $('#divBody').fadeIn();
           
        }
    }
});

$(document).ready(function () {
  console.log("All unit please response for ready..");
  $(".collapsible").collapsible();
});

$('#divBacotan').hide();
$("#divBody").hide();

new TypeIt("#txtHeader", {
  strings: ["Hi ... ", "Iam Hasnah .. :)"],
  speed: 100,
  afterComplete: async (step, instance) => {
    teksKedua();
  },
}).go();

function teksKedua() {
  new TypeIt("#txtDeks", {
    strings:
      "Front End Dev |  Product Designer |  Opensource Addict | Noob Writer",
    speed: 50,
    waitUntilVisible: true,
    afterComplete: async (step, instance) => {
      $("#divBody").slideDown(1000);
    },
  }).go();
}

function bacaBacotan(id)
{
    $('#txtHeader').html("Lu bukan kyubi bro ..");
    $('#txtDeks').html("Dilarang baper ... apalagi baca tulisan 'dilarang baper' ...");
    $('#divBody').hide();
    $('#divBacotan').fadeIn();
}
