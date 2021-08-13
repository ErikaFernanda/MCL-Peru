<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin MCL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="assets/img/ico" href='img/favicon-icon.png'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/pegarID.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-hover-dropdown.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="https://use.fontawesome.com/10a964325b.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
     <link href="<?=base_url();?>assets/css/cssAdmin.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script src="dist/js/bootstrap-checkbox.js" defer></script>
</head>

<?php
    $msgdeletar = $this->session->flashdata('msgdeletar');    
    if (isset($msgdeletar) && $msgdeletar!=''){
        echo "<script>alert('".$msgdeletar."')</script>";
    }
?>
<?php
    $msgpainel = $this->session->flashdata('msgpainel');    
    if (isset($msgpainel) && $msgpainel!=''){
        echo "<script>alert('".$msgpainel."')</script>";
    }
?>

<body>
    <!--////////////////TOP NAVBAR FIXED NAVBAR////////////////-->
    <div class="main-container" style="overflow-x:hidden;">
        <nav class="navbar navbar-fixed-top admin-navbar">
            <div class="container-fluid">
                <div class="navbar-header" style="display: inline-block;">
                    <button id="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <a href="#" class="admin-chat-logo"><img src="<?=base_url();?>/assets/img/logoferia.png" ></a>
                    
                </div>

                <div class="dropdown pull-right">
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <h4 class="card-title-text">Notifications <a href="#" class="notifications_title pull-right">3 new Notifications</a></h4>
                        <li class="list-group-item unread">
                            <a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left avatar-img40x40">
                                        <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="media-object" style="width: 45px;margin-top: 2px;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item unread">
                            <a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left avatar-img40x40">
                                        <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="media-object" style="width: 45px;margin-top: 2px;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item unread">
                            <a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left avatar-img40x40">
                                        <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="media-object" style="width: 45px;margin-top: 2px;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item unread">
                            <a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left avatar-img40x40">
                                        <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="media-object" style="width: 45px;margin-top: 2px;">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <aside class="hit_sidebar open_sidbar sidebar-slide-push">
            <ul>
                
                <li onclick="demoDisplay1()"><a href="<?base_url();?>/admin">
            <span class="nav-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
            <span class="remove_text">Admin</span></a></li>
                <li onclick="demoDisplay2()"><a href="<?base_url();?>/admin/editarpainel" class="activ">
            <span class="nav-icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
            <span class="remove_text">Editar</span></a></li>
                <!-- <li><a href="#">
            <span class="nav-icon"><i class="fa fa-inbox" aria-hidden="true"></i></span>
            <span class="remove_text"> Inbox</span></a></li>
                <li><a href="#">
            <span class="nav-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
            <span class="remove_text"> Notification</span></a></li>
                <li><a href="#">
            <span class="nav-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
            <span class="remove_text"> Spam</span></a></li>
                <li><a href="#">
            <span class="nav-icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
            <span class="remove_text">Seting</span> </a></li> -->
                <li><a href="login/logout">
            <span class="nav-icon"><i class="fa fa-power-off" aria-hidden="true"></i></span>
            <span class="remove_text">Logout</span> </a></li>
            </ul>
        </aside>
        <section id="content_body">
        <div class="container">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        </section>
</div>
</body>
</html>

<script type="text/javascript">

$(document).ready(function(){
    $("#menu_icon").click(function(){
        $(".open_sidbar").toggleClass("small_sidebar");
        $('.remove_text').toggleClass('text_hide');
        $('#content_body').toggleClass('margin_left');
    });
});

// function demoDisplay1() {
//   document.getElementById("tabelaDiv").style.display = "block";
//   document.getElementById("editPainel").style.display = "none";
// }
// function demoDisplay2() {
//   document.getElementById("tabelaDiv").style.display = "none";
//   document.getElementById("editPainel").style.display = "block";
// }

          
</script>






