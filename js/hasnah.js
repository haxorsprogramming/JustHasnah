var divWorks = new Vue({
  el: "#divWorks",
  data: {
    workList: [
      {
        title: "Nadha Laundry",
        teks: "Application for managing laundry businesses",
        pic : 'img/works/nadha_laundry.jpg'
      },
      {
        title: "Kede Kita",
        teks: "Application for managing small shop finances",
        pic : 'img/works/kede_kita_fix.jpg'
      },
      {
        title: "Haxors Assistant",
        teks: "Digital asistant for haxorsprogrammingclub",
        pic : 'img/works/nadha_laundry.jpg'
      },
      {
        title: "Nadha Resto",
        teks: "Application for managing restaurant businesses",
        pic : 'img/works/nadha_resto.png'
      },
      {
        title: "IRA - RSUD Pasaman Barat",
        teks: "Image processing application for disease identification needs",
        pic : 'img/works/nadha_laundry.jpg'
      },
      {
        title: "Rental Manager - Pulomas Residence",
        teks: "Application for rental ",
        pic : 'img/works/nadha_laundry.jpg'
      },
    ],
  },
});

var divSkill = new Vue({
    el : '#divSkill',
    data : {
        dataSkill : [
            {title : 'Html - Css', prog : '85%'},
            {title : 'Vue.Js', prog : '75%'},
            {title : 'PHP - Sql', prog : '80%'},
            {title : 'Figma', prog : '70%'},
            {title : 'Photoshop', prog : '73%'}
        ],
        dataPassion : [
            {title : 'Writing', prog : '65%'},
            {title : 'Bacot bacot', prog : '100%'},
            {title : 'Travelling', prog : '67%'},
            {title : 'Photography', prog : '80%'},
            {title : 'Mengkhayal', prog : '100%'}
        ]
    }
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
    $.post('http://api.haxors.or.id/justhasnah/getBacotan.php', function(data){
        let obj = JSON.parse(data);
        $('#txtHeader').html(obj.judul);
        $('#isiBacotan').html(obj.isi);
        $('#txtDeks').html(obj.deks);
        $('#divBody').hide();
        $('#divBacotan').fadeIn();
    });
}
