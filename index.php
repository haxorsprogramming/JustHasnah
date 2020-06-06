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
        <img src='img/my.jpg' class="circle" style="border:7px solid #26a69a;">
        <h3 class="light" id='txtHeader'></h3>
        <p class="" id='txtDeks'></p>
    </div>
    <div> </div>
    <div class="container">
        <div class="row center-align" id='divBody' style='margin-top:30px;'>
            <div class="col s12 l4" style="padding-top:12px;">
                <p>My Skills</p>
                <div class="row">
                    <div class="col s6">HTML - CSS</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Vue Js</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">React Js</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Figma</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Photoshop</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>

                <p>My Passion</p>
                <div class="row">
                    <div class="col s6">Writing</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Bacot bacot</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Travelling</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Photography</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">Mengkhayal</div>
                    <div class="col s6">
                        <div class="progress">
                            <div class="determinate" style="width: 100%"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col s12 l4" style="padding-top:12px;" id='divWorks'>
                <p>My Works & Portfolio</p>
                <ul class="collapsible">
                    <li v-for='ls in workList'>
                        <div class="collapsible-header"><i class="material-icons">filter_vintage</i>{{ls.title}}</div>
                        <div class="collapsible-body">
                            <img src='img/works/nadha_laundry.jpg' style="width: 150px;"><br/>    
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
                                <span class="card-title white-text" style='background-color: rgba(38, 166, 154, 0.7);'>{{wl.title}}</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                        class="material-icons">chrome_reader_mode</i></a>
                            </div>
                            <div class="card-content">
                                <p>{{wl.teks}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src='js/hasnah.js'></script>
</body>

</html>