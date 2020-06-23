<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello bradaa... :-)</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=The+Girl+Next+Door&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gaegu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href='css/style.css' rel='stylesheet'>
</head>

<body>
    <div style='text-align:center;margin-top:20px;border-radius:2px #ecf0f1 solid;' class="container" id='divUtama'>
        <img src='img/pi12o.png' class="circle" style="width:220px;border:3px solid #26a69a;">
        <h3 class="light" id='txtHeader'></h3>
        <p class="" id='txtDeks'></p>
    </div>
    <div> </div>
    <div class="container">
        <div class="row center-align" id='divBody' style='margin-top:30px;'>
            <div class="col s12 l4" style="padding-top:12px;" id='divSkill'>
                <p>My Skills</p>
                <div class="row" v-for='ds in dataSkill'>
                    <div class="col s6">{{ds.title}}</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" :style='"width:"+ds.prog'></div>
                        </div>
                    </div>
                </div>
                <p>My Passion</p>
                <div class="row" v-for='dp in dataPassion'>
                    <div class="col s6">{{dp.title}}</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" :style='"width:"+dp.prog'></div>
                        </div>
                    </div>
                </div>
                <p>Follow me on <a href='https://twitter.com/nadha_alditha'>Twitter</a></p>
            </div>
            <div class="col s12 l4" style="padding-top:12px;" id='divWorks'>
                <p>My Works & Portfolio</p>
                <ul class="collapsible">
                    <li v-for='ls in workList'>
                        <div class="collapsible-header"><i class="material-icons">filter_vintage</i>{{ls.title}}</div>
                        <div class="collapsible-body">
                            <img :src='ls.pic' style="width: 150px;"><br/>    
                        <span>{{ls.teks}}</span>
                        </div>
                    </li>
                </ul>
                <p>
                    See my work on my <a href='https://github.com/nadhaalditha' target="new">github</a>
                </p>
            </div>
            <div class="col s12 l4" style="padding-top:12px;" id='divWrite'>
                <p>My Write</p>
                <div class="row" v-for='wl in workWrite'>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-image">
                                <img :src="wl.pic">
                                <span class="card-title white-text" style='background-color: rgba(255, 255, 255, 0.7);'>
                                <a href='#!'  v-on:click='bacaBacotan(wl.id)'>{{wl.title}}</a></span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red" href='#!' v-on:click='bacaBacotan(wl.id)'>
                                    <i class="material-icons">chrome_reader_mode</i>
                                </a>
                            </div>
                            <div class="card-content">
                                <p>{{wl.teks}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    See my write on <a href='https://github.com/nadhaalditha' target="new">here</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //div bacotan -->
    <div class="container" id='divBacotan'>
    <div class="row">
      <div class="col s12 center-align">
          <img src='img/pos/pos_1.jpg' style="width: 900px;" class="responsive-img">
          <div id='isiBacotan'>
            </div>
          <a href='#!'>Tengok tulisanku yg laen dulu bray ..</a> | <a href='#!' v-on:click='keAwal'>Balek ke awal webku pas siap loading</a>
      </div>
    </div>
    </div>
    <script src='js/hasnah.js'></script>
</body>

</html>